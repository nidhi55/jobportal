<?php $pagenm="";?>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:44:36 GMT -->
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
     if (isset($_GET['pwderror'])) {
            $a=$_GET['pwderror'];
            ?><script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
            <?php 
            if ($a=="1") {
               
            ?>
            <script> 
                        swal("Oops","pls give me same password","error");
            </script><?php  
            }            
    }
    ?>
    <div class="mj_transprentbg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="mj_signup_section mj_yellow_bg">
                            <div class="mj_mainheading mj_toppadder80 mj_bottompadder30">
                                <h1>I<span>'m</span> <span>employer look-ing to hire</span></h1>
                            </div>
                            <div class="mj_blog_btn">
                                <a href="#" class="mj_mainbtn mj_btnblack" data-text="hire" data-toggle="modal" data-target="#myModal"><span>hire</span></a>
                            </div>
                            <div class="mj_signup_section_img">
                                <img src="images/signup_bg1.png" class="img-responsive" alt="hire">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="mj_signup_section mj_blue_bg">
                            <div class="mj_mainheading mj_toppadder80 mj_bottompadder30">
                                <h1>I<span>'m</span> <span>candidate looking for a job</span></h1>
                            </div>
                            <div class="mj_blog_btn">
                                <a href="#" class="mj_mainbtn mj_btnblack" data-text="work" data-toggle="modal" data-target="#myModal1"><span>work</span></a>
                            </div>
                            <div class="mj_signup_section_img">
                                <img src="images/signup_bg2.png" class="img-responsive" alt="job">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade mj_popupdesign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> c<span>lient</span> A<span>ccount</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                </div>
                <div class="modal-body">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                        <div class="row">
                            <div class="mj_pricingtable mj_yellowtable mj_createaccount_form_wrapper">
                                <!-- Nav tabs -->
                                
                                <p class="mj_toppadder40">You can also sign up with <a href="#">Facebook</a>, <a href="#">Linkedin</a>, or <a href="#">Google</a>.</p>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active">
                                        <form action="signupcomp_process.php" method="POST" enctype="multipart/form-data">
                                            <div class="mj_createaccount_form">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name" name="ur_name" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Surname" name="ur_surname" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Company Name" name="ur_company" class="form-control" required="">
                                                </div>
                                                 <div class="form-group">
                                                    <input type="text" placeholder="Mobile no" name="mo" class="form-control" required="">
                                                </div>
                                               
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email Address" name="ur_email" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                     <span class="select-wrapper" style="text-align: left; font-size: 10px;">
                                    
                                                    <select name="ur_sec_que" class="custom-select" required="" style="width: 81%;">
                                                        <option disabled="true" selected="true">Question</option>
                                                        <option>Who is your favourite hero?</option>   
                                                        <option>Which is your favourite serial/Daily Soap?</option>
                                                        <option>Which is your favourite car?</option>
                                                        <option> Which is your favourite destination?</option>
                                                        <option>Which is your favourite subject?</option>
                                                        <option>What kind of food do you like?</option>
                                                        <option>Who is your role model?</option>
                                                    </select>
                                                </div><br><br>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Answer" name="ur_ans" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" name="ur_password" class="form-control" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Confirm-Password" name="con_ur_password" class="form-control" required="">
                                                </div>
                                                <label class="mj_mainbtn mj_btnyellow" data-text="Choose Logo" ><span>choose Logo</span>
                                                    <input type="File" name="logo" style="display: none;" accept="image/x-png,image/gif,image/jpeg" requried="true">
                                                </label>
                                            </div>
                                            
                                                <input type="submit" value="Signup" class="mj_pricing_footer">
                                                
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="images/close.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade mj_popupdesign" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1"> f<span>reelancer </span> A<span>ccount</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                </div>
                <div class="modal-body">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                        <div class="row">
                            <div class="mj_pricingtable mj_bluetable mj_freelancer_form_wrapper">
                                <p class="mj_toppadder40">You can also sign up with <a href="#">Facebook</a>, <a href="#">Linkedin</a>, or <a href="#">Google</a>.</p>
                                <form action="signup_process.php" method="POST" enctype="multipart/form-data" name="f1" onsubmit="return matchpass()">
                                    <div class="mj_freelancer_form">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name" name="name" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Surname" name="surname" class="form-control" required="">
                                        </div>
                                         <div class="form-group">
                                                    <input type="text" placeholder="Mobile No" name="mo" class="form-control" onkeypress="return isNumber(event)" required="">
                                         </div>
                                         
                                           <div class="mj_datepicker">
                                                <input type="text" class="form-control" name="bdate" id="datepicker" placeholder="Date Of Birth" required="">
                                            </div><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                         <div class="form-group">
                                                    <input type="text" placeholder="Qualification" name="qualification" class="form-control" required="">
                                         </div>
                                         <div class="form-group">
                                                    <input type="text" placeholder="Passing Year" name="passingyear" class="form-control" required="">
                                         </div>
                                         
                                                                                                
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" name="email" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <select name="city" class="custom-select" required="">
                                                <option selected="true" disabled="true">City</option>
                                                <option>Mumbai</option>
                                                <option>Baroda</option>
                                                <option>Delhi</option>
                                                <option>Kolkatta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="sec_que" class="custom-select" required="">
                                                <option disabled="true" selected="true">Question</option>
                                                <option>Who is your favourite hero?</option>   
                                                <option>Which is your favourite serial/Daily Soap?</option>
                                                <option>Which is your favourite car?</option>
                                                <option> Which is your favourite destination?</option>
                                                <option>Which is your favourite subject?</option>
                                                <option>What kind of food do you like?</option>
                                                <option>Who is your role model?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Answer" name="ans" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Username" name="username" class="form-control" required="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" name="password" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Confirm-Password" name="con_password" class="form-control" required="" >
                                        </div>
                                         <label class="mj_mainbtn mj_btnblue" data-text="Choose Photo"><span>Choose Photo</span>
                                                    <input type="File" name="img" style="display: none;" accept="image/x-png,image/gif,image/jpeg" required="">
                                                </label>
                                    
                                        <?php  ?>
                                        <input type="submit" value="Signup" class="mj_pricing_footer">
                                    
                                </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="images/close.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade mj_popupdesign" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2"> l<span>ogin to my </span> A<span>ccount</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                </div>
                <div class="modal-body">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                        <div class="row">
                            <div class="mj_pricingtable mj_greentable mj_login_form_wrapper">
                                <form>
                                    <div class="mj_login_form">
                                        <div class="form-group">
                                            <input type="text" placeholder="Username or Email" id="usr_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Your Password" id="usr_password" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mj_toppadder20">
                                                <div class="form-group  pull-left">
                                                    <div class="mj_checkbox">
                                                        <input type="checkbox" value="1" id="check4" name="checkbox">
                                                        <label for="check4"></label>
                                                    </div>
                                                    <span> remember me</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mj_toppadder20">
                                                <div class="form-group pull-right">
                                                    <span><a href="#">forget password ?</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mj_pricing_footer">
                                        <a href="#">login Now</a>
                                    </div>
                                </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="images/close.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Model End-->
  
    <!-- Script Start -->
    <script type="text/javascript">  
function matchpass(){  
var firstpassword=document.f1.password.value;  
var secondpassword=document.f1.con_password.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  

else{  
alert("password must be same!");
return false;  
}  
}  
</script>  
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
    <script type="text/javascript">
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
    <!-- Script End -->
</body>


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:03 GMT -->
</html>