<?php  

session_start();

include 'Connection.php';

$nisn =  $_POST["NISN"];
$paswd = md5($_POST["password"]);

$result = mysqli_query($conn, "SELECT * FROM users WHERE NISN = $nisn");

$row = mysqli_num_rows($result);

if($row > 0){
    $_SESSION['NISN']=$nisn;
    $_SESSION['status']="login";
    header("Location:index.php");
}else{
	header("location:index.php?pesan=gagal");
}

?>