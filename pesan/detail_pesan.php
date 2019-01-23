<?php
  //include ("../koneksi.php");
  session_start();
  //$_SESSION['jenis_user'];

  //cek level user
  if(!isset($_SESSION['id_user']))  
    {
      header("location:../login.html");  
    
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Rentalin</title>
<link href="../assets/css_chat/style.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
      

</head>
<body>
<?php
//include('menu_chat.php');
error_reporting(0);
          
  //iclude file koneksi ke database
    include('../koneksi.php');
    $id_pesan=$_GET['id_pesan'];
    $user=$_SESSION['id_user'];
    $pengirim=$_GET['id_pengirim'];
    $link=koneksi_db();
    $sql="SELECT * FROM profile_user WHERE id_user='".$_GET['id_pengirim']."'" ;
    $res=mysqli_query($link,$sql);
        $data = mysqli_fetch_array($res);
      {
        ?>

<div class="menu">
            <div class="back"><a href="pesan.php"><i class="fa fa-chevron-left"></i></a> <img src="../gambar_user/<?php echo "$data[photo_user]"?>" draggable="false"/></div>
            <div class="name"><?php echo "$data[Nama]"; ?></div>
            <div class="last">18:09</div>
        </div>
    <ol class="chat">
      <?php
}
$sql="SELECT id_pesan FROM pesan WHERE id_user1='".$user."' and id_user2='".$pengirim."' " ;
  $res=mysqli_query($link,$sql);
        $data = mysqli_fetch_array($res);
        $cek_pesan=$data[id_pesan];
        $id_pesan=$data[id_pesan];
        //echo "$id_pesan";
$sql1="SELECT id_pesan FROM pesan WHERE id_user1='".$pengirim."' and id_user2='".$user."' " ;
  $res1=mysqli_query($link,$sql1);
        $data1 = mysqli_fetch_array($res1);
        $cek_pesan1=$data1[id_pesan];
        $id_pesan=$data1[id_pesan];
        //echo "$id_pesan";
if ($cek_pesan!=null) {
  # code...
  $sql="SELECT * FROM isi_pesan WHERE id_pesan='$cek_pesan' " ;
  $res=mysqli_query($link,$sql);
  $sql2 = "UPDATE pesan SET status = 'Baca' WHERE id_pesan = '$cek_pesan' ";
  $res2=mysqli_query($link,$sql2);
        while($data = mysqli_fetch_array($res))
      {
if ($data[id_user]==$user) {
  $sql1="SELECT * FROM profile_user WHERE id_user='".$user."'" ;
    $res1=mysqli_query($link,$sql1);
        $data1 = mysqli_fetch_array($res1);
    echo '<li class="self">';
    ?>
         <div class="avatar"><img src="../gambar_user/<?php echo "$data1[photo_user]"?>" draggable="false"/></div>
         <?php
      echo '<div class="msg">';
        echo "<p>$data[isi_pesan] </p>";
        echo "<time>$data[tgl_pesan]</time>";
      echo "</div>";
    echo "</li>";
}else{
  $sql1="SELECT * FROM profile_user WHERE id_user='".$pengirim."'" ;
    $res1=mysqli_query($link,$sql1);
        $data1 = mysqli_fetch_array($res1);
  echo '<li class="other">';
      ?>

         <div class="avatar"><img src="../gambar_user/<?php echo "$data1[photo_user]"?>" draggable="false"/></div>
         <?php
      echo '<div class="msg">';
        echo "<p>$data[isi_pesan] </p>";
        echo "<time>$data[tgl_pesan]</time>";
      echo "</div>";
    echo "</li>";
}
    
   } 
}elseif ($cek_pesan1!=null) {
  # code...
  $sql="SELECT * FROM isi_pesan WHERE id_pesan='$cek_pesan1' " ;
  $res=mysqli_query($link,$sql);
  $sql2 = "UPDATE pesan SET status = 'Baca' WHERE id_pesan = '$cek_pesan' ";
  $res2=mysqli_query($link,$sql2);
        while($data = mysqli_fetch_array($res))
      {
if ($data[id_user]==$user) {
  $sql1="SELECT * FROM profile_user WHERE id_user='".$user."'" ;
    $res1=mysqli_query($link,$sql1);
        $data1 = mysqli_fetch_array($res1);
    echo '<li class="self">';
    ?>
         <div class="avatar"><img src="../gambar_user/<?php echo "$data1[photo_user]"?>" draggable="false"/></div>
         <?php
      echo '<div class="msg">';
        echo "<p>$data[isi_pesan] </p>";
        echo "<time>$data[tgl_pesan]</time>";
      echo "</div>";
    echo "</li>";
}else{
  $sql1="SELECT * FROM profile_user WHERE id_user='".$pengirim."'" ;
    $res1=mysqli_query($link,$sql1);
        $data1 = mysqli_fetch_array($res1);
  echo '<li class="other">';
      ?>

         <div class="avatar"><img src="../gambar_user/<?php echo "$data1[photo_user]"?>" draggable="false"/></div>
         <?php
      echo '<div class="msg">';
        echo "<p>$data[isi_pesan] </p>";
        echo "<time>$data[tgl_pesan]</time>";
      echo "</div>";
    echo "</li>";
}
    
   } 
}else{

  echo "tidak ada pesan";
  echo "<br>";
  
}
        

    //echo"$id_pesan";
    ?>
    </ol>
   <form class="row login_form" action="kirim_pesan.php" method="post" id="contactForm" novalidate="novalidate">
    <input class="textarea" type="text" name="isi_pesan" id="isi_pesan" placeholder="Type here!"/>
    <input type="hidden" id="id_user" name="id_user" value="<?php echo"$user"; ?>">
    <input type="hidden" id="id_penerima" name="id_penerima" value="<?php echo"$pengirim"; ?>">
    <input type="hidden" id="id_pesan" name="id_pesan" value="<?php echo"$id_pesan"; ?>">
  </form>
</div>