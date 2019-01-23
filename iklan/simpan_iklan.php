<?php
session_start();
//require("koneksi.php");

//if (isset($_POST['save'])){
 include("../koneksi.php");
    $fileName = $_FILES['gambar']['name'];
    $fileName1 = $_FILES['gambar1']['name'];
    $fileName2 = $_FILES['gambar2']['name'];
    $judul_iklan =$_POST['judul_iklan'];
    $id_iklan = $_POST['id_iklan'];
    $type_mobil = $_POST['type_mobil'];
    $merk = $_POST['merk'];
    $transmisi = $_POST['transmisi'];
    $tahun_mobil = $_POST['tahun_mobil'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $status_iklan = "aktif";
    $no_telp = $_POST['no_telp'];
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d");

    
        // Simpan ke Database
        $link=koneksi_db();
        if ($fileName==null and $fileName1==null and $fileName2==null) {
            $sql = "UPDATE iklan SET judul_iklan='$judul_iklan',type_mobil='$type_mobil',merk='$merk',transmisi='$transmisi',tahun_mobil='$tahun_mobil',no_telp='$no_telp',alamat='$alamat',deskripsi='$deskripsi',harga='$harga' WHERE id_iklan='$id_iklan';";
        $res=mysqli_query($link,$sql);
        // Simpan di Folder Gambar
        //move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar_mobil/".$_FILES['gambar']['name']);
        //move_uploaded_file($_FILES['gambar1']['tmp_name'], "gambar_mobil/".$_FILES['gambar1']['name']);
        //move_uploaded_file($_FILES['gambar2']['tmp_name'], "gambar_mobil/".$_FILES['gambar2']['name']);
        //}else{
        //$sql = "UPDATE profile_user SET username='$username',email='$email',Nama='$nama',tgl_lahir='$tgl_lahir',alamat='$alamat',no_tel='$no_tel' WHERE id_user = '$id_user'; ";
        //$res=mysqli_query($link,$sql);
        // Simpan di Folder Gambar
            
        }elseif ($fileName!=null and $fileName1==null and $fileName2==null) {
            $sql = "UPDATE iklan SET judul_iklan='$judul_iklan',type_mobil='$type_mobil',merk='$merk',transmisi='$transmisi',tahun_mobil='$tahun_mobil',no_telp='$no_telp',alamat='$alamat',deskripsi='$deskripsi',harga='$harga',photo1='$fileName' WHERE id_iklan='$id_iklan';";
        $res=mysqli_query($link,$sql);
        }elseif ($fileName==null and $fileName1!=null and $fileName2==null) {
            $sql = "UPDATE iklan SET judul_iklan='$judul_iklan',type_mobil='$type_mobil',merk='$merk',transmisi='$transmisi',tahun_mobil='$tahun_mobil',no_telp='$no_telp',alamat='$alamat',deskripsi='$deskripsi',harga='$harga',photo2='$fileName1' WHERE id_iklan='$id_iklan';";
        $res=mysqli_query($link,$sql);
        }elseif ($fileName==null and $fileName1==null and $fileName2!=null) {
            $sql = "UPDATE iklan SET judul_iklan='$judul_iklan',type_mobil='$type_mobil',merk='$merk',transmisi='$transmisi',tahun_mobil='$tahun_mobil',no_telp='$no_telp',alamat='$alamat',deskripsi='$deskripsi',harga='$harga',photo3='$fileName2' WHERE id_iklan='$id_iklan';";
        $res=mysqli_query($link,$sql);
        }elseif ($fileName!=null and $fileName1!=null and $fileName2==null) {
            $sql = "UPDATE iklan SET judul_iklan='$judul_iklan',type_mobil='$type_mobil',merk='$merk',transmisi='$transmisi',tahun_mobil='$tahun_mobil',no_telp='$no_telp',alamat='$alamat',deskripsi='$deskripsi',harga='$harga',photo1='$fileName',photo2='$fileName1' WHERE id_iklan='$id_iklan';";
        $res=mysqli_query($link,$sql);
        }elseif ($fileName!=null and $fileName1==null and $fileName2!=null) {
            $sql = "UPDATE iklan SET judul_iklan='$judul_iklan',type_mobil='$type_mobil',merk='$merk',transmisi='$transmisi',tahun_mobil='$tahun_mobil',no_telp='$no_telp',alamat='$alamat',deskripsi='$deskripsi',harga='$harga',photo1='$fileName',photo3='$fileName2' WHERE id_iklan='$id_iklan';";
        $res=mysqli_query($link,$sql);
        }elseif ($fileName==null and $fileName1!=null and $fileName2!=null) {
            $sql = "UPDATE iklan SET judul_iklan='$judul_iklan',type_mobil='$type_mobil',merk='$merk',transmisi='$transmisi',tahun_mobil='$tahun_mobil',no_telp='$no_telp',alamat='$alamat',deskripsi='$deskripsi',harga='$harga',photo3='$fileName2',photo2='$fileName1' WHERE id_iklan='$id_iklan';";
        $res=mysqli_query($link,$sql);
        }else{
            $sql = "UPDATE iklan SET judul_iklan='$judul_iklan',type_mobil='$type_mobil',merk='$merk',transmisi='$transmisi',tahun_mobil='$tahun_mobil',no_telp='$no_telp',alamat='$alamat',deskripsi='$deskripsi',harga='$harga',photo3='$fileName2',photo2='$fileName1',photo1='$fileName' WHERE id_iklan='$id_iklan';";
                $res=mysqli_query($link,$sql);
        }        
        move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar_mobil/".$_FILES['gambar']['name']);
        move_uploaded_file($_FILES['gambar1']['tmp_name'], "gambar_mobil/".$_FILES['gambar1']['name']);
        move_uploaded_file($_FILES['gambar2']['tmp_name'], "gambar_mobil/".$_FILES['gambar2']['name']);
        echo"<script>alert('iklan berhasil disimpan !');(location.href='../profil/profil.php');</script>";        
  //  } 
?>
