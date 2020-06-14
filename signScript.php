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
        horoscopeCalc($day, $month);
    }
}

//12 functions below, one per month, to calculate sign
function january($day) {
    if ($day <= 20) {
        $sign = 'Capricorn';
    } else {
        $sign = 'Aquarius';
    }
    echo '<div>' . $sign . '</div>';
}

function february($day) {
    if ($day <= 19) {
        $sign = 'Aquarius';
    } else {
        $sign = 'Pisces';
    }
    echo "<div id='result'>" . $sign . "</div>";
}

function march($day) {
    if ($day <= 20) {
        $sign = 'Pisces';
    } else {
        $sign = 'Aries';
    }
    echo '<div>' . $sign . '</div>';
}

function april($day) {
    if ($day <= 20) {
        $sign = 'Aries';
    } else {
        $sign = 'Taurus';
    }
    echo '<div>' . $sign . '</div>';
}

function may($day) {
    if ($day <= 20) {
        $sign = 'Taurus';
    } else {
        $sign = 'Gemini';
    }
    echo '<div>' . $sign . '</div>';
}

function june($day) {
    if ($day <= 21) {
        $sign = 'Gemini';
    } else {
        $sign = 'Cancer';
    }
    echo '<div>' . $sign . '</div>';
}

function july($day) {
    if ($day <= 22) {
        $sign = 'Cancer';
    } else {
        $sign = 'Leo';
    }
    echo '<div>' . $sign . '</div>';
}

function august($day) {
    if ($day <= 23) {
        $sign = 'Leo';
    } else {
        $sign = 'Virgo';
    }
    echo '<div>' . $sign . '</div>';
}

function september($day) {
    if ($day <= 21) {
        $sign = 'Virgo';
    } else {
        $sign = 'Libra';
    }
    echo '<div>' . $sign . '</div>';
}

function october($day) {
    if ($day <= 22) {
        $sign = 'Libra';
    } else {
        $sign = 'Scorpio';
    }
    echo '<div>' . $sign . '</div>';
}

function november($day) {
    if ($day <= 21) {
        $sign = 'Scorpio';
    } else {
        $sign = 'Sagittarius';
    }
    echo '<div>' . $sign . '</div>';
}

function december($day) {
    if ($day <= 21) {
        $sign = 'Sagittarius';
    } else {
        $sign = 'Capricorn';
    }
    echo '<div>' . $sign . '</div>';
}

//This function below calls one of the 12 functions above based on date entered
function horoscopeCalc($day, $month) {
    switch ($month) {
        case 'jan':
            january($day);
            break;
        case 'feb':
            february($day);
            break;
        case 'mar':
            march($day);
            break;
        case 'apr':
            april($day);
            break;
        case 'may':
            may($day);
            break;
        case 'jun':
            june($day);
            break;
        case 'jul':
            july($day);
            break;
        case 'aug':
            august($day);
            break;
        case 'sep':
            september($day);
            break;
        case 'oct':
            october($day);
            break;
        case 'nov':
            november($day);
            break;
    }
}
