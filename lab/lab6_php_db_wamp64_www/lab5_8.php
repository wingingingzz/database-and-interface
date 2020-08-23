<?php
    $greetingStr0 = "Happy New Year!";
    $greetingStr1 = "Happy Birthday!";
    $greetingStr2 = "Best Wishes!";
    $greetingStr3 = "Best Regards!";
    $greetingStr4 = "Merry Christmas!";

    # set the seed for mtrand with the number of microseconds
    # since the last full second of the clock
    mt_srand((double)microtime() * 1000000);
    $number = mt_rand(0, 4); # different from sample?????????????????????????????????????

    switch($number)
    {
        case 0:
            echo $greetingStr0 . "<br />";
            break;
        case 1:
            echo $greetingStr1 . "<br />";
            break;
        case 2:
            echo $greetingStr2 . "<br />";
            break;
        case 3:
            echo $greetingStr3 . "<br />";
            break;
        case 4:
            echo $greetingStr4 . "<br />";
            break;
        default:
            echo "Error! <br />";
    }
?>