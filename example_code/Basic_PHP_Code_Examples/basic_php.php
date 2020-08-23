<!----------------------------------- Example #2 ----------------------------------->
<!--
<?php echo '<p>Hello World</p>'; ?>
-->


<!----------------------------------- Example #3 ----------------------------------->
<!--
<?php 
	$txt = "Hi";
	$x = 5;
	$y = 10.5;
	echo "<p>My variables and values: txt = $txt, x = $x, y = $y</p>"; 
?>
-->


<!----------------------------------- Example #4 ----------------------------------->
<!--
<?php 
	$x = 9223372036854775807;

	echo "<p> " . $x . "</p>";

	$x = $x + 1;
	echo "<p> " . $x . "</p>";

	echo "<p> " . PHP_INT_MAX . "</p>";
	echo "<p> " . PHP_FLOAT_MAX . "</p>";
	/* only version 7.2 and above */

?>
-->


<!----------------------------------- Example #5 ----------------------------------->
<!--
<?php 
	$txt = "Hi\n";
	$n = 5;
	echo "<p> " . $txt . "</p>";

	$txt = 'Hi\n';
	echo "<p> " . $txt . "</p>";

	$txt = "Hi\n";
	echo "<p> $txt </p>";
	echo '<p> $txt </p>';
	echo "<p> \$txt </p>";
	/* like is \ is used as escape sequence */
?>
-->


<!----------------------------------- Example #6 ----------------------------------->
<!--
<?php 
	$txt = "Hi";
	$x = 5;
	$y = 10.5;
	$e;			
	$b = false;

	echo $x + $e + $y; 
	/* here $e is treated as zero */

	echo "<p> $txt" . $e . "$txt</p>"; 
	/* here $e is treated as empty string */

	echo "<p>" . ($e ? "true" : "false") . "</p>";
	/* false if it is empty string or string 0, otherwise true */

	$a = IsSet($e);
	/* IsSet check if $e has been assigned a value */
	echo $a ? "true" : "false"; 

	echo "<p>" . (($b == $e) ? "true" : "false") . "</p>";
?>
-->


<!----------------------------------- Example #7 ----------------------------------->
<!--
<?php 
	$txt = "Hi";
	$x = 5;
	$y = 10.5;
	$b = true;
	$e;
	echo "<p>My variables and values: txt = $txt, x = $x, 
		y = $y, b = $b </p>"; 
	echo "<p>x + y = $x + $y</p>";

	echo "<p>x + y = ";
	echo $x + $y;
	echo "</p>";

	echo "<p>x + y = " . ($x + $y) . "</p>";

	echo "<p>x + y = " . $x + $y . "</p>";
	/* no brackets ... bad idea!! */
			
	unset($y);
	echo "<p>x + y = " . ($x + $y) . "</p>";
?>
-->


<!----------------------------------- Example #8 ----------------------------------->
<!--
<?php 
	$txt = "Hello world!";
	echo $txt{6}.$txt{4}.$txt{6};

	$txt = "1.5";
	$n = 1.234;
	echo "<p>" . ($n + $txt) . "</p>";
	/* string coerced into double */

	$txt = "h1e5";
	$n = 1.234;
	echo "<p>" . ($n + $txt) . "</p>";
	/* string that does not begin with a sign or a digit, 
	conversion fails, and zero is used */

	$txt = "1e5h";
	$n = 1.234;
	echo "<p>" . ($n + $txt) . "</p>";
	/* non numeric characters following the number in the string
	are ignored */

	echo "<p>" . (int)$n . "</p>";
	echo "<p>" . intval($n) . "</p>";
	echo "<p>" . gettype($n) . "</p>";
	echo "<p>" . settype($n, "integer") . "</p>";
	echo "<p>" . gettype($n) . "</p>";
?>
-->


<!----------------------------------- Example #9 ----------------------------------->
<!--
see Example #9 in index2.php
-->


<!----------------------------------- Example #10 ----------------------------------->
<!--
<?php 
	$ages = array("Joe" => 42, "Mary" => 41, "Bif" => 17);

	foreach($ages as $temp)
	{
		print("$temp <br />");
	}

	$ages["Mary"] = 29;

	foreach($ages as $temp)
	{
		print("$temp <br />");
	}

	$primes = array(7, 9, 11);

	$a = 1;
	$b = 2;
	$c = 3;
			
	echo "$a $b $c <br />";

	list($a, $b, $c) = $primes;
	print("$a $b $c <br />");

	list($a, $b, $c) = $ages;
	print("$a $b $c <br />");
	/* does not work for non traditional array */ 
?>
-->


<!----------------------------------- Example #11 ----------------------------------->
<!--
<?php 
	$primes = array(7, 9, 11, 13);
	foreach($primes as $temp)
	{
		print("$temp <br />");
	}

	$k = array_keys($primes);
	$v = array_values($primes);
	$l = sizeof($primes);

	print "<p> keys </p>";
	foreach($k as $temp)
	{
		print("$temp <br />");
	}

	print "<p> values </p>";
	foreach($v as $temp)
	{
		print("$temp <br />");
	}
			
	print "<p> $l </p>";

	if(array_key_exists(2, $primes))
	{
		print "<p> Exist </p>";
	}
	else
	{
		print "<p> Not exist </p>";
	}

	print "<p> unset element #2 </p>";
	unset($primes[2]);
			
	if(array_key_exists(2, $primes))
	{
		print "<p> Exist </p>";
	}
	else
	{
		print "<p> Not exist </p>";
	}

	$k = array_keys($primes);
	$v = array_values($primes);
	$l = sizeof($primes);

	print "<p> $l </p>";

	foreach($primes as $temp)
	{
		print("$temp <br />");
	}

	print "<p> keys </p>";
	foreach($k as $temp)
	{
		print("$temp <br />");
	}

	print "<p> values </p>";
	foreach($v as $temp)
	{
		print("$temp <br />");
	}
?>
-->


<!----------------------------------- Example #12 ----------------------------------->
<!--
<?php 
	$str = "Are you ready for this?";
	$word = explode(" ", $str);
	foreach($word as $temp)
	{
		print("$temp <br />");
	}

	$word = array("Not", "really");
	$str = implode(" ", $word);
	print "$str <br />";
			
?>
-->


<!----------------------------------- Example #13 ----------------------------------->
<!--
see Example #13 in index2.php
-->


<!----------------------------------- Example #14 ----------------------------------->
<!-- use with Example #1 in mycal.php ---->
<!--
see Example #14 in index2.php
-->


<!----------------------------------- Example #15 ----------------------------------->
<!-- use with Example #2 in mycal.php ---->
<!--
see Example #15 in index2.php
-->