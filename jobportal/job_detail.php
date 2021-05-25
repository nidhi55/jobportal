<?php $pagenm="jobs"; ?>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/job_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:31 GMT -->
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
    if (isset($_GET['jid'])) {
        $jid=$_GET['jid'];
    }
    if (isset($_GET['jobid'])) {
        $jid=$_GET['jobid'];
    }
    ?>
    
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
                                <?php
                                    
                                    $stmt= $conn->prepare("select *from post_job where id=:jid");
                                     $stmt->bindparam(':jid',$jid);  
                                    $stmt->execute();
                                    $result=$stmt->fetch();    
                                        $cid=$result['compid'];   
                                        $stmt1= $conn->prepare("select *from comp_user where id=:cid");
                                     $stmt1->bindparam(':cid',$cid);  
                                    $stmt1->execute();
                                    $result1=$stmt1->fetch();       
                                                           
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="mj_joblogo">
                                        <img src="images/users/<?php echo $result1['logo']; ?>" class="img-circle" alt="" style="max-height: 250px; min-height: 250px; min-width: 250px; max-width: 250px;">
                                         <!--<img src="images/logo1.png" class="img-responsive" alt="">-->
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="mj_pageheading mj_toppadder50">
                                        <h1><?php echo $result['title'];?></h1>
                                        <ul>
                                            <li>
                                                <label><i class="fa fa-map-marker"></i>
                                                </label><a href="#"><?php echo $result['city']; ?></a>
                                            </li>
                                            <li><a href="#" class="mj_btn mj_greenbtn"><?php echo $result['jobtype']; ?></a>
                                            </li>
                                            <li>
                                                <label>Company:</label><a href="#"><?php echo $result1['comp_nm']; ?></a>
                                            </li>
                                            <!--<li>
                                                <label>Classification:</label><a href="#"><?php //echo $result['category']; ?></a>
                                            </li>
                                            <li>
                                                <label>Salary: </label><span class="mj_green_text"><?php //echo $result['salary']; ?></span>
                                            </li>-->
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
                    <div class="mj_social_media_section mj_toppadder40 mj_bottompadder40">
                        <ul>
                            <li><a href="post_job.php" class="mj_mainbtn mj_btnblue" data-text="Post a job!"><span>post a job!</span></a>
                            </li>
                            <li><a href="contact.php" class="mj_mainbtn mj_btnyellow" data-text="Contact Now"><span>contact now</span></a>
                            </li>
                        </ul>
                        <!--<p><a href="#"><i class="fa fa-heart"></i></a>
                        </p>
                        <p><a href="#">@</a>
                        </p>
                        <p><a href="#"><i class="fa fa-print"></i></a>
                        </p>
                        <p><a href="#"><i class="fa fa-share-alt"></i></a>
                        </p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_postdiv mj_jobdetail mj_toppadder50 mj_bottompadder50">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Description</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['description']; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Qulification</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['qul']; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Experience</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['exp']; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Category</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['category']; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Video Presentation</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <div class="mj_video">
                                            <div class="mj_videodiv">
                                                <img src="images/videoimg1.jpg" class="img-responsive" alt="">
                                                <div class="mj_overlay">
                                                    <div class="mj_videooverlay_inner">
                                                        <a href="#"><i class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <iframe id="video" src="http://player.vimeo.com/video/60707752" width="1200" height="482"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>-->
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Approximate Salary</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['salary']; ?></p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Closing Date</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['closingdate']; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Contact No.</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result1['mobileno']; ?></p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Apply</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p>





                                <?php
                      if (isset($_SESSION['user'])) {
                        # code...
                        $uid=$_SESSION['user'];
                      }
                      
                     
                      $stmt2= $conn->prepare("select * from applied_user where (job_id=:jid AND user_id=:uid)");
                    $stmt2->bindparam(':jid',$jid);
                    $stmt2->bindparam(':uid',$uid);
                          $stmt2->execute();
                          $result2=$stmt2->fetch();
                           
                      if($result2){

                        ?><form method="POST" action="cancel_process.php">
                        	<input type="name" name="jobid" hidden="true" value="<?php echo $jobid; ?>">
                          <button name="cancel" class="mj_btn mj_orangebtn">Cancel</button></form>
                        <?php }
                    if(!$result2)
                    {?>
                      <button class="mj_btn mj_orangebtn try" data-toggle="modal" data-target="#myModal">Apply</button>
                  
                  </p>
                    <?php }?>
                    <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <?php if (isset($_SESSION['user'])) {

            ?>
            <form action="Resume_process.php" method="post" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Upload Your Resume</h4>
                </div>
                <div class="modal-body">

                  <p><div class="form-group">
                    <label>Write your msg</label> 
                    <textarea class="form-control" rows="4" cols="60" name="msg" placeholder="Write your msg">
                    </textarea>
                    </div>
                    <label class="mj_mainbtn mj_btnyellow" data-text="Choose Resume">Choose Resume
                        <input type="File" name="res" style="display: none;"></label>
                        <input type="hidden" name="id" value="<?php echo $jid; ?>">
                      </p>
                </div>
                <div class="modal-footer">                  
                  <p id="demo"></p>
                  <button type="Submit" class="btn btn-default">Submit</button>
              
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
              </div>
          </form>
              <?php
              }
              else if (!isset($_SESSION['user']) AND !isset($_SESSION['comp_user'])) {
              ?>
               <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Please login First</h4>
                </div>
                <div class="modal-body">
                  <p> <label><span>You want to Login?</span>
                        
                      </label></p>
                </div>
                <div class="modal-footer">
                  <a href="login.php"  class="btn btn-default">login</a>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
              </div>
              <?php 
              }else if (isset($_SESSION['comp_user'])) {
                ?><div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <!--<h4 class="modal-title">Please login First</h4>-->
                </div>
                <div class="modal-body">
                  You are not campable
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                </div>
              </div><?php
              }
            ?>
            </div>
          </div>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder30">
                    <div class="mj_about_section mj_toppadder80 mj_bottompadder80">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                                <h1>A<span>bout</span> E<span>nvato</span></h1>
                                <p>Envato is a bootstrapped Australian company that operates an ecosystem of sites with a global community. We’re passionate about the web, and about enabling creators to make a living doing what they love. At Envato, we make websites that help people from all over the world change the way they earn and learn online.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link"></i> Website</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i>facebook</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/job_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:40 GMT -->
</html>