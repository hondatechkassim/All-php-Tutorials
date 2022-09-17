<?php 

  /*Numeric array examples*/ 

$studentsList = array("Ahmed","Jimale","Hussein","Joh","Njoroge","Alinoor ","Ahmed","Jimale","Hussein","Joh","Njoroge","Alinoor ","Ahmed","Jimale","Hussein","Joh","Njoroge","Alinoor ");

 $arraylenght =count($studentsList);

for($i=0;$i < $arraylenght; $i++){
   

   echo $studentsList[$i];
   echo "<br>"."<hr>"; 
    
} 

/*Associative array examples*/ 

$fruitstype =array("Mango"=>"Ksh.250","Banana"=>"580","Pawpaw"=>"200");

 foreach($fruitstype as $key => $value){

	echo "The fruits available are.".$key. $value ."<br>";

}

?>