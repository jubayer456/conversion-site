<? php

define("filepath", "data.txt");
$converter=$value=$result"";
$converterErr=$valueErr="";
$flag = false;
$successfulMessage = $errorMessage = "";



 if($_SERVER['REQUEST_METHOD'] === "POST") {
$converter = $_POST['converter'];
$value = $_POST['value'];

if(empty($converter)) {
$converterErr = "Field can not be empty";
$flag = true;
}
if(empty($value)) {
$valueErr = "Field can not be empty";
$flag = true;
}

if(!$flag) {
$fileData = read();

 if(empty($fileData)) {
$data[] = array("converter" => $converter, "value" => $value,"result"=> $result );
}
else {
$data[] = json_decode($fileData);
array_push($data, array("converter" => $converterErr, "value" => $Errvalue,"result"=> $Errresult ));

 $data_encode = json_encode($data);
write("");
$res = write($data_encode);
if($res) {
$successfulMessage = "Sucessfully saved.";
}
else {
$errorMessage = "Error while saving.";
}
}
}

 function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

 function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}
function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>page no 1 [HOME]</title>
</head>
<body>

	<h1>page no 1 [HOME]</h1>
	<br><br>

		<lable for="conversion site"><h3>conversion site</h3></lable>
		<a href="page_no_1.php">1.Home    </a>
		<a href="page_no_2.php">2.Conversion rate    </a>
		<a href="page_no_3.php">3.Histrory</a>

		<br><br>


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" > 
		
			<select name="converter" id="converter" required>
 
    <option value="feet to inch">feet to inch</option>
    <option value="inch to feet">inch to feet</option>
    <option value="inch to centimeter ">inch to centimeter</option>
    <option value="centimeter to inch">centimeter to inch</option>
    <option value="inch to meter">inch to meter</option>



  </select>

		<br><br>
		<label for="value">value:</label>
		<input type="textarea" id="value" name="value">

		<br><br>
		<label for="result">result:</label>
		<input type="textarea" id="result" name="result">
		
		
	</form>

</body>
</html>