<?php
session_start();
//require("koneksi.php");

//if (isset($_POST['save'])){
 include("../koneksi.php");
    $fileName = $_FILES['gambar']['name'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $email = $_POST['email'];
    $no_tel=$_POST['no_tel'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_user = $_POST['id_user'];

    
        // Simpan ke Database
        $link=koneksi_db();
        if ($fileName!=null) {
            $sql = "UPDATE profile_user SET username='$username',email='$email',Nama='$nama',tgl_lahir='$tgl_lahir',alamat='$alamat',no_tel='$no_tel',photo_user='$fileName' WHERE id_user = '$id_user'; ";
        $res=mysqli_query($link,$sql);
        // Simpan di Folder Gambar
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar_user/".$_FILES['gambar']['name']);
        }else{
        $sql = "UPDATE profile_user SET username='$username',email='$email',Nama='$nama',tgl_lahir='$tgl_lahir',alamat='$alamat',no_tel='$no_tel' WHERE id_user = '$id_user'; ";
        $res=mysqli_query($link,$sql);
        // Simpan di Folder Gambar
            
        }
        
        
        echo"<script>alert('Profil berhasil disimpan !');(location.href='profil.php');</script>";        
  //  } 
?>
