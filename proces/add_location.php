<?php 
session_start();
$connection = new mysqli("localhost","root","","thesis");
if(empty($_POST['name']))
{
	$_SESSION["kurang"] = true;
	header('Location:../building_data.php');
}
else{
		    $name = $_POST["name"];	
    // Set path folder tempat menyimpan gambarnya			
			$connection->query("INSERT INTO building VALUES(null,'".$name."')");
			if(query){
			header('Location:../building_data.php');
			}
		}
 ?>