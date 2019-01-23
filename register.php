<?php
session_start();
require("koneksi.php");

$username=$_POST['username'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$jenis_user=$_POST['jenis_user'];
$verifikasi = "Belum Terverifikasi";
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d");
//$password=$_POST['password'];

$password = sha1($_POST['password']);
$link=koneksi_db();
$sql="select * from profile_user where username='$username'";
$res=mysqli_query($link,$sql);
$ketemu=mysqli_num_rows($res);
$sql2="select * from profile_user where email='$email'";
$res2=mysqli_query($link,$sql2);
$ketemu2=mysqli_num_rows($res2);

if($ketemu)
{
echo "<center><font color=red>Username sudah ada</font>";
include "register.html";
}

else if ($ketemu2) {
echo "<center><font color=red>Email sudah ada</font>";
include "register.html";
}
else{
$sql = "INSERT INTO profile_user(username, email, nama, password,tgl_daftar,jenis_user,verifikasi) VALUES ('$username','$email','$nama','$password','$tanggal','$jenis_user','$verifikasi')";
		$res=mysqli_query($link,$sql);
		// Simpan di Folder Gambar
		
		
		echo"<script>alert('Akun berhasil di buat !');(location.href='login.html');</script>";
}

?>
