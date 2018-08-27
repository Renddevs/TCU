<?php 
if(isset($_GET["id_account"])){
	include 'connection.php';

	$connection->query("DELETE FROM account WHERE id_account=".$_GET["id_account"]);

}

header("Location:../table_account.php");

 ?>
