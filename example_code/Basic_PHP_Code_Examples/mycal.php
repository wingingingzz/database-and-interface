<!----------------------------------- Example #1 ----------------------------------->
<!-- use with Example #14 in index.php ---->
<!--
<!DOCTYPE html>
<html>
	<head>
		<title>Post Process</title>
	</head>
	<body>
		<?php
			$one = $_POST["one"];
			$two = $_POST["two"];
			$sum = $one + $two;
			
			print "$one + $two = $sum <br />";
		?>
	</body>
</html>
-->

<!----------------------------------- Example #2 ----------------------------------->
<!-- use with Example #15 in index.php ---->
<!--
<!DOCTYPE html>
<html>
	<head>
		<title>Post Process</title>
	</head>
	<body>
		<?php
			$one = $_GET["one"];
			$two = $_GET["two"];
			$sum = $one + $two;
			
			print "$one + $two = $sum <br />";
		?>
	</body>
</html>
-->