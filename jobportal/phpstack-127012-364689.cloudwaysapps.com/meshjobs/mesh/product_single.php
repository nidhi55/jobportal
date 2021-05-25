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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/product_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:56 GMT -->
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
                            <li><a href="index.html">home</a></li>
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
                                <div class="mj_showmore"> <a href="javascript:;" class="mj_showmorebtn mj_greenbtn">login now!</a> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mj_pagetitle">
        <img src="images/page_title2.jpg" alt="">
		<div class="mj_mainheading_overlay"></div>
        <div class="mj_pagetitle_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mj_mainheading mj_toppadder80 mj_bottompadder80">
                            <h1>p<span>roduct</span> d<span>etails</span></h1>
                            <p>Orem ipsum dolor consectetuer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_lightgraytbg mj_product_sidebar mj_bottompadder80 mj_toppadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="mj_product_slider_nav">
							<ul>
								<li id="mj-img1"><img src="images/pst1.jpg" class="img-responsive" alt=""/></li>
								<li id="mj-img2"><img src="images/pst2.jpg" class="img-responsive" alt=""/></li>
								<li id="mj-img3"><img src="images/pst3.jpg" class="img-responsive" alt=""/></li>
								<li id="mj-img4"><img src="images/pst4.jpg" class="img-responsive" alt=""/></li>
							</ul>
						</div>
						<div class="mj_product_slider">
							<div class="mj-img1">
								<img src="images/ps1.jpg" alt=""/>
								<span>
									<a href="javascript:;"><i class="fa fa-search-plus"></i> Zoom</a>
									<a href="images/ps1.jpg" onclick="window.open('images/ps1.jpg', 'newwindow', 'width=600, height=650'); return false;"><i class="fa fa-arrows-alt"></i> View Full Screen</a>
								</span>
							</div>
							<div class="mj-img2">
								<img src="images/ps1.jpg" alt=""/>
								<span>
									<a href="javascript:;"><i class="fa fa-search-plus"></i> Zoom</a>
									<a href="images/ps1.jpg" onclick="window.open('images/ps1.jpg', 'newwindow', 'width=600, height=650'); return false;"><i class="fa fa-arrows-alt"></i> View Full Screen</a>
								</span>
							</div>
							<div class="mj-img3">
								<img src="images/ps1.jpg" alt=""/>
								<span>
									<a href="javascript:;"><i class="fa fa-search-plus"></i> Zoom</a>
									<a href="images/ps1.jpg" onclick="window.open('images/ps1.jpg', 'newwindow', 'width=600, height=650'); return false;"><i class="fa fa-arrows-alt"></i> View Full Screen</a>
								</span>
							</div>
							<div class="mj-img4">
								<img src="images/ps1.jpg" alt=""/>
								<span>
									<a href="javascript:;"><i class="fa fa-search-plus"></i> Zoom</a>
									<a href="images/ps1.jpg" onclick="window.open('images/ps1.jpg', 'newwindow', 'width=600, height=650'); return false;"><i class="fa fa-arrows-alt"></i> View Full Screen</a>
								</span>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div class="mj_product_single_info">
							<h4>Black Panther Pure Cotton Shirt for Men</h4>
							<div class="mj_price_section mj_toppadder10 mj_bottompadder10">
								<del>$ 36.00</del> <span>$ 25.55</span>
							</div>
							<div class="ratings">
								<span class="act fa fa-star"></span>
								<span class="act fa fa-star"></span>
								<span class="act fa fa-star"></span>
								<span class="act fa fa-star"></span>
								<span class="act fa fa-star"></span>
							</div>
							<div class="mj_product_info_wrapper mj_toppadder10 mj_bottompadder40">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
								<p class="mj_toppadder10">Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </p>
							</div>
							<div class="mj_addtocart_wrapper mj_toppadder50 mj_bottompadder30">
								<div class="mj_incre_decre_btns">
									<button type="button" class="btn_small count_minus" id="breakDecrease">
									  -
									</button>
									<button type="button" class="btn_big count_val" id="breakValue" disabled></button>
									<button type="button" class="btn_small count_plus" id="breakIncrease">
									  +
									</button>
								</div>
								<div class="mj_addtocart_btn">
									<a href="javascript:;">Add to cart</a>
								</div>
								<span><a href="javascript:;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></span>
							</div>
							<div class="mj_share_wrapper">
								<ul>
									<li><a href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="woocommerce-tabs mj_bottompadder80 mj_toppadder50" role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Rating & Review</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<h2>product description</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.</p>
								<ul>
									<li>
										<label>Fit</label>
										<p>- Slim</p>
									</li>
									<li>
										<label>Color </label>
										<p>- Black</p>
									</li>
									<li>
										<label>Neck</label>
										<p>- COLLAR</p>
									</li>
									<li>
										<label>Sleeves</label>
										<p>- Full Sleeves</p>
									</li>
									<li>
										<label>Fabric</label>
										<p>- Cotton</p>
									</li>
									<li>
										<label>Wash</label>
										<p>- CareWash with similar colors, Dry Promptly, Steam Iron, Do Not Bleach, Do Not Wring</p>
									</li>
									<li>
										<label>Style</label>
										<p>- Solid</p>
									</li>
									<li>
										<label>SKU</label>
										<p>- IK593MA50DSFINDFAS</p>
									</li>
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<div class="reviews-tab">
									<p><b>MeshJobs</b>, 23 April 2016</p>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
									<div class="ratings mj_bottompadder20">
										<span class="act fa fa-star"></span>
										<span class="act fa fa-star"></span>
										<span class="act fa fa-star"></span>
										<span class="act fa fa-star"></span>
										<span class="act fa fa-star"></span>
									</div>
									<p><b>Buyer</b>, 24 April 2016</p>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
									<div class="ratings mj_bottompadder20">
										<span class="act fa fa-star"></span>
										<span class="act fa fa-star"></span>
										<span class="act fa fa-star"></span>
										<span class="act fa fa-star"></span>
										<span class="act fa fa-star"></span>
									</div>
									<form>
										<h5>Write a Review</h5>
										<div class="form-group">
											<label>Your Name *</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Your Review *</label>
											<textarea class="form-control" rows="7"></textarea>
										</div>

										<span class="pull-left">Rating*&nbsp;&nbsp;</span>
										<div class="ratings">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<button type="submit" class="btn-black">Submit</button>
									</form>
								</div>
							</div>
						</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mj_mainheading mj_side_heading mj_bottompadder50">
							<h2>r<span>elated</span> p<span>roducts</span></h2>
							<p>Based on your search of our site</p>
						</div>
					</div>
						<div class="mj_related_products">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="mj_feature_product">
									<div class="mj_feature_product_img">
										<img src="images/fp2.jpg" class="img-responsive" alt="">
										<div class="mj_feature_product_overlay">
											<div class="mj_feature_product_btn">
												<a href="product.html">view all</a>
											</div>
											<div class="mj_feature_product_box">
												<ul>
													<li><a href="javascript:;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
													<li><a class="fancybox" data-fancybox-group="gallery" href="images/fp2.jpg"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
													<li><a href="javascript:;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="mj_feature_product_data">
										<p><a href="product_single.html">Fabels by Fabindia Red Embroidered Shirt</a></p>
										<del>$46.00</del> <span>$35.55</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="mj_feature_product">
									<div class="mj_feature_product_img">
										<img src="images/fp3.jpg" class="img-responsive" alt="">
										<div class="mj_feature_product_overlay">
											<div class="mj_feature_product_btn">
												<a href="product.html">view all</a>
											</div>
											<div class="mj_feature_product_box">
												<ul>
													<li><a href="javascript:;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
													<li><a class="fancybox" data-fancybox-group="gallery" href="images/fp3.jpg"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
													<li><a href="javascript:;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="mj_feature_product_data">
										<p><a href="product_single.html">Mango Blue Striped Cotton Shirt for Women</a></p>
										<del>$58.30</del> <span>$40.25</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="mj_feature_product">
									<div class="mj_feature_product_img">
										<img src="images/fp4.jpg" class="img-responsive" alt="">
										<div class="mj_feature_product_overlay">
											<div class="mj_feature_product_btn">
												<a href="product.html">view all</a>
											</div>
											<div class="mj_feature_product_box">
												<ul>
													<li><a href="javascript:;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
													<li><a class="fancybox" data-fancybox-group="gallery" href="images/fp4.jpg"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
													<li><a href="javascript:;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="mj_feature_product_data">
										<p><a href="product_single.html">Jack Jones Blue Solid Slim Fit Casual Shirt</a></p>
										<del>$16.00</del> <span>$20.50</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="mj_feature_product">
									<div class="mj_feature_product_img">
										<img src="images/fp5.jpg" class="img-responsive" alt="">
										<div class="mj_feature_product_overlay">
											<div class="mj_feature_product_btn">
												<a href="product.html">view all</a>
											</div>
											<div class="mj_feature_product_box">
												<ul>
													<li><a href="javascript:;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
													<li><a class="fancybox" data-fancybox-group="gallery" href="images/fp5.jpg"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
													<li><a href="javascript:;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="mj_feature_product_data">
										<p><a href="product_single.html">Fabels by Fabindia Red Embroidered Shirt</a></p>
										<del>$46.00</del> <span>$35.55</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="mj_feature_product">
									<div class="mj_feature_product_img">
										<img src="images/fp6.jpg" class="img-responsive" alt="">
										<div class="mj_feature_product_overlay">
											<div class="mj_feature_product_btn">
												<a href="product.html">view all</a>
											</div>
											<div class="mj_feature_product_box">
												<ul>
													<li><a href="javascript:;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
													<li><a class="fancybox" data-fancybox-group="gallery" href="images/fp6.jpg"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
													<li><a href="javascript:;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="mj_feature_product_data">
										<p><a href="product_single.html">Mango Blue Striped Cotton Shirt for Women</a></p>
										<del>$58.30</del> <span>$40.25</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="mj_feature_product">
									<div class="mj_feature_product_img">
										<img src="images/fp7.jpg" class="img-responsive" alt="">
										<div class="mj_feature_product_overlay">
											<div class="mj_feature_product_btn">
												<a href="product.html">view all</a>
											</div>
											<div class="mj_feature_product_box">
												<ul>
													<li><a href="javascript:;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
													<li><a class="fancybox" data-fancybox-group="gallery" href="images/fp7.jpg"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
													<li><a href="javascript:;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="mj_feature_product_data">
										<p><a href="product_single.html">Jack Jones Blue Solid Slim Fit Casual Shirt</a></p>
										<del>$16.00</del> <span>$20.50</span>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="mj_woocommerce_sidebar_wrapper">
						<aside class="woocommerce widget widget_recent_view">
                            <h4 class="widget-title"> r<span>ecent</span> v<span>iew</span></h4>
							<div class="mj_lntoffer_wrapper">
								<div class="mj_lntoffer_img">
									 <a href="product_single.html"><img src="images/rvsb1.jpg" class="img-responsive" alt=""></a>
								</div>
								<div class="mj_lntoffer_info">
									<p><a href="product_single.html">Colorfull Baby Frock for Woman</a></p>
									<del>$54.00</del> <span>$45.15</span>
								</div>
							</div>
							<div class="mj_lntoffer_wrapper">
								<div class="mj_lntoffer_img">
									<a href="product_single.html"><img src="images/rvsb2.jpg" class="img-responsive" alt=""></a>
								</div>
								<div class="mj_lntoffer_info">
									<p><a href="product_single.html">White Pointed Scarf for Woman</a></p>
									<del>$72.00</del> <span>$58.10</span>
								</div>
							</div>
							<div class="mj_lntoffer_wrapper">
								<div class="mj_lntoffer_img">
									<a href="product_single.html"><img src="images/rvsb3.jpg" class="img-responsive" alt=""></a>
								</div>
								<div class="mj_lntoffer_info">
									<p><a href="product_single.html">Red Party Wear Gown for Woman</a></p>
									<del>$35.70</del> <span>$50.00</span>
								</div>
							</div>
						</aside>
                        <aside class="woocommerce widget widget_categories">
                            <h4 class="widget-title"> c<span>ategory</span></h4>
                            <ul>
                                <li><a href="#"> Men’s Fashion <span>(56)</span></a></li>
                                <li><a href="#"> Women’s Fashion <span>(39)</span></a></li>
                                <li><a href="#"> Foot wear <span>(25)</span></a></li>
                                <li><a href="#"> Watches <span>(79)</span></a></li>
                                <li><a href="#"> Clothes <span>(17)</span></a></li>
                                <li><a href="#"> SunGlasses <span>(83)</span></a></li>
                            </ul>
                        </aside>
                        <aside class="woocommerce widget widget_tag_cloud">
                            <h4 class="widget-title"> p<span>roduct</span> t<span>ages</span></h4>
                            <a href="#">Black</a> <a href="#">Summer</a> <a href="#">Accessories</a> <a href="#">Kids</a> <a href="#">Beauty</a> <a href="#">Men Shoes</a> <a href="#">Jewellery</a> <a href="#">Sports</a> <a href="#">Women Clothing</a> <a href="#">home</a>
						</aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="mj_transprentbg mj_toppadder80 mj_bottompadder60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_our_partner">
                        <ul>
                            <li><a href="javascript:;"><img src="images/prtnr1.jpg" alt=""></a></li>
                            <li><a href="javascript:;"><img src="images/prtnr2.jpg" alt=""></a></li>
                            <li><a href="javascript:;"><img src="images/prtnr3.jpg" alt=""></a></li>
                            <li><a href="javascript:;"><img src="images/prtnr4.jpg" alt=""></a></li>
                            <li><a href="javascript:;"><img src="images/prtnr5.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_top_footer mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="mj_weight_wrapper mj_bottompadder20">
                        <a href="index.html"><img src="images/logo.png" class="img-responsive" alt="">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad minim veniam. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
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
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="mj_weight_wrapper mj_bottompadder20">
						<h4>Our Services</h4>
						<div class="mj_footer_links">
							<ul>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Men’s Fashion</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Women’s Fashion</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foot wear</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Watches</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Clothes</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> SunGlasses</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="mj_weight_wrapper mj_bottompadder20">
						<h4>Useful Links</h4>
						<div class="mj_footer_links">
							<ul>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Return Policy</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Terms and Conditions</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Order Tracking</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shipping info</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Affiliates</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="mj_weight_wrapper mj_bottompadder20">
						<h4>Contact us</h4>
						<div class="mj_footer_links">
							<ul>
								<li><p><i class="fa fa-map-marker" aria-hidden="true"></i> 6263 Elizabeth Street Gwynn Oak, MD 21207</p></li>
								<li><p><i class="fa fa-phone" aria-hidden="true"></i> <span>+1-202-555-0193</span> <span>202-555-0193</span></p></li>
								<li><p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">info@meshjobs.com</a></p></li>
							</ul>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
	<div class="mj_bottom_footer mj_toppadder40 mj_bottompadder40">
        <div class="container">
            <div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p>© 2016 <a href="javascript:;">meshjobs</a> Inc. Designed by themefire</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<ul>
						<li><a href="javascript:;"><img src="images/foot_img1.jpg"></a></li>
						<li><a href="javascript:;"><img src="images/foot_img2.jpg"></a></li>
						<li><a href="javascript:;"><img src="images/foot_img3.jpg"></a></li>
						<li><a href="javascript:;"><img src="images/foot_img4.jpg"></a></li>
						<li><a href="javascript:;"><img src="images/foot_img5.jpg"></a></li>
					</ul>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/product_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:58 GMT -->
</html>