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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/shop_index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:32 GMT -->
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
    ?>
	<div class="clearfix"></div>
    <div class="mj_shop_slider">
		<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
				<ul>	<!-- SLIDE  -->
					<li data-index="rs-1" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/homeslider_thumb3.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
						<!-- MAIN IMAGE -->
						<img src="images/sliderbg3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYER NR. 1 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.3" 
									 data-x="['left','left','left','center']" data-hoffset="['524','524','324','100']" 
									data-y="['top','top','top','top']" data-voffset="['190','190','190','110']" 
												data-fontsize="['60','50','40','30']"
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
									
									style="z-index: 5; white-space: nowrap;">Winter Collecions 
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.4" 
									  data-x="['left','left','left','center']" data-hoffset="['524','524','324','100']" 
									data-y="['top','top','top','top']" data-voffset="['140','140','140','80']" 
									 data-fontsize="['30','20','20','18']"
									data-lineheight="['50','40','30','30']"
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

									
									style="z-index: 6; white-space: nowrap;">Women’s Fashion 
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption Photography-Textblock   tp-resizeme" 
									 id="slide-24-layer-8" 
									 data-x="['left','left','left','center']" data-hoffset="['524','524','324','160']"
									 data-y="['top','top','top','top']" data-voffset="['270','270','270','170']" 
												data-width="350"
									data-height="150"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
									 data-transform_out="opacity:0;s:2000;e:Power4.easeIn;s:2200;e:Power4.easeIn;" 
									data-start="2200" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.01" 
									
									style="z-index: 7; min-width: 350px; max-width: 350px; max-width: 150px; max-width: 150px; white-space: normal; font-size: 18px; line-height: 25px;font-family: 'FiraSans-ExtraLight';">Amazing Offers upto 50%
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption Feature-Tour rev-btn  rs-parallaxlevel-0" 
									 id="slide-92-layer-26" 
									 data-x="['right','right','right','center']" data-hoffset="['590','350','400','-140']" 
									 data-y="['top','top','top','top']" data-voffset="['378','378','378','250']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(114, 168, 0, 1.00);cursor:pointer;"
						 
									 data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
									data-start="3000" 
									data-splitin="none" 
									data-splitout="none" 
									data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 10; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">View All 
								</div>
								<!-- LAYER NR. 5 -->
								<div class="tp-caption Feature-Examples rev-btn  rs-parallaxlevel-0" 
									 id="slide-92-layer-27" 
									 data-x="['left','left','left','center']" data-hoffset="['680','680','400','130']" 
									 data-y="['top','top','top','top']" data-voffset="['379','379','379','250']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(0, 154, 238, 1.00);bc:rgba(0, 154, 238, 1.00);cursor:pointer;"
						 
									 data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
									data-start="3000" 
									data-splitin="none" 
									data-splitout="none" 
									data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 9; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Shop Now
								</div>
							</li>
							<li data-index="rs-2" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/homeslider_thumb4.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
								<!-- MAIN IMAGE -->
						<img src="images/sliderbg4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYER NR. 1 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.3" 
									 data-x="['left','left','left','center']" data-hoffset="['524','524','324','100']" 
									data-y="['top','top','top','top']" data-voffset="['190','190','190','110']" 
												data-fontsize="['60','50','40','30']"
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
									
									style="z-index: 5; white-space: nowrap;">Winter Collecions 
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.4" 
									  data-x="['left','left','left','center']" data-hoffset="['524','524','324','100']" 
									data-y="['top','top','top','top']" data-voffset="['140','140','140','80']" 
									 data-fontsize="['30','20','20','18']"
									data-lineheight="['50','40','30','30']"
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

									
									style="z-index: 6; white-space: nowrap;">Men’s Fashion 
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption Photography-Textblock   tp-resizeme" 
									 id="slide-24-layer-8" 
									 data-x="['left','left','left','center']" data-hoffset="['524','524','324','160']"
									 data-y="['top','top','top','top']" data-voffset="['270','270','270','170']" 
												data-width="350"
									data-height="150"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
									 data-transform_out="opacity:0;s:2000;e:Power4.easeIn;s:2200;e:Power4.easeIn;" 
									data-start="2200" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.01" 
									
									style="z-index: 7; min-width: 350px; max-width: 350px; max-width: 150px; max-width: 150px; white-space: normal; font-size: 18px; line-height: 25px;font-family: 'FiraSans-ExtraLight';">Amazing Offers upto 30%
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption Feature-Tour rev-btn  rs-parallaxlevel-0" 
									 id="slide-92-layer-26" 
									 data-x="['right','right','right','center']" data-hoffset="['590','350','400','-140']" 
									 data-y="['top','top','top','top']" data-voffset="['378','378','378','250']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(114, 168, 0, 1.00);cursor:pointer;"
						 
									 data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
									data-start="3000" 
									data-splitin="none" 
									data-splitout="none" 
									data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 10; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">View All 
								</div>
								<!-- LAYER NR. 5 -->
								<div class="tp-caption Feature-Examples rev-btn  rs-parallaxlevel-0" 
									 id="slide-92-layer-27" 
									 data-x="['left','left','left','center']" data-hoffset="['680','680','400','130']" 
									 data-y="['top','top','top','top']" data-voffset="['379','379','379','250']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(0, 154, 238, 1.00);bc:rgba(0, 154, 238, 1.00);cursor:pointer;"
						 
									 data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
									data-start="3000" 
									data-splitin="none" 
									data-splitout="none" 
									data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 9; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Shop Now
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
	<div class="mj_lightgraytbg mj_toppadder60 mj_bottompadder80">
        <div class="container">
            <div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<a href="javascript:;">
						<div class="mj_basic_services_wrapper mj_green_box mj_toppadder30 mj_bottompadder30">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
							<p>Clearance Sale</p>
							<span>Buy anything, be happy, shop</span>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<a href="javascript:;">
						<div class="mj_basic_services_wrapper mj_blue_box mj_toppadder30 mj_bottompadder30">
							<i class="fa fa-undo" aria-hidden="true"></i>
							<p>Free Returns</p>
							<span>Within 30 days of purchase</span>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<a href="javascript:;">
						<div class="mj_basic_services_wrapper mj_orange_box mj_toppadder30 mj_bottompadder30">
							<i class="fa fa-cart-plus" aria-hidden="true"></i>
							<p>New Arrivals</p>
							<span>Get upto 50% discounts on items</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="mj_lightgraytbg mj_bottompadder90">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="mj_mainheading mj_side_heading mj_bottompadder50">
                        <h2>f<span>eature</span> p<span>roducts</span></h2>
						<p>New Arrivals of this Month</p>
                    </div>
				</div>
			</div>
			<div class="row">
                <div class="mj_feature_product_slider">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_feature_product">
                                    <div class="mj_feature_product_img">
                                        <img src="images/fp1.jpg" class="img-responsive" alt="">
                                        <div class="mj_feature_product_overlay">
                                            <div class="mj_feature_product_btn">
												<a href="product.php">view all</a>
											</div>
											<div class="mj_feature_product_box">
												<ul>
													<li><a href="javascript:;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
													<li><a class="fancybox" data-fancybox-group="gallery" href="images/fp1.jpg"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
													<li><a href="javascript:;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
                                        </div>
                                    </div>
                                    <div class="mj_feature_product_data">
                                        <p><a href="product_single.php">Black Panther Pure Cotton Shirt for Men</a></p>
										<del>$36.00</del> <span>$25.55</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_feature_product">
                                    <div class="mj_feature_product_img">
                                        <img src="images/fp2.jpg" class="img-responsive" alt="">
                                        <div class="mj_feature_product_overlay">
                                            <div class="mj_feature_product_btn">
												<a href="product.php">view all</a>
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
                                        <p><a href="product_single.php">Fabels by Fabindia Red Embroidered Shirt</a></p>
										<del>$46.00</del> <span>$35.55</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_feature_product">
                                    <div class="mj_feature_product_img">
                                        <img src="images/fp3.jpg" class="img-responsive" alt="">
                                        <div class="mj_feature_product_overlay">
                                            <div class="mj_feature_product_btn">
												<a href="product.php">view all</a>
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
                                        <p><a href="product_single.php">Mango Blue Striped Cotton Shirt for Women</a></p>
										<del>$58.30</del> <span>$40.25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_feature_product">
                                    <div class="mj_feature_product_img">
                                        <img src="images/fp4.jpg" class="img-responsive" alt="">
                                        <div class="mj_feature_product_overlay">
                                            <div class="mj_feature_product_btn">
												<a href="product.php">view all</a>
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
                                        <p><a href="product_single.php">Jack Jones Blue Solid Slim Fit Casual Shirt</a></p>
										<del>$16.00</del> <span>$20.50</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_feature_product">
                                    <div class="mj_feature_product_img">
                                        <img src="images/fp5.jpg" class="img-responsive" alt="">
                                        <div class="mj_feature_product_overlay">
                                            <div class="mj_feature_product_btn">
												<a href="product.php">view all</a>
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
                                        <p><a href="product_single.php">Fabels by Fabindia Red Embroidered Shirt</a></p>
										<del>$46.00</del> <span>$35.55</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_feature_product">
                                    <div class="mj_feature_product_img">
                                        <img src="images/fp6.jpg" class="img-responsive" alt="">
                                        <div class="mj_feature_product_overlay">
                                            <div class="mj_feature_product_btn">
												<a href="product.php">view all</a>
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
                                        <p><a href="product_single.php">Black Panther Pure Cotton Shirt for Men</a></p>
										<del>$36.00</del> <span>$25.55</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_feature_product">
                                    <div class="mj_feature_product_img">
                                        <img src="images/fp7.jpg" class="img-responsive" alt="">
                                        <div class="mj_feature_product_overlay">
                                            <div class="mj_feature_product_btn">
												<a href="product.php">view all</a>
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
                                        <p><a href="product_single.php">Jack Jones Blue Solid Slim Fit Casual Shirt</a></p>
										<del>$16.00</del> <span>$20.50</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mj_feature_product">
                                    <div class="mj_feature_product_img">
                                        <img src="images/fp3.jpg" class="img-responsive" alt="">
                                        <div class="mj_feature_product_overlay">
                                            <div class="mj_feature_product_btn">
												<a href="product.php">view all</a>
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
                                        <p><a href="product_single.php">Mango Blue Striped Cotton Shirt for Women</a></p>
										<del>$58.30</del> <span>$40.25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>

		</div>
	</div>
	 <div class="mj_transprentbg mj_toppadder90 mj_bottompadder90">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="mj_mainheading mj_side_heading mj_bottompadder50">
                        <h2>p<span>roducts</span> <span>by</span> c<span>ategory</span></h2>
						<p>New Arrivals of this Month</p>
                    </div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="mj_product_categori_img">
						<a href="javascript:;"><img src="images/pro_cat1.jpg" class="img-responsive" alt=""></a>
						<a href="javascript:;"><img src="images/pro_cat2.jpg" class="img-responsive" alt=""></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="mj_product_categori_img">
						<a href="javascript:;"><img src="images/pro_cat3.jpg" class="img-responsive" alt=""></a>
						<a href="javascript:;"><img src="images/pro_cat4.jpg" class="img-responsive" alt=""></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="mj_product_categori_img">
						<a href="javascript:;"><img src="images/pro_cat5.jpg" class="img-responsive" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="mj_hotdeals_section mj_toppadder100 mj_bottompadder100">
        <div class="mj_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_whiteheading mj_offers_heading mj_bottompadder50">
                        <h1>h<span>ot</span> d<span>eals</span> <span>of</span> <span>this</span> m<span>onths</span></h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="mj_clearence">
                        <p>Amazing 2015 Clearance Sales upto 90% OFF</p>
						<a href="javascript:;">view all</a>
                    </div>
                </div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="mj_newarrivals">
                        <p>Best new Arrivals of 2016 with 50% OFF</p>
						<a href="javascript:;">view all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="mj_lightgraytbg">
		<div class="container">
            <div class="row">
				<div class="mj_showmore mj_hotdeals_section_btn">
					<a href="#" class="mj_showmorebtn mj_bigbtn mj_greenbtn">See All Discounts and Offers From Our Store Now!</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="mj_mainheading mj_bottompadder50">
                        <h3>l<span>atest</span> p<span>roducts</span></h3>
                    </div>
					<div class="mj_lntoffer_wrapper">
						<div class="mj_lntoffer_img">
							 <a href="product_single.php"><img src="images/lnt1.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="mj_lntoffer_info">
							<p><a href="product_single.php">Colorfull Baby Frock for Woman</a></p>
							<del>$54.00</del> <span>$45.15</span>
						</div>
					</div>
					<div class="mj_lntoffer_wrapper">
						<div class="mj_lntoffer_img">
							<a href="product_single.php"><img src="images/lnt2.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="mj_lntoffer_info">
							<p><a href="product_single.php">Red Party Wear Gown for Woman</a></p>
							<del>$35.70</del> <span>$50.00</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="mj_mainheading mj_bottompadder50">
                        <h3>b<span>est</span> s<span>ellers</span></h3>
                    </div>
					<div class="mj_lntoffer_wrapper">
						<div class="mj_lntoffer_img">
							<a href="product_single.php"><img src="images/lnt3.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="mj_lntoffer_info">
							<p><a href="product_single.php">White Pointed Scarf for Woman</a></p>
							<del>$72.00</del> <span>$58.10</span>
						</div>
					</div>
					<div class="mj_lntoffer_wrapper">
						<div class="mj_lntoffer_img">
							<a href="product_single.php"><img src="images/lnt4.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="mj_lntoffer_info">
							<p><a href="product_single.php">Black Panther Pure Cotton Shirt for Men</a></p>
							<del>$23.78</del> <span>$35.40</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="mj_mainheading mj_bottompadder50">
                        <h3>u<span>pto</span> 50% o<span>ffers</span></h3>
                    </div>
					<div class="mj_lntoffer_wrapper">
						<div class="mj_lntoffer_img">
							<a href="product_single.php"><img src="images/lnt5.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="mj_lntoffer_info">
							<p><a href="product_single.php">Black Winter Breaker for Men</a></p>
							<del>$36.00</del> <span>$25.55</span>
						</div>
					</div>
					<div class="mj_lntoffer_wrapper">
						<div class="mj_lntoffer_img">
							 <a href="product_single.php"><img src="images/lnt6.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="mj_lntoffer_info">
							<p><a href="product_single.php">Black Panther Pure Cotton Shirt for Woman</a></p>
							<del>$42.35</del> <span>$31.55</span>
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
    <div class="mj_lightgraytbg mj_bottompadder80">
        <div class="container">
            <div class="row">
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
                                        <a href="blog_single.php"><i class="fa fa-angle-right"></i></a>
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
                                        <a href="blog_single.php"><i class="fa fa-angle-right"></i></a>
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
                                        <a href="blog_single.php"><i class="fa fa-angle-right"></i></a>
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
                                        <a href="blog_single.php"><i class="fa fa-angle-right"></i></a>
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
                                        <a href="blog_single.php"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <?php
    include 'footer.php';
    ?>
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
	<script type="text/javascript" src="js/plugins/rsslider/revolution.extension.actions.min.js"></script>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/shop_index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:46:54 GMT -->
</html>