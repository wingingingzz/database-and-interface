<?php
    $doubleStr = "1.863   -1038.26  772.7492 73.924527  -58 -58.8888";
    echo first_fourdigits($doubleStr) . "<br />";
    function first_fourdigits($str)
    {
        $strArr = explode(" ", $str);
        foreach($strArr as $temp)
        {
            $flag = 0;
            for($i = 0; $i < strlen($temp); $i++)
            {
                if($temp[$i] == ".")
                {
                    $countDigit = 0;
                    $flag = 1;
                    continue;
                }
                if($flag === 1)
                {
                    $countDigit += 1; 
                }
            }
            if($countDigit === 4)
            {
                return (double)$temp; //convert str to double
            }
        }
        return false;
    }
?>