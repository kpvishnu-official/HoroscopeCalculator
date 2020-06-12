<?php

function calcSign($day, $month) {
if ($day == 27 && $month == 'jan'){
    $yourSign = 'Aquarius';
}
    header("Location: http://localhost/HoroscopeProject/signResult.php?sign=yourSign");
    exit();
}

calcSign($_POST['day'], $_POST['month']);
?>
