<?php
include 'connect.php';
$pagenm="post_job"; 
session_start();
if (!isset($_SESSION['comp_user'])) 
{
    header("location:index.php");
}
$cid=$_SESSION['comp_user'];
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/post_job.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:40 GMT -->
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
   
   ?>
   <?php 
    $stmt6=$conn->prepare("select block_st from comp_user where id=:id");
    $stmt6->bindparam(':id',$cid); 
    $stmt6->execute();
    $res6=$stmt6->fetchAll(PDO::FETCH_ASSOC);
    foreach ($res6 as $val6) {
	    $a=1;
		if($a==$val6['block_st']){
			 $c=1;	
			 header("location:index.php?bl=$c");
		}else{		
		include 'header.php';
		?>
		    <div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
		                    <div class="mj_mainheading mj_toppadder50 mj_bottompadder50">
		                        <h1>P<span>ost</span> <span>a</span> J<span>ob</span></h1>
		                        <p class="mj_bottompadder20"><strong class="mj_black_text">Have an Account?</strong> If you don’t have an account you can create one below by entering your email address/username. A password will be automatically emailed to you. </p>
		                       <!-- <a href="#" class="mj_mainbtn mj_btnblue" data-text="Sign In"><span>sign in</span></a>-->
		                        <a data-target="#myModal1" data-toggle="modal" data-text="Add category" class="mj_mainbtn mj_btnblue"><span>Add category</span></a>
		                                <div class="modal fade" id="myModal1" role="dialog">
		                                        <div class="modal-dialog">
		                                        <form action="addcategory_process.php" method="post">
		                                          <!-- Modal content-->
		                                         <div class="modal-content">
		                                            
		                                            <div class="modal-header">
		                                                Add category
		                                               <label  class="close btn btn-default" data-dismiss="modal">&times;</label> 
		                                            </div>
		                                            <div class="modal-body">
		                                                <input type="text" name="cate" required="true">
		                                            </div>
		                                            <div class="modal-footer">
		                                                <button type="Submit" class="btn btn-default">Submit</button>
		                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		                                                <!--<label class="btn btn-default" data-dismiss="modal">Cancel</label>-->
		                                            </div>
		                                        
		                                          </div>
		                                          </form>
		                                        </div>
		                                </div>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                    <div class="mj_postdiv mj_shadow_yellow mj_postpage mj_toppadder50 mj_bottompadder50">
		                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
		                            <form method="POST" action="postjob_process.php">
		                                
		                                <div class="form-group">
		                                    <label>Job Title</label>
		                                    <input type="text" class="form-control" placeholder="Job Title" name="job_title" required="true">
		                                </div>
		                                
		                                <div class="form-group">
		                                    <label>Job Region</label>
		                                    <select name="city" class="custom-select" required="true">
		                                        <option selected="true" disabled="true">City</option>
		                                        <option>Mumbai</option>
		                                        <option>Baroda</option>
		                                        <option>Delhi</option>
		                                        <option>Pune</option>
		                                         <option>Bengaluru</option>
		                                        <option>Chennai</option>
		                                    </select>
		                                </div>
		                                <div class="form-group">
		                                    <label>Job type</label>
		                                    <select name="type" class="custom-select" required="true">
		                                        <option selected="true" disabled="true">Job type</option>
		                                        <option>full time</option>
		                                        <option>part time</option>
		                                    </select>
		                                </div>
		                                <div class="form-group">
		                                    <label>Job category</label>

		                                    <select name="category" class="custom-select" required="true">
		                                        <option selected="true" disabled="true">Category</option>
		                                        <?php
		                                                $stmt= $conn->prepare("select *from category");
		                                                $stmt->execute();
		                                                $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		                                                foreach ($result as $value) {?>
		                                        <option><?php echo $value['name'];  ?></option>
		                                      <?php } ?>
		                                    </select>
		                                    
		                                </div>

		                                <div class="form-group">
		                                    <label>Approximate Salary</label>
		                                    <input type="number" class="form-control" placeholder="Approximate Salary" name="salary" required="true">
		                                </div>
		                                
		                                <div class="form-group">
		                                    <label>Qulification</label>
		                                    <input type="text" class="form-control" placeholder="Qulification" name="qul" required="true">
		                                </div>
		                                                                
		                                <div class="form-group">
		                                    <label>Experience</label>
		                                    <select name="exp" class="custom-select" required="true">
		                                        <option disabled="true" selected="true">Experience</option>
		                                        <option>0-1 year</option>
		                                        <option>2-4 year</option>
		                                        <option>4-8 year</option>
		                                        <option>8+ year</option>
		                                    </select>
		                                </div>  
		                                <div class="form-group">
		                                    <label>Description</label>
		                                    <textarea class="form-control" rows="4" cols="60" name="desc" required="true">
		                                        
		                                    </textarea>
		                                </div>
		                                
		                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		                                    <div class="row">
		                                        <div class="form-group">
		                                            <label>Closing Date
		                                            </label>
		                                            <div class="mj_datepicker">
		                                                <input type="text" class="form-control" name="cdate" id="datepicker" required="true">
		                                            </div>
		                                            <p>Deadline for new applicants.</p>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		                                    <div class="row">
		                                        <div class="mj_middileborder"></div>
		                                    </div>
		                                </div>
		                                <!--<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mj_bottompadder20">
		                                    <div class="row">
		                                        <h3>Company Details</h3>
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <label>Company Name</label>
		                                    <input type="text" class="form-control" placeholder="Enter the Name of the Company">
		                                </div>
		                                <div class="form-group">
		                                    <label>Tagline <span>(optionnal)</span>
		                                    </label>
		                                    <input type="text" class="form-control" placeholder="Briefly Describe your Company">
		                                </div>
		                                <div class="form-group">
		                                    <label>Description <span>(optionnal)</span>
		                                    </label>
		                                    <textarea id="editor2" class="form-control"></textarea>
		                                </div>
		                                <div class="form-group">
		                                    <label>Video <span>(optionnal)</span>
		                                    </label>
		                                    <input type="text" class="form-control" placeholder="Alink to a video about your company">
		                                </div>
		                                <div class="form-group">
		                                    <label>website <span>(optionnal)</span>
		                                    </label>
		                                    <input type="text" class="form-control" placeholder="http://">
		                                </div>
		                                <div class="form-group">
		                                    <label>facebook <span>(optionnal)</span>
		                                    </label>
		                                    <input type="text" class="form-control" placeholder="username">
		                                </div>
		                                <div class="form-group">
		                                    <label>google+ <span>(optionnal)</span>
		                                    </label>
		                                    <input type="text" class="form-control" placeholder="username">
		                                </div>
		                                <div class="form-group">
		                                    <label>linkedin <span>(optionnal)</span>
		                                    </label>
		                                    <input type="text" class="form-control" placeholder="username">
		                                </div>
		                                <div class="form-group">
		                                    <label>twitter <span>(optionnal)</span>
		                                    </label>
		                                    <input type="text" class="form-control" placeholder="username">
		                                </div>-->
		                                <div class="form-group">
		                                    <!--<label>logo <span>(optionnal)</span>
		                                    </label>-->
		                                    <!--<img src="images/envato_logo.png" class="img-responsive" alt="">
		                                    <a href="#" class="mj_removefile"><i class="fa fa-times"></i> remove</a>-->
		                                    <!--<a href="#" class="mj_mainbtn mj_btngray" data-text="Choose File"><span>choose file</span></a>-->
		                                   
		                        
		                        </div>
		                    </div>
		                    <input type="submit" value="submit" class="mj_showmorebtn mj_bigbtn mj_yellowbtn"> </form>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
	<?php 
		include 'footer.php';
		}
	}
	?>
    <?php
    
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/post_job.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:44 GMT -->
</html>