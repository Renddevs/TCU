<?php 
if(isset($_POST["submit"])){
	include 'connection.php';
	$id = $_POST["id"];
	$name = $_POST["name"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$connection->query("UPDATE account SET id_account='".$id."',name='".$name."',username='".$username."',password='".$password."' WHERE id_account=".$id);
	if(query)
	{
      header('Location:../table_account.php');
	}
}

 ?>