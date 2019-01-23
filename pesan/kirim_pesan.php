<?php
session_start();
require("../koneksi.php");

$isi_pesan=$_POST['isi_pesan'];
$id_user=$_POST['id_user'];
$id_penerima=$_POST['id_penerima'];
$id_pesan=$_POST['id_pesan'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
//$password=$_POST['password'];

//echo "$id_penerima";

$link=koneksi_db();
if ($id_pesan!=null) {
	# code...
	$sql = "INSERT INTO isi_pesan(id_isi, id_pesan, id_user, isi_pesan, tgl_pesan) VALUES ('$id_isi','$id_pesan','$id_user','$isi_pesan', '$tanggal')";
		$res=mysqli_query($link,$sql);
	$sql2 = "UPDATE pesan SET status = 'Baru' WHERE id_pesan = '$id_pesan' ";
		$res2=mysqli_query($link,$sql2);
		
		// Simpan di Folder Gambar
		echo"<script>alert('pesan berhasil di kirim !');(location.href='detail_pesan.php?id_pesan=$id_pesan&&id_pengirim=$id_penerima');</script>";		
}else{

	$sql1 = "INSERT INTO pesan(id_user1, id_user2,tgl_pesan,status) VALUES ('$id_user','$id_penerima', '$tanggal','Baru')";
		$res1=mysqli_query($link,$sql1);
//echo "error_reporting()";
//echo "$id_pesan";
		$sql2 = "SELECT * FROM pesan WHERE id_user1='$id_user' and id_user2='$id_penerima' ";
		$res2=mysqli_query($link,$sql2);
		$data2 = mysqli_fetch_array($res2);
		$id_pesan2 = $data2[id_pesan];

		$sql = "INSERT INTO isi_pesan(id_isi, id_pesan, id_user, isi_pesan, tgl_pesan) VALUES ('$id_isi','$id_pesan2','$id_user','$isi_pesan', '$tanggal')";
		$res=mysqli_query($link,$sql);
		// Simpan di Folder Gambar
		echo"<script>alert('pesan berhasil di kirim !');(location.href='detail_pesan.php?id_pesan=$id_pesan2&&id_pengirim=$id_penerima');</script>";		
	
}
	 

?>
