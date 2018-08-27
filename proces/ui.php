<?php
$connection = new mysqli("localhost","root","","thesis");
if(isset($_POST["submit"])){
	$id = $_POST["id"];
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
	$connection->query("UPDATE stdevice set id='".$id."',kode='".$code."',tanggal='".$date."',gedung='".$building."',lantai='".$floor."',ruangan='".$room."',nama_barang='".$name."',jenis_barang='".$type."',merk='".$brand."',vol='".$vol."',kondisi='".$condition."',spec='".$spec."',keterangan='".$desc."' WHERE id=".$id);
	if(query)
	{
      header('Location:../table_item.php');
	}
}

 ?>