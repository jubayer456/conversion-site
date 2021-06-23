<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>page no 3 [history]</title>
</head>
<body>

	<h1>page no 3 [history]</h1>
	<br><br>

		<lable for="conversion site"><h3>conversion site</h3></lable>
		<a href="page_no_1.php">1.Home    </a>
		<a href="page_no_2.php">2.Conversion rate    </a>
		<a href="page_no_3.php">3.Histrory</a>

		<br><br>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" > 
		
	<label for="conversion_history">conversion history</label>
	<textarea id="conversion_history" name="conversion_history" rows="10" cols="50"></textarea>
		
		
	</form>

</body>
</html>

