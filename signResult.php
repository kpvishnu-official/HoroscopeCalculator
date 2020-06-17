<!DOCTYPE html>
<?php
require_once('signScript.php');
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link href="horoscopeStylesNew.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@300&display=swap" rel="stylesheet">
        <title>
            Horoscope calculator
        </title>
    </head>
    <body>
            <?php
            //call exceptionHandler to check if input date is correct. This then sparks chain of functions accordingly
            exceptionHandler($_POST['day'], $_POST['month']);
            ?>
    </body>
</html>
