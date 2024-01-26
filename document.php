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
            <h1>Profesional Skills Portfolio</h1>
            <button class="back-button" onclick="history.back()">Ga terug</button>
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