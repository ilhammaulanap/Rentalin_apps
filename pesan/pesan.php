<!doctype html>
<?php
    //include ("../koneksi.php");
    session_start();
    
    //cek level user
    if(!isset($_SESSION['id_user']))    
        {
           die("<script>
  if (confirm('Anda belum Login!')) {
    (location.href='../login.html')
  } else {
    (location.href='../iklan/iklan.php')
  }

</script>;");  
        
        }else{
            $login=$_SESSION['id_user'];
        }
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
                            <li><a href="../iklan/filter_iklan.html"><img src="../assets/images/filter.png" width="25" height="25"></a></li>
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
                            <li><a href="../iklan/iklan.php">Home</a></li>                    
                            <li><a href="../iklan/pasang_iklan.php">Pasang iklan</a></li>
                            <li><a href="../profil/profil.php">Profil</a></li>
                            <li><a href="pesan.php">Pesan</a></li>
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
<!-- Pesan -->
<section id="aa-latest-property">
<?php
error_reporting(0);
        //iclude file koneksi ke database
        include('../koneksi.php');
        //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
        $link=koneksi_db();
        $cari=$_POST['cari'];
        $link=koneksi_db();
        $id_user=$_SESSION['id_user'];
        $sql="SELECT * FROM pesan WHERE id_user1 = '$id_user' or id_user2 = '$id_user' ORDER BY tgl_pesan DESC";
        $res=mysqli_query($link,$sql);
        if ($res == null) {
           ?> <div class="chat_list active_chat">
          <div class="chat_people">
            <div class="chat_ib">
              <h5>Tidak Ada pesan</h5>
            </div>
          </div>
        </div>
        <?php
        }else{
            while($data = mysqli_fetch_array($res))
            {
                if ($data[id_user1]!=$id_user) {
                    $pengirim=$data[id_user1];
                }
                else{
                    $pengirim=$data[id_user2];
                }
        $sql2="SELECT * FROM profile_user WHERE id_user = '$pengirim';";
        $res1=mysqli_query($link,$sql2);
        $data1 = mysqli_fetch_array($res1);
                
 ?>  
        <div class="chat_list active_chat">
          <div class="chat_people">
            <div class="chat_img"> <img src="../gambar_user/<?php echo "$data1[photo_user]"?>" alt="sunil"> </div>
            <div class="chat_ib">
              <a href="detail_pesan.php?id_pesan=<?php echo "$data[id_user1]";?>&&id_pengirim=<?php echo "$pengirim"; ?>">
              <h5><?php echo "$data1[Nama]"; ?> <span class="chat_date"><?php echo "$data[tgl_pesan]"; ?></span></h5>
              </a>
            </div>
          </div>
        </div>
<?php
}
}
?>

</section>
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
