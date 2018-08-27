<?php 
session_start();
$connection = new mysqli("localhost","root","","thesis");
if($_POST['names']){
		    $name = $_POST["names"];
		    $username = $_POST["username"];
		    $password = $_POST["password"];
		    $position = $_POST["position"];
			$nama_file = $_FILES['photo'];	
    // Set path folder tempat menyimpan gambarnya
            $filePath = "upload/" .basename($nama_file["name"]);
            move_uploaded_file($nama_file["tmp_name"], $filePath);			
			$connection->query("INSERT INTO account VALUES(null,'".$name."','".$username."','".$password."','".$position."', '".$filePath."')");
			if(query){
				header('Location:table_account.php');
			}
		}
 ?>