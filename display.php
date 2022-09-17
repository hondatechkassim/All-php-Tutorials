<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display cal fuction</title>
</head>
<body>

<!-- Fuction doing cal -->
<?php 

if(isset($_POST['sum'])){
	
	function add_num(){
		$num1=$_POST['num1'];
	    $num2=$_POST['num2'];

	    $sum =$num1 + $num2;



	}
	 echo $sum;
	
	 
}



?>

	<form method="POST">


	<label>Enter first num:</label>
	<input type="number" name="num1">
	<label>Enter first num2:</label>
	<input type="number" name="num2">
	<label>The Results:</label><p style="color: red"><?= $sum; ?></p>
	<button type="submit" name="sum">Sum</button>
    </form>

</body>


</html>