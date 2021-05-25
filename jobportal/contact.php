<?php $pagenm="contact"; ?>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:31 GMT -->
<head>
    <meta charset="utf-8" />
    <title>MeshJobs Multipurpose Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
</head>

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
    if (isset($_GET['temp'])) 
        {?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
          <script type="text/javascript">
            swal("Thankyou!", "You have successfully given feedback", "success");
          </script>
  <?php  }
    ?>
    <div class="mj_mapmarker">
        <div id="map"> </div>
    </div>
    <div class="mj_lightgraytbg mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_contact_info mj_bottompadder80">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                            <div class="mj_mainheading mj_toppadder80 mj_bottompadder50">
                                <h1>c<span>ontact</span> i<span>nformation</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="mj_contact_detail_img">
                                        <img src="images/contact_icon1.jpg" alt="marker" />
                                    </div>
                                    <div class="mj_contact_detail">
                                        <p>Meshjob, Street Name 6901,</p>
                                        <p>Melbourne Australia</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="mj_contact_detail_img">
                                        <img src="images/contact_icon2.jpg" alt="marker" />
                                    </div>
                                    <div class="mj_contact_detail">
                                        <p>+440 875369208 - Office</p>
                                        <p>+440 353363114 - Fax</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="mj_contact_detail_img">
                                        <img src="images/contact_icon3.jpg" alt="marker" />
                                    </div>
                                    <div class="mj_contact_detail">
                                        <p><a href="#">support@sitename.com</a>
                                        </p>
                                        <p><a href="#">info@sitename.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_contact_form">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                            <div class="mj_mainheading mj_toppadder80 mj_bottompadder50">
                                <h1>f<span>eed</span> b<span>ack</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1">
                            <div class="row">
                                <form class="mj_bottompadder80" method="POST" action="contact_process.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" name="sub" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control tr_textarea" id="msg" rows="7" name="msg" required=""></textarea>
                                    </div >
                                    <input type="submit" value="submit" class="mj_showmorebtn mj_bigbtn mj_bluebtn">
                                    
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function($) {
            // map marker js

            var map = new GMaps({
                el: '#map',
                lat: -12.043333,
                lng: -77.028333,
                panControl : false,
		streetViewControl : false,
		mapTypeControl: false,
		overviewMapControl: false,
		scrollwheel: false,
		draggable:false,
		navigationControl: false,
		scaleControl: false,
		zoomControl: false,
		disableDoubleClickZoom: true
            });
            map.addMarker({
                lat: -12.043333,
                lng: -77.03,
                title: 'Web Designer',
                infoWindow: {
                    content: '<h6>Web Designer</h6><p>Dropbox Inc.</p>',
                }
            });
            map.addMarker({
                lat: -12.042,
                lng: -77.028333,
                title: 'Web Deveoloper',
                infoWindow: {
                    content: '<h6>Web Developer</h6><p>Dropbox Inc.</p>'
                }
            });
        });
    </script>
    <!-- Script End -->
</body>


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:32 GMT -->
</html>