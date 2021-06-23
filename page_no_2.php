

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>page no 2 [conversion rate]</title>
</head>
<body>

	<h1>page no 2 [conversion rate]</h1>
	<br><br>

		<lable for="conversion site"><h3>conversion site</h3></lable>
		<a href="page_no_1.php">1.Home    </a>
		<a href="page_no_2.php">2.Conversion rate    </a>
		<a href="page_no_3.php">3.Histrory</a>

		<br><br>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" > 
		
		<select name="converter" id="converter" required>
 
    <option value="feet to inch">feet to inch</option>
    <option value="inch to feet">inch to feet</option>
    <option value="inch to centimeter ">inch to centimeter</option>
    <option value="centimeter to inch">centimeter to inch</option>
    <option value="inch to meter">inch to meter</option>
  </select>
  <span style="color:#FF0000"> *<?php echo $converterErr;?></span>

		<br><br>
		<label for="value">value:</label>
		<input type="text" id="value" name="value">
		<span style="color:#FF0000"> *<?php echo $valueErr;?></span>

		<br><br>
		<label for="result">result:</label>
		<input type="text" id="result" name="result">
		<span style="color:#FF0000"> *<?php echo $unameErr;?></span>

		
		
	</form>

</body>
</html>