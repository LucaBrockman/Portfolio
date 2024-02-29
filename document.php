<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/documentheader.css">
</head>
    <body>
        <header>
            <button class="back-button" onclick="history.back()">Ga terug</button>
            <h1>Professional Skills Portfolio</h1>
            <?php
            $file = isset($_GET['file']) ? $_GET['file'] : '';
            if ($file && pathinfo($file, PATHINFO_EXTENSION) == "pdf") {
                echo "<button class='back-button' onclick='window.open(\"./documenten/$file\", \"_blank\");'>Download</button>";
            }
        ?>
        </header>
        <main>
            <?php
                $file = isset($_GET['file']) ? $_GET['file'] : '';
                if ($file && pathinfo($file, PATHINFO_EXTENSION) == "pdf") {
                    echo "<iframe src='./documenten/$file' title='PDF Document'></iframe>";
                } else {
                    echo "<p>No valid PDF file specified.</p>";
                }
            ?>
        </main>
        <?php include "partials/footer.php";?>
    </body>
</html>