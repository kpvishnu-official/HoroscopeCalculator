<?php

//define exceptions for error handling e.g. if only 30 days in month, or for Feb, if only 28/29 days possible

function exceptionHandler($day, $month) {

    $thirtyOneExceptions = ['sep', 'apr', 'jun', 'nov'];
    $febExceptions = [30, 31];
    if ($day == 31 && in_array($month, $thirtyOneExceptions)) {
        echo "Oops! Not sure that's a calendar day. Go back and try again!";
    } elseif ($month == 'feb' && in_array($day, $febExceptions)) {
        echo "Oops! Not sure that's a calendar day. Go back and try again!";
    } else {
        //run horoscopeCalc function with correct dates input
        echo 'Running calculator..' . '<br>';
        horoscopeCalc($day, $month);
    }
}

function january($day) {
    if ($day <= 20) {
        $sign = 'Capricorn';
    } else {
        $sign = 'Aquarius';
    }
    echo $sign;
}

//This function calculates the sign of the month and date put in and returns it as a variable

function horoscopeCalc($day, $month) {
    switch ($month) {
        case 'jan':
            january($day);
            break;
    }
}
