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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/create_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:58 GMT -->
<head>
    <meta charset="utf-8" />
    <title>DreamJobs</title>
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
    ?>
    <div class="mj_lightgraytbg mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder80 mj_bottompadder50">
                        <h1>c<span>lient</span> A<span>ccount</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="mj_pricingtable mj_yellowtable mj_createaccount_form_wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#company" aria-controls="company" role="tab" data-toggle="tab">Company</a>
                            </li>
                            <li role="presentation"><a href="#individual" aria-controls="individual" role="tab" data-toggle="tab">individual sing up</a>
                            </li>
                        </ul>
                        <p class="mj_toppadder40">You can also sign up with <a href="#">Facebook</a>, <a href="#">Linkedin</a>, or <a href="#">Google</a>.</p>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="company">
                                <form>
                                    <div class="mj_createaccount_form">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name" id="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Surname" id="surname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Company Name" id="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email Address" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group mj_toppadder20">
                                            <div class="mj_checkbox">
                                                <input type="checkbox" value="1" id="check2" name="checkbox">
                                                <label for="check2"></label>
                                            </div>
                                            <span> I have read, understand and agree to the meshjobs Terms of Service, including the <a href="#">User Agreement</a> and <a href="#">Privacy Policy</a>.</span>
                                        </div>
                                    </div>
                                    <div class="mj_pricing_footer">
                                        <a href="#">Get Started Now!</a>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="individual">
                                <form>
                                    <div class="mj_createaccount_form">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name" id="uname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Surname" id="usurname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email Address" id="uemail" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" id="upassword" class="form-control">
                                        </div>
                                        <div class="form-group mj_toppadder20">
                                            <div class="mj_checkbox">
                                                <input type="checkbox" value="1" id="check3" name="checkbox">
                                                <label for="check3"></label>
                                            </div>
                                            <span> I have read, understand and agree to the meshjobs Terms of Service, including the <a href="#">User Agreement</a> and <a href="#">Privacy Policy</a>.</span>
                                        </div>
                                    </div>
                                    <div class="mj_pricing_footer">
                                        <a href="#">Get Started Now!</a>
                                    </div>
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
    <script src="js/custom.js" type="text/javascript"></script>
    <!-- Script End -->
</body>


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/create_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:58 GMT -->
</html>