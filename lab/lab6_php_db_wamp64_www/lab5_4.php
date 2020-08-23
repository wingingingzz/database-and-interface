<?php
    $arrNum = array(19, -9, 10, 82, -90, 7);
    $arrPos = array();
    $arrNeg = array();
    seperate_pos_neg($arrNum, $arrPos, $arrNeg);

    echo "Positive: <br />";
    foreach($arrPos as $temp)
    {
        echo $temp . "<br />";
    }

    echo "Negative: <br />";
    foreach($arrNeg as $temp)
    {
        echo $temp . "<br />";
    }
    function seperate_pos_neg($array, &$positive, &$negative)
    {
        foreach($array as $temp)
        {
            if($temp > 0)
            {
                array_push($positive, $temp);
            }
            else if($temp < 0)
            {
                array_push($negative, $temp);
            }
        }
    }
?>