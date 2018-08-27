	<?php
$connection = new mysqli("localhost","root","","thesis");
if(isset($_POST["code"])){
	$code = $_POST["code"];
	$date = $_POST["date"];
	$building = $_POST["building"];
	$floor = $_POST["floor"];
	$room = $_POST["room"];
	$name = $_POST["name"];
	$type = $_POST["type"];
	$brand = $_POST["brand"];
	$vol = $_POST["vol"];
	$condition = $_POST["condition"];
	$spec = $_POST["spec"];
	$desc = $_POST["desc"];
	// $cek = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM stdevice WHERE ='$n'"));
	$connection->query("INSERT INTO stdevice VALUES(null,'".$code."','".$date."','".$building."','".$floor."','".$room."','".$name."','".$type."','".$brand."','".$vol."','".$condition."','".$spec."','".$desc."')");
	if(query)
	{
      header('Location:../table_item.php');
	}
}

 ?>