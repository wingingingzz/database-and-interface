<?php
    $arrNum = array(1, 4, 2, 9, 2, 3 ,7, 8, 2);
    average_median_num($arrNum);
    function average_median_num($array)
    {
        $arrLen = count($array);
        $total = 0;
        foreach($array as $temp)
        {
            $total = $total + $temp;
        }
        $average = $total/$arrLen;
        echo "Average: " . $average . "<br />";

        sort($array); //sort array (original array is changed, but only inside function as pass by value)
        if($arrLen % 2 == 0)
        {
            $median = ($array[$arrLen/2] + $array[$arrLen/2-1])/2;
        }
        else
        {
            $median = $array[$arrLen/2-0.5];
        }
        echo "Median: " . $median . "<br />";
    }
?>