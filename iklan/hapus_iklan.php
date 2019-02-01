<?php
    //include ("../koneksi.php")
    if(!isset($_SESSION['id_user']))  
    {
      $login=null;
    
    }else{
        $login=$_SESSION['id_user'];
    }
    

error_reporting(0);
        //iclude file koneksi ke database
        include('../koneksi.php');
        
        $link=koneksi_db();
        $id_iklan = $_GET['id_iklan'];
        $sql = "DELETE FROM `iklan` WHERE id_iklan='$id_iklan';";
        $res=mysqli_query($link,$sql);

            $data = mysqli_fetch_array($res);
            if($res){
    echo"<script>alert('Iklan berhasil di hapus !');(location.href='../profil/profil.php');</script>";  
    } else{
    echo"<script>alert('Iklan gagal di hapus !');(location.href='../profil/profil.php');</script>";  
    }
            //echo"$id_user";
 ?>