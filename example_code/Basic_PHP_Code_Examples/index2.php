<!----------------------------------- Example #9 ----------------------------------->
<!--
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Table</title>
		<style type = "text/css">
				border: thin solid black;
			}
				text-align: center;
			}
	</head>
	<body>
		<table>
			<caption> Powers table </caption>
			<?php 
				for ($number = 1; $number <=10; $number++) 
				{

				}
			?>
		</table>
	</body>
</html>
-->


<!----------------------------------- Example #13 ----------------------------------->
<!-- from textbook ---->
<!--
<!DOCTYPE html>
	<head>
		<title> Sorting </title>
		<meta charset = "utf-8" />
	</head>
	<body>
		<?php
			$original = array("Fred" => 31, "Al" => 27, "Gandalf" => "wizard",  "Betty" => 42, "Frodo" => "hobbit");
		?>
		<h4> Original Array </h4>
		<?php
			foreach ($original as $key => $value)
			{
				print("[$key] => $value <br />");
			}
			$new = $original;
			sort($new);
		?>

		<h4> Array sorted with sort </h4>
		<?php
			foreach ($new as $key => $value)
			{
				print("[$key] = $value <br />");
			}
			$new = $original;
			asort($new);
		?>

		<h4> Array sorted with asort </h4>
		<?php
			foreach ($new as $key => $value)
			{
				print("[$key] = $value <br />");
			}
			$new = $original;
			ksort($new);
		?>

		<h4> Array sorted with ksort </h4>
		<?php
			foreach ($new as $key => $value)
			{
				print("[$key] = $value <br />");
			}
		?>
	</body>
</html>
-->


<!----------------------------------- Example #14 ----------------------------------->
<!-- use with Example #1 in mycal.php ---->
<!--
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Post</title>
	</head>
	<body>
		<form action = "mycal.php" method = "post">
			<input type = "text" name = "one" size = "30" />
			<input type = "text" name = "two" size = "30" />
			<input type = "submit" value = "Calculate" />
		</form>
	</body>
</html>
-->


<!----------------------------------- Example #15 ----------------------------------->
<!-- use with Example #2 in mycal.php ---->
<!--
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Post</title>
	</head>
	<body>
		<form action = "mycal.php" method = “get”>
			<input type = "text" name = "one" size = "30" />
			<input type = "text" name = "two" size = "30" />
			<input type = "submit" value = "Calculate" />
		</form>
	</body>
</html>
-->