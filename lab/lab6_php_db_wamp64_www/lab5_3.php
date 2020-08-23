<?php
    $arrStr = array("1", "1", "5", "1", "2", "3",  "3", "3", "4", "5", "3", "5", "5");
    frequent_str($arrStr);
    function frequent_str($array)
    {
        $countArr=array(); //create an empty array
        for($i = 0; $i < count($array); $i++)
        {
            $k = array_keys($countArr);
            $flag = 0;
            for($j = 0; $j < count($countArr); $j++)
            {
                if($k[$j] == $array[$i]) //key of countArr == element of array
                {
                    $countArr[$array[$i]] += 1;
                    $flag = 1;
                }
            }
            if($flag === 0)
            {
                $countArr[$array[$i]] = 1;
            }
        }
        arsort($countArr); 
        //keep key-value association, sort by value, reverse
        //string in alphabetical order, then numeric values in ascending order
        $k = array_keys($countArr);
        $temp = reset($k); //set ptr to the beginning of array $k
        for($i = 0; $i < 3; $i++)
        {
            echo $temp . "<br />";
            $temp = next($k); //set ptr to next element of $k
        }
    }
?>