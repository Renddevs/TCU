<?php 
if(isset($_GET["id"])){
	include 'connection.php';

	$connection->query("DELETE FROM building WHERE id=".$_GET["id"]);

}

header("Location:../building_data.php");

 ?>