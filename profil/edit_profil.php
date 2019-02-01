<!doctype html>
<?php
    if(!isset($_SESSION['id_user']))  
    {
      $login=null;
    
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
                            <li><a href="profil.php">Profil</a></li>
                            <li><a href="../pesan/pesan.php">Pesan</a></li>
                            <li><a href="../about.htmls">About</a></li>
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
                <?php
error_reporting(0);
        //iclude file koneksi ke database
        include('../koneksi.php');
        
        $link=koneksi_db();
        $id_user = $_GET['id_user'];
        $link=koneksi_db();
        $sql="SELECT * FROM profile_user WHERE id_user ='$id_user'";
        $res=mysqli_query($link,$sql);

            $data = mysqli_fetch_array($res);
            //echo"$id_user";
            

 ?>
                <h2>Edit Profil</h2>
                
              </div>
              <div class="aa-contact-form">
                <form class="contactform" action="simpan_profil.php" method="post" enctype="multipart/form-data">
                  <p class="comment-form-author">
                    <label for="author">Foto </label>
                    <input type="file" class="form-control" name="gambar" />
                   </p>
                  <p class="comment-form-author">
                    <label for="author">Nama <span class="required">*</span></label>
                    <input type="hidden" class="form-control" id="name" name="id_user" value="<?php echo"$data[id_user]";?>" >
                    <input type="text" name="nama" value="<?php echo"$data[Nama]";?>" size="30" required="required">
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Username</label>
                    <input type="text" name="username" value="<?php echo "$data[username]";?>">  
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Email</label>
                    <input type="text" name="email" value="<?php echo "$data[email]";?>" readonly>  
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Nomor Telepon</label>
                    <input type="text" name="no_tel" value="<?php echo "$data[no_tel]";?>">  
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Alamat</label>
                    <input type="text" name="alamat" id="text" value="<?php echo"$data[alamat]";?>">  
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" value="<?php echo "$data[tgl_lahir]";?>">  
                  </p>
                  <p class="form-submit">
                    <button type="submit" value="submit" class="btn submit_btn">Simpan</button>
                                    <button type="reset"  class="btn reset_btn">Reset</button>
                  </p>        
                </form>
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
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
