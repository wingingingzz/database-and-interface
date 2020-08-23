<?php
    $arrStr=array("1", "2", "1", "3");
    unique_str($arrStr);
    function unique_str($array)
    {
        foreach($array as $temp)
        {
            echo $temp . "<br />";
        }
    }
?>