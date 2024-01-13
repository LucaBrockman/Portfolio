<?php
include "session.php";
?>
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
        <?php include "partials/navbar.php";?>
        <!-- <header>
            <h1>Profesional Skills Portfolio</h1>
        </header> -->
        <main>
            <?php
                if (isset($_GET['file'])) {
                    $file = $_GET['file'];

                    // Security Check: Make sure it's a valid PDF file in your directory
                    // IMPORTANT: Implement necessary security checks here

                    // Display the PDF file
                    echo "<object data='./documenten/$file' type='application/pdf' width='100%' height='600px'></object>";
                }
                else {
                    echo "No file specified.";
                }
            ?>
        </main>
        <?php include "partials/footer.php";?>
    </body>
</html>