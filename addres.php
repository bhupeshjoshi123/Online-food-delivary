

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

	include 'connection.php';
	addres();
	echo"\n";
	orderjson1();

}

function addres(){

	global $connect;
   

	$query = "SELECT * from restaurant";
     
	$result = mysqli_query($connect,$query);
    	
    $temp_array = array();

    
	if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){
	$temp_array[]=$row;
     }
	}
header('content-Type: application/json');

echo json_encode(array("restaurant"=>$temp_array));
}

function orderjson1(){
global $connect;


	$query2= "SELECT * from item";
     
	$result2 = mysqli_query($connect,$query2);
    	
    $temp_array2 = array();

    
	if(mysqli_num_rows($result2)>0){

while($row2=mysqli_fetch_assoc($result2)){
	$temp_array2[]=$row2;
     }
	}
header('content-Type: application/json');

echo json_encode(array("foodname"=>$temp_array2));
mysqli_close($connect);

}

