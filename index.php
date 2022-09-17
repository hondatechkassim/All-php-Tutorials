<!-- <?php

/* Working with php switch function */

$today ="fs";

switch ($today) {

	case 'Tuesday':
		echo "Its Tuesday";
		break;
	case 'Monday':
	    echo "Its working day <br>".$today;
	    break;
	
	default:
		echo "NO RECORD";
		break;
}







?> -->


<!-- php cal start here -->
<?php
$x="";
$y="";


if (isset($_GET['operation'])) {
	$x =$_GET ['num1'];
	$y =$_GET ['num2'];
	$op =$_GET ['operation'];
	
	switch ($op) {
		case 'add': $res =$x + $y;
			
			break;
		case 'sub': $res =$x - $y;
			
			break;

		case 'mult': $res =$x * $y;
			
			break;

		case 'div': $res =$x / $y;
			
			break;
		
		default:
			echo "Please Enter only Numbers";
			break;
	}
} 




?>



<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Php simple calculator </title>
</head>
<body>



	<!-- Making simple cal in php -->
	<form action="" method="GET">
		<!-- First Num -->
		<div>
			<label>Num1.</label>
			<input type="number" name="num1" value="<?= $x ?>">
		</div>
		<!-- Second Num -->
		<div>
			<label>Num2.</label>
			<input type="number" name="num2" value="<?= $y ?>">
		</div>
		
		<!-- Results Num -->
		<div>
			<label>Results::</label>
			<input type="number" name="res" disabled  value="<?= $res ?>">
		</div>

		<!-- Operation -->
		<button type="submit" name="operation" value="add">Add</button>
		<button type="submit" name="operation" value="sub">Sub</button>
		<button type="submit" name="operation" value="mult">Mult</button>
		<button type="submit" name="operation" value="div">Div</button>
		




	</form>


</body>
</html> --> -->


<!-- <!-- Another switch case examples

<?php

$country ="GER";

switch ($country) {
	case 'USA':
		echo "You are in USA";
		break;
	case 'GER':
		echo "You are in Germany";
		break;
	
	default:
		echo "You are in Kenya";
		break;
}


?> -->

<!-- Function to show students details -->
<?php 


function students_details(){

$studentsv = array("Ahmedin"=>"CS/MG/07301/45","Semedo"=>"CS/MG/07301/45","Jimale","Alinoor"=>"CS/MG/07301/45","Kassim"=>"CS/MG/07301/45");

foreach ($studentsv as $key =>  $value) {
	
	echo "Kabarak ".$key.$value.'<br>';
	
}
}

// students_details();

 ?>


 <!-- Function to do addtion of ttwonumbers -->

 <?php


 function add_num($num1,$num2){

   $sum =$num1 / $num2;
  echo "The sum of two numbers:".$sum;
  

 }

function display_fuc(){
	 add_num(40000,2400);
	 
}
display_fuc();





 ?>


