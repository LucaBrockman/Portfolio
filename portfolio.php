<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
    <body>
        <header>
            <h1>Profesional Skills Portfolio</h1>
        </header>
        <main>
            <section class="pdf-grid">
                <?php
                    $directory = "./documenten";
                    $files = scandir($directory);
                    
                    foreach ($files as $file) {
                        if (pathinfo($file, PATHINFO_EXTENSION) == "pdf") {
                            $filenameWithoutExtension = basename($file, ".pdf");
                            echo "<div class='pdf-container'>";
                            echo "<div class='pdf-title'>" . htmlspecialchars($filenameWithoutExtension) . "</div>";
                            echo "<object data='./documenten/$file' type='application/pdf' width='100%' height='100%'></object>";
                            echo "<div class='pdf-overlay' onclick='window.open(\"document.php?file=$file\", \"_blank\");'></div>";
                            echo "</div>";
                        }
                    }
                ?>
            </section>
        </main>
        <?php include "partials/footer.php";?>
    </body>
</html>