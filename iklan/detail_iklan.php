<!doctype html>
<?php
    //include ("../koneksi.php")
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
                            <li><a href="../about">About</a></li>
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
<div>
    <br> 
</div>
<!-- Latest property -->
<?php
error_reporting(0);
                    
  //iclude file koneksi ke database
        include('../koneksi.php');
        $id_iklan=$_GET['id_iklan'];
        
        $link=koneksi_db();
        $sql="SELECT * FROM iklan WHERE id_iklan='".$_GET['id_iklan']."'" ;
        $res=mysqli_query($link,$sql);
            while($data = mysqli_fetch_array($res))
            {
 ?>
              <section id="business" class="business bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            <div class="col-md-6">
                                <div class="business_slid">
                                    <div class="slid_shap bg-grey"></div>
                                    <div class="business_items text-center">
                                    <?php
                                    if ($data[photo1]!=null and $data[photo2]==null and $data[photo3]==null) {
                                        ?>
                                        <div class="business_item">
                                            <div class="business_img">
                                                 <img src="../gambar_mobil/<?php echo "$data[photo1]"?>" alt="" width="550px" height="368px" />
                                            </div>
                                        </div>
                                        <?php
                                        }elseif ($data[photo1]!=null and $data[photo2]!=null and $data[photo3]==null) {
                                            ?>
                                            <div class="business_item">
                                            <div class="business_img">
                                                 <img src="../gambar_mobil/<?php echo "$data[photo1]"?>" alt="" width="550px" height="368px" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="../gambar_mobil/<?php echo "$data[photo2]"?>" alt="" width="550px" height="368px"/>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        elseif ($data[photo1]==null and $data[photo2]!=null and $data[photo3]!=null) {
                                            ?>
                                            <div class="business_item">
                                            <div class="business_img">
                                                <img src="../gambar_mobil/<?php echo "$data[photo2]"?>" alt="" width="550px" height="368px"/>
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="../gambar_mobil/<?php echo "$data[photo3]"?>" alt="" width="550px" height="368px"/>
                                            </div>
                                        </div>
                                        <?php
                                        }elseif ($data[photo1]!=null and $data[photo2]==null and $data[photo3]!=null) {
                                            ?>
                                            <div class="business_item">
                                            <div class="business_img">
                                                 <img src="../gambar_mobil/<?php echo "$data[photo1]"?>" alt="" width="550px" height="368px" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="../gambar_mobil/<?php echo "$data[photo3]"?>" alt="" width="550px" height="368px"/>
                                            </div>
                                        </div>
                                            <?php
                                        }
                                    else{
                                    ?>
                                        
                                        <div class="business_item">
                                            <div class="business_img">
                                                 <img src="../gambar_mobil/<?php echo "$data[photo1]"?>" alt="" width="550px" height="368px" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="../gambar_mobil/<?php echo "$data[photo2]"?>" alt="" width="550px" height="368px"/>
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="../gambar_mobil/<?php echo "$data[photo3]"?>" alt="" width="550px" height="368px"/>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="business_item sm-m-top-50">
                                    <h2 class="text-uppercase"><strong><?php echo "$data[judul_iklan]"?></strong></h2>
                                    <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i>Harga Sewa : Rp.<?php echo "$data[harga]"?></li>
                                        <li><i class="fa fa-arrow-circle-right"></i>Merk : <?php echo "$data[merk]"?></li>
                                        <li><i class="fa fa-arrow-circle-right"></i>Type : <?php echo "$data[type_mobil]"?></li>
                                        <li><i class="fa fa-arrow-circle-right"></i>Transmisi : <?php echo "$data[transmisi]"?></li>
                                        <li><i class="fa fa-arrow-circle-right"></i>Tahun Mobil : <?php echo "$data[tahun_mobil]"?></li>
                                        <li><i class="fa fa-arrow-circle-right"></i>No.Telp : <?php echo "$data[no_telp]"?></li>
                                        <li><i class="fa fa-arrow-circle-right"></i>Tanggal Iklan : <?php echo "$data[tgl_iklan]"?></li>
                                    </ul>
                                    <p class="m-top-20"><?php echo "$data[deskripsi]"; ?></p>

                                    <div class="business_btn">
                                        <a href="../pesan/detail_pesan.php?id_pengirim=<?php echo "$data[id_user]";?>" class="btn btn-primary m-top-20">Kirim Pesan</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
                ?>
            </section>          <!--Test section-->


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
