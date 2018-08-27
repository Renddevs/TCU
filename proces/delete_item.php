<?php 
if(isset($_GET["id"])){
	include 'connection.php';

	$connection->query("DELETE FROM stdevice WHERE id=".$_GET["id"]);

}

header("Location:../table_item.php");

 ?>