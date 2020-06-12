<!DOCTYPE html>
<?php
include 'signScript.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Horoscope calculator
        </title>
    </head>
    <body>
        <div>
        <h1>Your sign is...</h1>
        </div>
        <div>
            <?php
            calcSign($_POST['day'], $_POST['month']);
            ?>
        </div>
    </body>
</html>
