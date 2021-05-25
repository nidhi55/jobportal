<?php $pagenm="candidates"; ?>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:45 GMT -->
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
    session_start();
     include 'connect.php';
     include 'header.php';
     ?>
    <div class="mj_pagetitle">
        <img src="images/page_title3.jpg" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<!--<div class="mj_top_searchbox">
							<form>
								<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="All Resume">
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Any Location">
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<select name="timepass" class="custom-select">
										<option>Category</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
									<a href="#" class="mj_mainbtn mj_btnyellow" data-text="search"><span>search</span></a>
								</div>
							</form>
						</div>-->
					</div>
				</div>
			</div>
		</div>
    </div>
     
<div class="clearfix"></div>
    <div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_tabs mj_bottompadder50">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mj_joblist" role="tablist">
                            <li role="presentation" class="active"><a href="#recentjobs" aria-controls="recentjobs" role="tab" data-toggle="tab">Posted Jobs</a>
                            </li>
                          </ul>                          <!-- Tab panes -->
    

<div class="container">
            <div class="row">
        
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="recentjobs">
        <div class="mj_tabcontent mj_toppadder30">
            <table class="table table-striped">
              <?php  
            $a=$_SESSION['comp_user'];
            $stmt=$conn->prepare("select * from post_job where compid=:a");
            $stmt->bindparam(':a',$a);
            $stmt->execute();
            $count1=$stmt->rowcount();
            if ($count1) {
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $date=date("y-m-d");
            foreach ($result as $value) 
            {
                $date1=$value['closingdate'];
                if (strtotime($date)<strtotime($date1)) {
                    $id2=$value["compid"];
                    $stmt1= $conn->prepare("select * from comp_user where (id=:id)");
                    $stmt1->bindparam(':id',$id2);
                    $stmt1->execute();
                    $result1=$stmt1->fetch();
            ?>                      
           
                            <tr>
                                            <!--<td>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                            </td>-->
                                            <td>
                                                <a href="#"><img src="images/users/<?php echo $result1['logo']; ?>" alt="" class="img-circle" style="max-height: 50px; min-height: 50px; min-width: 50px; max-width: 50px;">
                                                </a>
                                            </td>
                                            <td>
                                                <?php $title=$value['id']; ?>
                                                <p style="font-size: 18px;"><a href="candidates_user.php?title=<?php echo $title; ?>" style="margin-left: 0px;"><?php echo $value['title']; ?></a></p><br/>
                                                <p style="font-size: 16px;">
                                                <?php echo $value['description']; ?>
                                                </p>
                                               
                                            </td>
                                            <td>
                                                <div class="fa fa-map-marker"></div>
                                                <?php echo $value['city']; ?>
                                            </td>
                                            <td>
                                                <p style="padding-top: 0px; font-size: 18px; color: #707070;"><?php echo $value['category']; ?></P>         
                                            </td>
                                            <td>
                                                <a class="mj_btn mj_greenbtn" style="margin-top: 0px;"><?php echo $value['jobtype']; ?></a>         
                                            </td>
                                            <td>
                                                <?php echo $value['closingdate']; ?>
                                            </td>
                                        </tr>
                             <?php  }}}else{
                                ?>
                                <label>Oops,you not post any job</label>
                                <?php
                             }?>
                </table>
        </div>
</div>

                </div>
            </div></div></div></div>
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
    <!-- Script End -->
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:45 GMT -->
</html>