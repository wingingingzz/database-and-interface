<?php
    $formatStr = "hello, world. Hello? World Hi world, hi. world hello World. Hi, World Hi. World";
    common_words($formatStr);
    function common_words($str)
    {
        $wordArr = preg_split("/[\s,?.]+/", $str);
        $countArr=array(); //create an empty array
        for($i = 0; $i < count($wordArr); $i++)
        {
            $k = array_keys($countArr);
            $flag = 0;
            for($j = 0; $j < count($countArr); $j++)
            {
                if($k[$j] == $wordArr[$i]) //key of countArr == element of array
                {
                    $countArr[$wordArr[$i]] += 1;
                    $flag = 1;
                }
            }
            if($flag === 0)
            {
                $countArr[$wordArr[$i]] = 1;
            }
        }
        arsort($countArr); 
        //keep key-value association, sort by value, reverse
        //string in alphabetical order, then numeric values in ascending order
        $k = array_keys($countArr);
        $temp = reset($k); //set ptr to the beginning of array $k
        $count = 0;
        while($count < 3)
        {
            if(strlen($temp) > 3)
            {
                echo $temp . "<br />";
                $count++;
            }
            $temp = next($k); //set ptr to next element of $k
        }
    }
?>