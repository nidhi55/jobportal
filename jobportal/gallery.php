<?php $pagenm="pages"; ?>
<!DOCTYPE html>
<!-- 
Template Name: MeshJobs Multipurpose Responsive HTML Template
Version: 1.1
Author: DigiSamaritan
Website: digisamaritan.com
Purchase: http://themeforest.net/user/DigiSamaritan
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:06 GMT -->
<!--<head>
    <meta charset="utf-8" />
    <title>MeshJobs Multipurpose Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">-->
    <!--srart theme style -->
   <!-- <link href="css/main.css" rel="stylesheet" type="text/css" />-->
    <!-- end theme style -->
    <!-- favicon links -->
   <!-- <link rel="shortcut icon" type="image/png" href="images/favicon.png" />-->
<!--</head>-->

<body>
    <!--Loader Start -->
    <div class="mj_preloaded">
        <div class="mj_preloader">
            <div class="lines">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>

            <div class="loading-text">LOADING</div>
        </div>
    </div>
    <!--Loader End -->
    <?php
    session_start();
    include 'connect.php';
    include 'header.php';
    ?>
    <div class="mj_lightgraytbg mj_gallerypage mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder80 mj_bottompadder50">
                        <h1>g<span>allery</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="mj_filter_menu">
                            <ul>
                                <li> <a href="#" class="filter" data-filter="all">All</a>
                                </li>
                                <li> <a href="#" class="filter" data-filter=".business">Business</a>
                                </li>
                                <li> <a href="#" class="filter" data-filter=".office">Our Office</a>
                                </li>
                                <li> <a href="#" class="filter" data-filter=".time">Work Time</a>
                                </li>
                                <li> <a href="#" class="filter" data-filter=".holiday">Holidays</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="mj_grid">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix mix-all holiday" data-value="1">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery1.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big1.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">holiday</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix business" data-value="2">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery2.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big2.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">bussiness</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix office" data-value="3">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery3.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big3.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">our office</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix time" data-value="4">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery4.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big4.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">work time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix holiday" data-value="5">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery5.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big5.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">holiday</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix time" data-value="6">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery6.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big6.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">work time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix business" data-value="7">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery7.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big7.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">bussiness</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix office" data-value="8">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery8.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big8.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">our office</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mix time" data-value="9">
                        <div class="row">
                            <div class="mj_gallary_img">
                                <img src="images/gallery9.jpg" alt="gallery" class="img-responsive">
                                <div class="mj_overlay">
                                    <div class="mj_gallary_info">
                                        <h5 class="animated fadeInDown"><a class="fancybox" data-fancybox-group="gallery" href="images/gallery_big9.jpg" title="Sgwd Ddwli Uchaf, Brecon Waterfalls">Nam liber tempor cum soluta nobis eleifend option</a></h5>
                                        <p class="animated fadeInUp">work time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mj_showmore"> <a href="#" class="mj_showmorebtn mj_bluebtn mj_showbtnbig">load more photo</a> </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>

    <!-- Script Start -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/modernizr.custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/plugins/rsslider/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugins/countto/jquery.countTo.js" type="text/javascript"></script>
    <script src="js/plugins/owl/owl.carousel.js" type="text/javascript"></script>
    <script src="js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>
    <script src="js/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <script src="js/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="js/jquery.mixitup.js" type="text/javascript"></script>
    <script src="js/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="js/plugins/isotop/isotope.pkgd.js"></script>
    <script src="js/plugins/ckeditor/ckeditor.js"></script>
    <script src="js/plugins/ckeditor/adapters/jquery.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <!-- Script End -->
</body>


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:22 GMT -->
</html>