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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:22 GMT -->
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
                            <li><a href="#">Candidates</a>
                                <ul class="sub_menu">
                                    <li><a href="candidates.html">Candidates</a>
                                    </li>
                                    <li><a href="candidates_detail.html">Candidate detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active"><a href="#">Pages</a>
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
                                        <input type="checkbox" value="1" id="check1" name="checkbox">
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
    <div class="mj_lightgraytbg mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder80 mj_bottompadder50">
                        <h1>m<span>eet</span> o<span>ur</span> t<span>eam</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="mj_team_filter_menu mj_toppadder10 mj_bottompadder60">
						<ul>
							<li> <a href="#" class="filter" data-filter="all">all</a>
							</li>
							<li> <a href="#" class="filter" data-filter=".founders">founders</a>
							</li>
							<li> <a href="#" class="filter" data-filter=".developers">developers</a>
							</li>
							<li> <a href="#" class="filter" data-filter=".designers">designers</a>
							</li>
							<li> <a href="#" class="filter" data-filter=".managers">managers</a>
							</li>
							<li> <a href="#" class="filter" data-filter=".accountants">accountants</a>
							</li>
							<li> <a href="#" class="filter" data-filter=".support">support</a>
							</li>
						</ul>
					</div>
                </div>
                <div id="mj_grid">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all founders" data-value="1">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team1.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">founder</span>
								<h4 class="animated fadeInDown"><a href="#">Jonathan Porter</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all founders" data-value="2">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team2.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">founder</span>
								<h4 class="animated fadeInDown"><a href="#">Britney Simpson</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all developers" data-value="3">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team3.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">developer</span>
								<h4 class="animated fadeInDown"><a href="#">Frank Adams</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all managers" data-value="4">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team4.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">manager</span>
								<h4 class="animated fadeInDown"><a href="#">Aynne Valencia</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all designers" data-value="5">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team5.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">designer</span>
								<h4 class="animated fadeInDown"><a href="#">Daniel Westall</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all accountants" data-value="6">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team6.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">accountant</span>
								<h4 class="animated fadeInDown"><a href="#">Jeannine Taylor</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all designers" data-value="7">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team7.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">designer</span>
								<h4 class="animated fadeInDown"><a href="#">Gabriel Lopes</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all developers" data-value="8">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team8.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">developer</span>
								<h4 class="animated fadeInDown"><a href="#">Pamela Pare</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all managers" data-value="9">
						<div class="mj_team_wrapper">
							<div class="mj_team_img">
								<img src="images/team9.jpg" alt="team">
							</div>
							<div class="mj_team_info mj_toppadder80">
								<span class="animated fadeInUp mj_toppadder20">manager</span>
								<h4 class="animated fadeInDown"><a href="#">Jeff Witters</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper. </p>
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
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mj_team_btn mj_bottompadder20"> <a href="#" class="mj_mainbtn mj_btnyellow" data-text="load more"><span>load more</span></a> </div>
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
                    <div class="mj_weight mj_bottompadder20"> <span>Subscribe to our newsletter!</span>
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
                        <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> </div>
                </div>
                <div class="totop">
                    <div class="gototop">
                        <a href="#"> <i class="fa fa-angle-up"></i> </a>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:27 GMT -->
</html>