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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:08 GMT -->
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
                            <li class="active"><a href="index.html">home</a>
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
	<div class="clearfix"></div>
    <div class="mj_slider">
		<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
				<ul>	<!-- SLIDE  -->
					<li data-index="rs-1" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/homeslider_thumb1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
						<!-- MAIN IMAGE -->
						<img src="images/sliderbg1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYER NR 0 -->
							<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" id="slide-16-layer-8" 
									 data-x="['left','left','left','left']" data-hoffset="['450','350','250','100']" 
									 data-y="['top','top','top','top']" data-voffset="['120','100','80','50']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><img src="images/left-line.jpg" alt="">
							</div>
							<!-- LAYER NR 1 -->
							<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" id="slide-16-layer-1.1" 
									 data-x="['right','right','right','right']" data-hoffset="['450','350','250','100']" 
									 data-y="['top','top','top','top']" data-voffset="['120','100','80','50']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><img src="images/left-line.jpg" alt="">
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-CallToAction   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.2" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['top','top','top','top']" data-voffset="['125','105','85','55']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;">meshjobs.com
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.3" 
									 data-x="['left','left','left','left']" data-hoffset="['150','150','100','20']" 
									 data-y="['top','top','top','top']" data-voffset="['200','200','180','150']" 
												data-fontsize="['130','100','80','60']"
									data-lineheight="['100','100','80','50']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 5; white-space: nowrap;">Searching jobs 
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.4" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" 
									 data-fontsize="['100','80','80','50']"
									data-lineheight="['100','100','80','50']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;">in one click 
								</div>
								<!-- LAYER NR. 5 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.5" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i> 
								</div>
							</li>
							<li data-index="rs-2" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/homeslider_thumb2.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
								<!-- MAIN IMAGE -->
								<img src="images/sliderbg2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->
								<!-- LAYER NR 0 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.1" 
									 data-x="['left','left','left','left']" data-hoffset="['450','350','250','100']" 
									 data-y="['top','top','top','top']" data-voffset="['120','100','80','50']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><img src="images/left-line.jpg" alt="">
								</div>
								<!-- LAYER NR 1 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.2" 
									 data-x="['right','right','right','right']" data-hoffset="['450','350','250','100']" 
									 data-y="['top','top','top','top']" data-voffset="['120','100','80','50']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><img src="images/left-line.jpg" alt="">
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-CallToAction   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.3" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['top','top','top','top']" data-voffset="['125','105','85','55']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;">meshjobs.com
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.4" 
									 data-x="['left','left','left','left']" data-hoffset="['150','150','100','20']" 
									 data-y="['top','top','top','top']" data-voffset="['200','200','180','150']" 
												data-fontsize="['130','100','80','60']"
									data-lineheight="['100','100','80','50']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 5; white-space: nowrap;">Searching jobs 
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.5" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" 
									 data-fontsize="['100','80','80','50']"
									data-lineheight="['100','100','80','50']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;">in one click 
								</div>
								<!-- LAYER NR. 5 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.6" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i> 
								</div>
							</li>
							<!-- SLIDE  -->
					</ul>
					<div class="tp-static-layers"></div>
					<div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>	
			</div>
		</div><!-- END REVOLUTION SLIDER -->
    </div>
    <div class="clearfix"></div>
    <div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_tabs mj_bottompadder50">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mj_joblist" role="tablist">
                            <li role="presentation" class="active"><a href="#recentjobs" aria-controls="recentjobs" role="tab" data-toggle="tab">Recent Jobs</a>
                            </li>
                            <li role="presentation"><a href="#featuredjobs" aria-controls="featuredjobs" role="tab" data-toggle="tab">Featured Jobs</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="recentjobs">
                                <div class="mj_tabcontent mj_toppadder30">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic1.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Senior Web Developer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>New York City</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">Full Time</a>
                                            </td>
                                            <td><span>$45,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic2.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">UX Designer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Boston</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_bluebtn">Freelance</a>
                                            </td>
                                            <td><span>$20,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic3.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Web Designer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Boston</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full time</a>
                                            </td>
                                            <td><span>$36,500</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic4.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Project Manager</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Los Angeles</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full time</a>
                                            </td>
                                            <td><span>$26,200</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic5.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Design Technologist</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Chicago</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_orangebtn">Part Time</a>
                                            </td>
                                            <td><span>$84,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic6.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Front End Developer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>New York City</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full Time</a>
                                            </td>
                                            <td><span>$65,000</span>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
										<div class="mj_showmore">
											<a href="#" class="mj_blackbtn mj_showmorebtn">Show More</a>
										</div>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="featuredjobs">
                                <div class="mj_tabcontent mj_toppadder30">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic2.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">UX Designer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Boston</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_bluebtn">Freelance</a>
                                            </td>
                                            <td><span>$20,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic1.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Senior Web Developer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>New York City</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">Full Time</a>
                                            </td>
                                            <td><span>$45,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic3.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Web Designer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Boston</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full time</a>
                                            </td>
                                            <td><span>$36,500</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic4.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Project Manager</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Los Angeles</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full time</a>
                                            </td>
                                            <td><span>$26,200</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic5.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Design Technologist</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Chicago</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_orangebtn">Part Time</a>
                                            </td>
                                            <td><span>$84,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic6.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Front End Developer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>New York City</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full Time</a>
                                            </td>
                                            <td><span>$65,000</span>
                                            </td>
                                        </tr>
                                    </table>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
										<div class="mj_showmore">
											<a href="#" class="mj_blackbtn mj_showmorebtn">Show More</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder50 mj_bottompadder50">
                        <h1>M<span>eshjobs</span> S<span>ite</span> S<span>tats</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder20">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mj_countdiv">
                                <div class="mj_count_img">
                                    <img src="images/count1.png" class="img-responsive" alt="">
                                </div>
                                <div class="mj_countdata">
                                    <span class="timer" data-from="0" data-to="6.389" data-speed="3000" data-decimals="3"></span>
                                    <p>Jobs Posted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mj_countdiv">
                                <div class="mj_count_img">
                                    <img src="images/count2.png" class="img-responsive" alt="">
                                </div>
                                <div class="mj_countdata">
                                    <span class="timer" data-from="0" data-to="10.981" data-speed="3000" data-decimals="3"></span>
                                    <p>Companies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mj_countdiv">
                                <div class="mj_count_img">
                                    <img src="images/count3.png" class="img-responsive" alt="">
                                </div>
                                <div class="mj_countdata">
                                    <span class="timer" data-from="0" data-to="2.038" data-speed="3000" data-decimals="3"></span>
                                    <p>Resumes Posted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mj_countdiv">
                                <div class="mj_count_img">
                                    <img src="images/count4.png" class="img-responsive" alt="">
                                </div>
                                <div class="mj_countdata">
                                    <span class="timer" data-from="0" data-to="34.657" data-speed="3000" data-decimals="3"></span>
                                    <p>Members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_transprentbg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 mj_toppadder80 mj_bottompadder50">
                            <div class="mj_videosection_data mj_toppadder50">
                                <h1>H<span>ow</span> I<span>t</span> W<span>orks</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Claritas est etiam processus dynamicus.</p>
                                <a href="#" class="mj_readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="mj_video">
                            <div class="mj_videodiv">
                                <img src="images/applepc1.jpg" alt="work">
                                <div class="mj_overlay">
                                    <div class="mj_videooverlay_inner">
                                        <a href="#"><i class="fa fa-play-circle"></i></a>
                                        <p>Watch now this video about how works mesh<span class="mj_yellow_text">jobs</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <iframe id="video" src="http://player.vimeo.com/video/60707752" width="1200" height="482"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder50 mj_bottompadder50">
                        <h1>F<span>eatured</span> c<span>ompanies</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo1.png" class="img-responsive" alt="">
                        <span>20</span>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo2.png" class="img-responsive" alt="">
                         <span>8</span>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo3.png" class="img-responsive" alt="">
                        <span>63</span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo4.png" class="img-responsive" alt="">
                        <span>37</span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo5.png" class="img-responsive" alt="">
                        <span>5</span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo6.png" class="img-responsive" alt="">
                        <span>104</span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo7.png" class="img-responsive" alt="">
                        <span>7</span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo8.png" class="img-responsive" alt="">
                        <span>14</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_transprentbg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="mj_videodiv">
                            <img src="images/applepc.jpg" alt="">
                            <div class="mj_overlay">
                                <div class="mj_overlay_inner">
                                    <h1>S<span>ome</span> K<span>ind</span> T<span>he</span> W<span>ords</span> F<span>rom</span> <span class="mj_yellow_text">O<span>ur</span> C<span>lients</span></span></h1>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="mj_testimonial_slider">
                            <span class="mj_quote"><img src="images/quote.png" class="img-responsive" alt=""></span>
                            <div class="mj_testimonial_slider_content">
                                <div id="owl-demo" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="mj_testimonial_img">
                                            <img src="images/testimonial1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="mj_testimonial_data">
                                            <h4>L<span>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</span></h4>
                                            <h6>Britney Simpson</h6>
                                            <p>Web Designer</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="mj_testimonial_img">
                                            <img src="images/testimonial2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="mj_testimonial_data">
                                            <h4>L<span>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</span></h4>
                                            <h6>mike tussle</h6>
                                            <p>Web Designer</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="mj_testimonial_img">
                                            <img src="images/testimonial1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="mj_testimonial_data">
                                            <h4>L<span>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</span></h4>
                                            <h6>Britney Simpson</h6>
                                            <p>Web Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_lightgraytbg mj_toppadder50 mj_bottompadder40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder50 mj_bottompadder50">
                        <h1>P<span>lans</span> &amp; P<span>ricing</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mj_bottommargin60">
                    <div class="mj_pricingtable mj_greentable">
                        <div class="mj_pricing_heading">
                            <div class="mj_table_price">
                                $0
                            </div>
                            <h3>F<span>ree</span></h3>
                            <span>For 1 job listed for 30 days</span>
                        </div>
                        <ul>
                            <li>One Time Fee</li>
                            <li>Allows 1 Job Posting</li>
                            <li>Non-Highlighted Post</li>
                            <li>No featured jobs</li>
                            <li>Displayed for 5 days</li>
                        </ul>
                        <div class="mj_pricing_footer">
                            <a href="#"><i class="fa fa-plus"></i> Choose Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mj_bottommargin60">
                    <div class="mj_pricingtable mj_bluetable">
                        <div class="mj_pricing_heading">
                            <div class="mj_table_price">
                                $29
                            </div>
                            <h3>s<span>tart</span> u<span>p</span></h3>
                            <span>For 5 job listed for 30 days</span>
                        </div>
                        <ul>
                            <li>One Time Fee</li>
                            <li>Allows 5 Job Posting</li>
                            <li>Non-Highlighted Post</li>
                            <li>No featured jobs</li>
                            <li>Displayed for 10 days</li>
                        </ul>
                        <div class="mj_pricing_footer">
                            <a href="#"><i class="fa fa-plus"></i> Choose Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mj_bottommargin60">
                    <div class="mj_pricingtable mj_yellowtable">
                        <div class="mj_pricing_heading">
                            <div class="mj_table_price">
                                $39
                            </div>
                            <h3>c<span>ompany</span></h3>
                            <span>For 8 job listed for 30 days</span>
                        </div>
                        <ul>
                            <li>One Time Fee</li>
                            <li>Allows 8 Job Posting</li>
                            <li>Highlighted Post</li>
                            <li>yes featured jobs</li>
                            <li>Displayed for 16 days</li>
                        </ul>
                        <div class="mj_pricing_footer">
                            <a href="#"><i class="fa fa-plus"></i> Choose Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mj_bottommargin60">
                    <div class="mj_pricingtable mj_orangetable">
                        <div class="mj_pricing_heading">
                            <div class="mj_table_price">
                                $59
                            </div>
                            <h3>e<span>nterprise</span></h3>
                            <span>For 10 job listed for 30 days</span>
                        </div>
                        <ul>
                            <li>One Time Fee</li>
                            <li>Allows 10 Job Posting</li>
                            <li>Highlighted Post</li>
                            <li>yes featured jobs</li>
                            <li>Displayed for 20 days</li>
                        </ul>
                        <div class="mj_pricing_footer">
                            <a href="#"><i class="fa fa-plus"></i> Choose Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_mockup_section mj_toppadder70">
        <div class="mj_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_whiteheading mj_toppadder50 mj_bottompadder50">
                        <h1>g<span>et</span> m<span>esh</span><span class="mj_yellow_text">Jobs</span> a<span>pp</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_iphonemockup">
                        <img src="images/mockup.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_lightgraytbg mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_showmore"><a href="#" class="mj_showmorebtn mj_bigbtn mj_greenbtn">Download App from the App Store Now!</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder80 mj_bottompadder50">
                        <h1>r<span>ecent</span> a<span>rticles</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mj_articleslider mj_bottompadder50">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_recent_article">
                                    <div class="mj_articleimg">
                                        <img src="images/recent_article1.jpg" class="img-responsive" alt="">
                                        <div class="mj_articleoverlay">
                                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
                                        </div>
                                    </div>
                                    <div class="mj_articledata">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                        <span>August 06, 2015</span>
                                        <a href="blog_single.html"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_recent_article">
                                    <div class="mj_articleimg">
                                        <img src="images/recent_article2.jpg" class="img-responsive" alt="">
                                        <div class="mj_articleoverlay">
                                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
                                        </div>
                                    </div>
                                    <div class="mj_articledata">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                        <span>August 06, 2015</span>
                                        <a href="blog_single.html"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_recent_article">
                                    <div class="mj_articleimg">
                                        <img src="images/recent_article3.jpg" class="img-responsive" alt="">
                                        <div class="mj_articleoverlay">
                                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
                                        </div>
                                    </div>
                                    <div class="mj_articledata">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                        <span>August 06, 2015</span>
                                        <a href="blog_single.html"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_recent_article">
                                    <div class="mj_articleimg">
                                        <img src="images/recent_article2.jpg" class="img-responsive" alt="">
                                        <div class="mj_articleoverlay">
                                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
                                        </div>
                                    </div>
                                    <div class="mj_articledata">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                        <span>August 06, 2015</span>
                                        <a href="blog_single.html"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_recent_article">
                                    <div class="mj_articleimg">
                                        <img src="images/recent_article3.jpg" class="img-responsive" alt="">
                                        <div class="mj_articleoverlay">
                                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
                                        </div>
                                    </div>
                                    <div class="mj_articledata">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                        <span>August 06, 2015</span>
                                        <a href="blog_single.html"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_bluebg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_addsection">
                        <h2>L<span>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</span> </h2>
                        <ul>
                            <li><a href="post_job.html" class="mj_mainbtn mj_btnyellow" data-text="Post a job!"><span>post a job!</span></a>
                            </li>

                            <li><a href="contact.html" class="mj_mainbtn mj_btndefault" data-text="Contact Now"><span>contact now</span></a>
                            </li>
                        </ul>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:29 GMT -->
</html>