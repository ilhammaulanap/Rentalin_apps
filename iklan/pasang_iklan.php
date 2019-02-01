<!doctype html>
<?php
  //include ("../koneksi.php");
  session_start();
  if(!isset($_SESSION['id_user']))  
    {
      die("<script>
  if (confirm('Anda belum Login!')) {
    (location.href='../login.html')
  } else {
    (location.href='../iklan/iklan.php')
  }

</script>;");
      //$login=null;
    }else{
      if($_SESSION['jenis_user']!="Pelapak"){
      echo"<script>alert('Anda bukan Pelapak !');(location.href='iklan.php');</script>";
  }else{
        $id_user=$_SESSION['id_user'];
        $login=$id_user;  
     
    }
  }
  //echo $_SESSION['id_user'];
    

  //cek level user
  
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Rentalin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../assets/images/logo1.png">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="../assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="../assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/iconfont.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/bootsnav.css">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="../assets/css/responsive.css" />

        <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


         <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li><a href="filter_iklan.html"><img src="../assets/images/filter.png" width="25" height="25"></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <img src="../assets/images/menu3.png" class="logo" alt="">    
                            
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="../assets/images/logo1.png" class="logo" alt="">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="iklan.php">Home</a></li>                    
                            <li><a href="pasang_iklan.php">Pasang iklan</a></li>
                            <li><a href="../profil/profil.php">Profil</a></li>
                            <li><a href="../pesan/pesan.php">Pesan</a></li>
                            <li><a href="../about.html">About</a></li>
                            <?php
                            if ($login==null) {
                                ?>
                                <li><a href="../login.html">Login</a></li>
                                <?php
                            }else{
                            ?>
                            <li><a href="../session_logout.php">Logout</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->
 
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-bottom">
              <div class="aa-title">
                
                <h2>Pasang Iklan</h2>
                
              </div>
              <div class="aa-contact-form">
                <form class="contactform" method="post" enctype="multipart/form-data">                  
                  
                  <p class="comment-form-author">
                    <label for="author">Foto </label>
                    <input type="file" name="gambar" />
                    <input type="file" name="gambar1" />
                    <input type="file" name="gambar2" />
                  </p>
                  <p class="comment-form-author">
                    <label for="author">Judul <span class="required">*</span></label>
                    <input type="text" name="judul_iklan" size="30" required="required">
                  </p>
                  <p class="comment-form-author">
                    <label for="author">Type Mobil <span class="required">*</span></label>
                    <select name="type_mobil" id="text" required/>
                                         <option value="penumpang">penumpang</option>
                                         <option value="angkut barang">angkut barang</option>
                                    </select>
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Merk Mobil</label>
                    <input type="text" name="merk" >  
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Transmisi Mobil</label>
                    <select name="transmisi" id="text" required/>
                                        <option value="automatic">Automatic</option>
                                        <option value="manual">Manual</option>
                    </select>
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Tahun Mobil</label>
                    <input type="text" name="tahun_mobil" >  
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Harga Sewa</label>
                    <input type="text" name="harga">  
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Alamat</label>
                    <input type="text" name="alamat" id="text" >  
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">No.Telp</label>
                    <input type="text" name="no_telp" id="text" >  
                  </p>
                  <p class="comment-form-comment">
                    <label for="comment">Deskripsi Iklan</label>
                    <textarea name="deskripsi" id="text"  cols="45" rows="8" aria-required="true" required="required"></textarea>
                  </p>                
                  <p class="form-submit">
                    <input type="submit" value="Simpan" id="submit" name="save">
                  </p>        
                </form>
                
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
 </section>
 <?php

 if (isset($_POST['save'])){
 include('../koneksi.php');
  $fileName = $_FILES['gambar']['name'];
  $fileName1 = $_FILES['gambar1']['name'];
  $fileName2 = $_FILES['gambar2']['name'];
  $judul_iklan=$_POST['judul_iklan'];
  $type_mobil = $_POST['type_mobil'];
  $merk = $_POST['merk'];
  $transmisi = $_POST['transmisi'];
  $tahun_mobil = $_POST['tahun_mobil'];
  $harga = $_POST['harga'];
  $deskripsi = $_POST['deskripsi'];
  $alamat = $_POST['alamat'];
  $status_iklan = "moderasi";
  $verifikasi_iklan ="dalam proses";
  
  $no_telp = $_POST['no_telp'];
  date_default_timezone_set('Asia/Jakarta');
  $tanggal = date("Y-m-d");


    // Simpan ke Database
    $link=koneksi_db();
    $sql = "INSERT INTO iklan(id_user, judul_iklan, type_mobil, merk, transmisi, tahun_mobil, no_telp, alamat, deskripsi, harga, status_iklan, verifikasi_iklan, tgl_iklan, photo1, photo2, photo3) VALUES ('$id_user','$judul_iklan','$type_mobil','$merk','$transmisi','$tahun_mobil','$no_telp','$alamat','$deskripsi','$harga','$status_iklan','$verifikasi_iklan','$tanggal','$fileName','$fileName1','$fileName2')";
    $res=mysqli_query($link,$sql);
    // Simpan di Folder Gambar
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar_mobil/".$_FILES['gambar']['name']);
    move_uploaded_file($_FILES['gambar1']['tmp_name'], "../gambar_mobil/".$_FILES['gambar1']['name']);
    move_uploaded_file($_FILES['gambar2']['tmp_name'], "../gambar_mobil/".$_FILES['gambar2']['name']);
    if($res){
    echo"<script>alert('Iklan berhasil di simpan !');(location.href='../profil/profil.php');</script>";  
    } else{
    echo"<script>alert('Iklan gagal di simpan !');(location.href='pasang_iklan.php');</script>";  
    }  
  } 
?>



        <!-- JS includes -->

        <script src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>

        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>
        <script src="../assets/js/jquery.easing.1.3.js"></script>
        <script src="../assets/css/slick/slick.js"></script>
        <script src="../assets/css/slick/slick.min.js"></script>
        <script src="../assets/js/jquery.collapse.js"></script>
        <script src="../assets/js/bootsnav.js"></script>



        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>
