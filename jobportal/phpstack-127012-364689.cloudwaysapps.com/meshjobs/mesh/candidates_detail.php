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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/candidates_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:45 GMT -->
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
    <div class="mj_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="mj_logo">
                        <a href="index.html"><img src="images/logo.png" class="img-responsive" alt="logo">
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mj_menu" aria-expanded="false">
                            <span class="sr-only">MENU</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="collapse navbar-collapse mj_navmenu" id="mj_menu">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">home</a>
                            </li>
                            <li><a href="#">Jobs</a>
                                <ul class="sub_menu">
                                    <li><a href="jobs.html">Jobs</a>
                                    </li>
                                    <li><a href="jobs_location.html">location</a>
                                    </li>
                                    <li><a href="job_detail.html">Job Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="post_job.html">Post a Job</a>
                            </li>
                            <li><a href="#">Post a Resume</a>
                                <ul class="sub_menu">
                                    <li><a href="post_resume.html">Post a Resume</a>
                                    </li>
                                    <li><a href="resume_preview.html">Resume Preview</a>
                                    </li>
                                    <li><a href="choose_package.html">choose package</a>
                                    </li>
                                    <li><a href="cart.html">Cart Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active"><a href="#">Candidates</a>
                                <ul class="sub_menu">
                                    <li><a href="candidates.html">Candidates</a>
                                    </li>
                                    <li><a href="candidates_detail.html">Candidate detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="sub_menu">
                                    <li><a href="blog_fullwidth.html">blog fullwidth</a>
                                    </li>
                                    <li><a href="blog_sidebar.html">blog sidebar</a>
                                    </li>
                                    <li><a href="blog_single.html">blog single</a>
                                    </li>
                                    <li><a href="gallery.html">gallery</a>
                                    </li>
                                    <li><a href="team.html">team</a>
                                    </li>
                                    <li><a href="work.html">work</a>
                                    </li>
                                    <li><a href="companies.html">companies</a>
                                    </li>
                                    <li><a href="contact.html">contact</a>
                                    </li>
									<li><a href="shop_index.html">Shop home</a>
                                    </li>
									<li><a href="product.html">product</a>
                                    </li>
									<li><a href="product_single.html">product single</a>
                                    </li>
                                    <li><a href="create_account.html">create account</a>
                                    </li>
                                    <li><a href="freelancer_account.html">freelancer account</a>
                                    </li>
                                    <li><a href="signup.html">sign up</a>
                                    </li>
                                    <li><a href="login.html">login</a>
                                    </li>
                                    <li><a href="error.html">error</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right mj_right_menu mj_withoutlogin_menu">
                            <li class="mj_searchbtn"><a href="#"><i class="fa fa-search"></i></a>
                                <div class="mj_search_option">
                                    <form>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-search"></i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Type and Hit Enter">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li><a href="signup.html"><i class="fa fa-lock"></i> Sign Up</a>
                            </li>
                            <li><a class="mj_logintoggle" onclick="show_my_div('my_profile_div_login' , 'id')"><i class="fa fa-user"></i> Login</a>
                            </li>
                        </ul>
                        <div class="mj_profilediv" id="my_profile_div_login">
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Username or Email" id="ur_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" id="ur_password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="mj_checkbox">
                                        <input type="checkbox" value="1" id="check1">
                                        <label for="check1"></label>
                                    </div>
                                    <span> remember me</span>
                                </div>
                                <div class="mj_showmore"> <a href="#" class="mj_showmorebtn mj_greenbtn">login now!</a> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_pagetitle2">
        <div class="mj_pagetitleimg">
            <img src="images/page_title1.jpg" alt="">
            <div class="mj_mainheading_overlay"></div>
        </div>
        <div class="mj_pagetitle_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mj_mainheading">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="mj_joblogo">
                                        <img src="images/candidate_img.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="mj_pageheading mj_toppadder50">
                                        <h1>J<span>onathan</span> p<span>orter</span></h1>
                                        <ul>
                                            <li>
                                                <label><i class="fa fa-map-marker"></i>
                                                </label><a href="#">San Francisco</a>
                                            </li>
                                            <li>
                                                <label>Classification:</label><a href="#">UX / Interaction Designer</a>
                                            </li>
                                            <li>
                                                <label>Hourly Rate: </label><span class="mj_green_text">$40.00/hr</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_lightgraytbg mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                    <div class="mj_social_media_section mj_candidatepage_media mj_toppadder40 mj_bottompadder40">
                        <ul>
                            <li><a href="contact.html" class="mj_mainbtn mj_btnblue" data-text="Contact Candidate"><span>Contact Candidate</span></a>
                            </li>
                            <li><a href="#" class="mj_mainbtn mj_btnred" data-text="Bookmark this Resume"><span>Bookmark this Resume</span></a>
                            </li>
                        </ul>
                        <p><a href="#"><i class="fa fa-download"></i></a>
                        </p>
                        <p><a href="#"><i class="fa fa-print"></i></a>
                        </p>
                        <p><a href="#"><i class="fa fa-share-alt"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_postdiv mj_jobdetail mj_toppadder50 mj_bottompadder50">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Overview</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>skills</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <ul class="mj_selected_content">
                                            <li>
                                                <a href="#"><img src="images/cross_white.png" alt=""> Design</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/cross_white.png" alt=""> Web Designer</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/cross_white.png" alt=""> User Experience</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/cross_white.png" alt=""> developer</a>
                                            </li>
                                        </ul>
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
                                        <ul>
                                            <li>Time honoured communication, leadership and academic traits strengthened through Product Assistant position and work presentations</li>
                                            <li>Used Visual Studio on unix systems to implement real time BlackBerry algorithms</li>
                                            <li>Thorough presentation, problem solving and leadership skills improved through Product Assistant position and project work</li>
                                            <li>Participated in a team that used CSS, mobile platforms and Oracle Server to improve Web Service technologies for heuristic Windows systems</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Education</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <span>University of Waterland Waterland, ON</span>
                                        <blockquote class="mj_blueblockquote">
                                            <span><i class="fa fa-calendar"></i> Dec 2010 - Sep 2011</span>
                                            <h5>Honours Co-op BMATH</h5>
                                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Experience</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv mj_bottompadder30">
                                        <span>Contrasystems, Azeroth, WOW</span>
                                        <blockquote class="mj_yellowblockquote">
                                            <span><i class="fa fa-calendar"></i> Jul 2012 - Dec 2013</span>
                                            <h5>Chief Software Analyst</h5>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                        </blockquote>
                                    </div>
                                    <div class="mj_detaildiv mj_bottompadder30">
                                        <span>World-span, Ottawa, ON</span>
                                        <blockquote class="mj_yellowblockquote">
                                            <span><i class="fa fa-calendar"></i> Jul 2013 - Dec 2014</span>
                                            <h5>Product Assistant</h5>
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                                        </blockquote>
                                    </div>
                                    <div class="mj_detaildiv mj_bottompadder30">
                                        <span>Amaegg, Seattle, WA</span>
                                        <blockquote class="mj_yellowblockquote">
                                            <span><i class="fa fa-calendar"></i> Jul 2014 - Dec 2015</span>
                                            <h5>Chief Software Software</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder30">
                    <div class="mj_about_section mj_toppadder80 mj_bottompadder80">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                                <h1>A<span>bout</span> C<span>andidate</span></h1>
                                <p>Envato is a bootstrapped Australian company that operates an ecosystem of sites with a global community. We’re passionate about the web, and about enabling creators to make a living doing what they love. At Envato, we make websites that help people from all over the world change the way they earn and learn online.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link"></i> Website</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i>facebook</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i>dribbble</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_footer mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_weight mj_bottompadder20">
                        <a href="index.html"><img src="images/logo.png" class="img-responsive" alt="">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad minim veniam. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                    </div>
                    <div class="mj_weight mj_bottompadder20">
                        <span>Subscribe to our newsletter!</span>
                        <form class="form-inline mj_newsletter">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <button class="mj_newsletterbtn"><img src="images/icon-mail.png" alt="">
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="mj_weight mj_bottompadder20">
                        <div class="mj_sociallink">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mj_copyright">
                        <p>&copy; 2015 <a href="#">mesh<span class="mj_yellow_text">jobs</span></a> Inc.
                            <br> Designerd by <a href="#">themefire</a> &nbsp; / &nbsp; Only on <a href="#">Envato Market</a>
                        </p>
                        <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="totop">
                    <div class="gototop">
                        <a href="#">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/candidates_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:45 GMT -->
</html>