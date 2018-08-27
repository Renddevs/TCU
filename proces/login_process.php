<?php
session_start();
if(isset($_POST['login'])){
$connection = new mysqli("localhost","root","","thesis");
					
					$username	= $_POST['username'];
					$password	= $_POST['password'];
					$query = mysqli_query($connection, "SELECT * FROM account WHERE username ='".$username."' AND password='".$password."'");
					if(mysqli_num_rows($query) == 0){
						$_SESSION["belum_masuk"]= true;
						header("Location: ../login.php");
					}else{
						$row = mysqli_fetch_assoc($query);
						
						if($row['position'] == "Admin"){
							$_SESSION["akses"]= true;
							header("Location:../index.php");
						}else if($row['position'] == "MasterAdmin"){
							$_SESSION["akses"]= true;
							$_SESSION["akses_super"]= true; 
							header("Location:../index.php");
						}else{
						    header("Location: ../login.php");
						}
					}
				}
				?>