<?php
    $arrStr = array("1", "2", "1", "3");
    unique_str($arrStr);
    function unique_str($array)
    {
        for($i=0; $i<count($array); $i++)//count()获取数组长度
        {
            $flag = 0;
            for($j = 0; $j < count($array); $j++)
            {
                if($array[$j] === $array[$i] && $j!=$i)
                {
                    $flag = 1;
                    break;
                }
            }
            if($flag === 0)
            {
                echo $array[$i] . "<br />";
            }
        }
    }
?>