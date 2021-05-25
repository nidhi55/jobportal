<!DOCTYPE html>
<!-- 
Template Name: MeshJobs Multipurpose Responsive HTML Template
Version: 1.1
Author: DigiSamaritan674.5 * 539.59
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
	<?php include 'connect.php'; ?>
</body>
<div class="mj_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="mj_logo">
                        <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="logo">
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
                            <li <?php if($pagenm=="home"){?>class="active"<?php } ?>><a href="index.php">home</a>
                            </li>
                            <li <?php if ($pagenm=="jobs") { ?> class="active"
                               
                            <?php } ?>><a href="jobs.php">Jobs</a>
                               <!-- <ul class="sub_menu">
                                    <li><a href="jobs.php">Jobs</a>
                                    </li>-->
                                    <!--<li><a href="jobs_location.php">location</a>
                                    </li>
                                    <li><a href="job_detail.php">Job Detail</a>
                                    </li>-->
                                <!--</ul>--><?php
                                if(isset($_SESSION['comp_user']))
                                { ?>
                                    </li>
                                    <li <?php if ($pagenm=="post_job") { ?> class="active"
                               
                            <?php } ?>><a href="post_job.php">Post a Job</a>
                            </li><?php }  ?> 
                            <?php
                                if (isset($_SESSION['user'])) {
                                
                                }
                             if(!isset($_SESSION['comp_user']) AND !isset($_SESSION['user']))
                                { ?>
                                    </li>
                                    <li><a href="login.php">Post a Job</a>
                            </li><?php }  ?>

                        </li>
                        <?php if (isset($_SESSION['user'])) {
                        ?>
                        <li<?php if ($pagenm=="myjob") {?>
                            class="active"
                        <?php }?>> 
                            <a href="myjob.php">My status</a>
                        </li>
                    <?php } ?>
                              
                              <?php  
                                    
                                    if (!isset($_SESSION['user']) AND !isset($_SESSION['comp_user'])) {
                                    	?><li><a href="login.php" >Candidates</a>
                                <!--<ul class="sub_menu">
                                    <li><a href="login.php">Candidates</a>
                                    </li>
                                    <li><a href="login.php">Candidate detail</a>
                                    </li>
                                </ul>--><?php
                                    }
                                    if (isset($_SESSION['user'])) {
                                    	
                                    }
                                    if (isset($_SESSION['comp_user'])) {
                                    	# code...
                                    
                               ?>

                            <li <?php 
                            if ($pagenm=="candidates") { ?> class="active"
                               
                            <?php } ?>><a href="candidates.php" >Candidates</a>
                                <!--<ul class="sub_menu">
                                    <li><a href="candidates.php">Candidates</a>
                                    </li>
                                    <li><a href="candidates_detail.php">Candidate detail</a>
                                    </li>
                                </ul>-->
                            </li>
                        <?php } ?>
                        <li <?php if ($pagenm=="contact") {?> class="active" <?php } ?>
                            
                        ><a href="contact.php">Contact Us</a></li>
                            <li<?php if ($pagenm=="pages") { ?> class="active"
                               
                            <?php } ?>>
                                                        </li></ul>
                        <ul class="nav navbar-nav navbar-right mj_right_menu mj_withoutlogin_menu">
                            
                            <li>
                                <?php if(!isset($_SESSION['user']) AND !isset($_SESSION['comp_user']))  {
                                        ?>
                                <a href="signup.php"><i class="fa fa-lock"></i> Sign Up</a>
                                <?php } ?>
                            </li>

                            <li>
                                <?php if(!isset($_SESSION['user']) AND !isset($_SESSION['comp_user']))  {
                                        ?>
                                <a class="mj_logintoggle" onclick="show_my_div('my_profile_div_login' , 'id')"><i class="fa fa-user"></i> Login</a>



                            <?php } ?>
                            </li>
                            <li>
                                <?php if(isset($_SESSION['comp_user']) OR isset($_SESSION['user'])) {
                                ?><a href="logout.php"><i class="fa fa-sign-out"></i>Log out</a>
                            <?php }?>
                        </li>
                        </ul>
                        <div class="mj_profilediv" id="my_profile_div_login">
                            <form method="POST" action="login_process.php">
                            	<!--<div class="form-group">
                            		<input type="radio" name="r1" value="1">company<br><input type="radio" name="r1" value="2">employe</p>
                            	</div>-->
                                <div class="form-group">
                                    <select  name="r1" class="form-control" required=""> 
                                        <option >Select</option>
                                        <option value="1">Company</option>
                                        <option value="2">Candidate</option>
                                    </select>
                                   
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" name="email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" name="password" class="form-control" required="">
                                </div>
                                <div style="font-size: 16px; float: left; margin-left: 22px; color:#fecb16;">	
                                    <a href="forgot.php?<?php echo""; ?>">Forgot Password</a>
                                </div>
                                <div class="form-group mj_showmore">
                                 <input type="submit" value="Login" class="mj_showmore mj_greenbtn" name="login" onclick="javascript:myfun()"> 
                                 
                             </div>
                            </form>
                             <script type="text/javascript">
                               function myfun()
                               {
                               	swal("Good job!", "You Logged in Successfull!", "success");
		  	  	 			   }
                             </script>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>