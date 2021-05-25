<?php $pagenm="postresume";  
session_start();
if (!isset($_SESSION['user'])) 
{
    header("location:index.php");
}
?>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/post_resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:44 GMT -->
<head>
    <meta charset="utf-8" />
    <title>DreamJobs </title>
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
    //session_start();
    include 'connect.php';
    include 'header.php';
    ?>
    <div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder50 mj_bottompadder50">
                        <h1>P<span>ost</span> <span>a</span> R<span>esume</span></h1>
                        <p class="mj_bottompadder20">You are currently signed in as <strong class="mj_black_text">johndoe</strong>
                        </p>
                        <a href="#" class="mj_mainbtn mj_btnblue" data-text="Sign Out"><span>sign out</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_postdiv mj_shadow_blue mj_postpage mj_toppadder50 mj_bottompadder50">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                            <form>
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="John Doe">
                                </div>
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" class="form-control" placeholder="Job Title">
                                </div>
                                <div class="form-group">
                                    <label>Your Email Address</label>
                                    <input type="text" class="form-control" placeholder="Email Id">
                                </div>
                                <div class="form-group">
                                    <label>Professional Title</label>
                                    <input type="text" class="form-control" placeholder="e.g. “Web Developer”">
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control" placeholder="e.g. “London, UK”, “New York”, “Houston, TX”">
                                </div>
                                <div class="form-group">
                                    <label>Photo <span>(optionnal)</span>
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <a href="#" class="mj_mainbtn mj_btngray" data-text="Choose File"><span>choose file</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Video <span>(optionnal) </span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="A link to a video about yourself">
                                </div>
                                <div class="form-group">
                                    <label>Resume Category</label>
                                    <select name="timepass" class="custom-select">
                                        <option>Choose a Category</option>
                                        <option>Design</option>
                                        <option>web</option>
                                        <option>development</option>
                                    </select>
                                    <ul class="mj_selected_content">
                                        <li>
                                            <a href="#"><img src="images/cross_white.png" alt=""> Design</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/cross_white.png" alt=""> web</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/cross_white.png" alt=""> development</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label>Resume Content</label>
                                    <textarea id="editor1" class="form-control">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim <a href="#">veniam</a>, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Skills <span>(optionnal)</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Comma separate a list of relevant skills">
                                </div>
                                <div class="form-group">
                                    <label>URLs<span>(optionnal)</span>
                                    </label>
                                    <div id="i1" class="mj_addurl">+ Add URL
                                        <span>Optionally provide links to any of your websites or social network profiles.</span>
                                    </div>
                                    <div class="mj_addurldiv" id="divi1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Alink to a video about your company">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="button" value="Add New" class="mj_add" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Education<span>(optionnal)</span>
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="mj_education">
                                                <input type="text" class="form-control" placeholder="School Name">
                                                <input type="text" class="form-control" placeholder="Qualification(s)">
                                                <input type="text" class="form-control" placeholder="Start / End Date">
                                                <textarea class="form-control" rows="5" placeholder="Notes"></textarea>
                                                <a href="#" class="mj_removefile"><i class="fa fa-times"></i> remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div id="i2" class="mj_addurl">+ Add URL
                                        <span>Optionally provide links to any of your websites or social network profiles.</span>
                                    </div>
                                    <div class="mj_addurldiv" id="divi2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Alink to a video about your company">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="button" value="Add New" class="mj_add" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Experience<span>(optionnal)</span>
                                    </label>
                                    <div id="i3" class="mj_addurl">+ Add URL
                                        <span>Optionally provide links to any of your websites or social network profiles.</span>
                                    </div>
                                    <div class="mj_addurldiv" id="divi3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Alink to a video about your company">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="button" value="Add New" class="mj_add" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>twitter <span>(optionnal)</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label>logo <span>(optionnal)</span>
                                    </label>
                                    <img src="images/envato_logo.png" class="img-responsive" alt="">
                                    <a href="#" class="mj_removefile"><i class="fa fa-times"></i> remove</a>
                                    <a href="#" class="mj_mainbtn mj_btngray" data-text="Choose File"><span>choose file</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mj_showmore"><a href="#" class="mj_showmorebtn mj_bigbtn mj_bluebtn">Preview <i class="fa fa-angle-right"></i></a>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/post_resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:44 GMT -->
</html>