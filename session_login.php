<?php
session_start();
require("koneksi.php");

$username=$_POST['username'];
$password=$_POST['password'];
$link=koneksi_db();
$sql="select * from profile_user where username='$username' and password=sha1('$password')";
$res=mysqli_query($link,$sql);
$ketemu=mysqli_num_rows($res);

if($ketemu)
{
$data = mysqli_fetch_array($res);
$_SESSION['username']=$_POST['username'];
$_SESSION['id_user'] = $data['id_user'];
$_SESSION['jenis_user'] = $data['jenis_user'];
header("location:index.php");
}

else
{
	echo"<script>alert('Username atau Password salah !');</script>";
	$salah= "<center><font color=red>USERNAME ATAU PASSWORD SALAH!</font></center></br>";
include "login.html";
}

?>
