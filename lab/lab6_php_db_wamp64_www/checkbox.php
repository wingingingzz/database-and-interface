<?php
if($_POST["mrbook"]!= null){                       //判断复选框如果不为空，则执行下面的操作
   echo "您选择的结果是：";                         //输出字符串
   for($i = 0; $i < count($_POST["mrbook"]);$i++){  //通过 for 循环语句输出选中复选框的值
      echo $_POST["mrbook"][$i]."&nbsp;";                //循环输出用户选择的图书类别
   }
}
?>