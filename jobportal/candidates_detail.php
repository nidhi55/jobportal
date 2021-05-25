<?php  $pagenm="candidates";?>
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
    <!--Loader Start --
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
    -Loader End -->
    <?php
    session_start();
     include 'connect.php';
     include 'header.php';
     if (isset($_GET['uid'])) {
            $uid=$_GET['uid'];
            $jid=$_GET['jid'];
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
                                    
                                    $stmt= $conn->prepare("select * from user where uid=:jid");
                                     $stmt->bindparam(':jid',$uid);  
                                    $stmt->execute();
                                    $result=$stmt->fetch();    
                                        //$cid=$result['compid'];   
                                       // $stmt1= $conn->prepare("select *from comp_user where id=:cid");
                                     //$stmt1->bindparam(':cid',$cid);  
                                    //$stmt1->execute();
                                    //$result1=$stmt1->fetch();       
                                                           
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="mj_joblogo">
                                        <img src="images/users/<?php echo $result['photo']; ?>" class="img-circle" alt="" style="max-height: 250px; min-height: 250px; min-width: 250px; max-width: 250px;">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="mj_pageheading mj_toppadder50">
                                        <h1><?php echo $result['name']; ?></h1>
                                        <ul>
                                            <li>
                                                <label><i class="fa fa-map-marker"></i>
                                                </label><a href="#"><?php echo $result['city']; ?></a>
                                            </li>
                                            <li>
                                                <label>Classification:</label><a href="#"><?php echo $result['qualification']; ?></a>
                                            </li>
                                            <!--<li>
                                                <label>Hourly Rate: </label><span class="mj_green_text">$40.00/hr</span>
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
                    <div class="mj_social_media_section mj_candidatepage_media mj_toppadder40 mj_bottompadder40">
                        <ul>
                            <!--<li><a href="contact.php" class="mj_mainbtn mj_btnblue" data-text="Contact Candidate"><span>Contact Candidate</span></a>
                            </li>-->
                            <li><a class="mj_mainbtn mj_btnred" data-text="Candidate Detail"><span>Candidate Detail</span></a>
                            </li>
                        </ul>
                        <?php $stmt1=$conn->prepare("select * from applied_user where job_id=:a AND user_id=:b");
                                        $stmt1->bindparam(':a',$jid);
                                        $stmt1->bindparam(':b',$uid);
                                        $stmt1->execute();
                                        $result1=$stmt1->fetch(); ?>
                                        
                        <p><a href="images/resume/<?php echo $result1['resume_nm']; ?>"><i class="fa fa-download"></i></a>
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
                                    <label>Email</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['mobileno']; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Passing Year</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['passingyear']; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
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
                                </div>-->
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Education</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <p><?php echo $result['qualification']; ?></p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Date of Birth</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv mj_bottompadder30">
                                       <p><?php echo $result['dob']; ?></p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder30 mj_bottompadder30">
                                    <div class="mj_divider"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <label>Download Resume</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="mj_detaildiv">
                                        <?php $stmt1=$conn->prepare("select * from applied_user where job_id=:a AND user_id=:b");
                                        $stmt1->bindparam(':a',$jid);
                                        $stmt1->bindparam(':b',$uid);
                                        $stmt1->execute();
                                        $result1=$stmt1->fetch(); ?>
                                        <a class="mj_btn mj_orangebtn try" href="images/resume/<?php echo $result1['resume_nm']; ?>">Resume</a>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/candidates_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:45 GMT -->
</html>