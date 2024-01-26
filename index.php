<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
        <header>
                <h1>Professional Skills Portfolio</h1>
        </header>
        <main>
            <section class="pdf-grid">
                <?php
                    $directory = "./documenten";
                    $files = scandir($directory);
                    
                    foreach ($files as $file) {
                        if (pathinfo($file, PATHINFO_EXTENSION) == "pdf") {
                            $filenameWithoutExtension = basename($file, ".pdf");
                            $thumbnailPath = "./thumbnails/" . $filenameWithoutExtension . ".png"; // Adjust the path accordingly

                            echo "<div class='pdf-container'>";
                            echo "<a href='document.php?file=$file'>";
                            echo "<img src='" . (file_exists($thumbnailPath) ? $thumbnailPath : 'https://placehold.co/240x340') . "' alt='Thumbnail'>";
                            echo "<div class='pdf-title'>" . htmlspecialchars($filenameWithoutExtension) . "</div>";
                            echo "</div>";
                            echo "</a>";
                        }
                    }
                ?>
            </section>
        </main>
        <?php include "partials/footer.php";?>
    </body>
</html>