<?php $pagenm="jobs"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>DreamJobs </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">
    <link href="css/main.css" rel="stylesheet" type="text/css" />
     <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
</head>

<body>
    <!--<div class="mj_preloaded">
        <div class="mj_preloader">
            <div class="lines">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>
            <div class="loading-text">LOADING</div>
        </div>
    </div>-->
   <?php
   session_start();
   include 'connect.php';
   include 'header.php';
   if(isset($_GET['blac'])){
        $a8=1;
        if ($a8==$_GET['blac']) {
            ?><script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script><?php
            ?><script type="text/javascript">
                swal("Oops","Admin Block you So you can not Apply","error");
            </script><?php
        }
    }?>

   
    <script>    if (history.pushState) {
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname;
    window.history.pushState({path:newurl},'',newurl);
}</script>
    <div class="mj_pagetitle">
        <img src="images/page_title2.jpg" alt="">
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_top_searchbox">
                        <form action="jobs.php" method="POST">
                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="city" name="city">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<select name="category" class="custom-select">
									<option disabled="true" selected="true">Category</option>
                            <?php  $stmt= $conn->prepare("select * from category"); 
                            		$stmt->execute();
                            		 $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
								    foreach ($result as $value) {	  	  	
                            		 ?>
                            		<option><?php echo $value['name'];?></option>
                            <?php	}?>
							</select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<select name="type" class="custom-select">
									<option disabled="true" selected="true">Type</option>
									<option>Part Time</option>
                            		<option>Full Time</option>
                            							
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <input type="submit" class="mj_mainbtn mj_btnyellow" value="search" name="submit"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_filter_section">
        <div class="container">
            <div class="row">
                <div class="mj_jobinfo">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="mj_showjob">
                                <p>showing <strong>Available</strong> job offers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="mj_rss_feed">
                               
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mj_tabcontent mj_bottompadder80">

                  <div clas="row">
                    <table class="table table-striped">
                        <tr>
                  <?php 
                    if(isset($_REQUEST['submit']))
                    {
                        $c="";$a="";$b="";
                        $cat="";
                        $type="";
                        $city="";
                        //$stmt1=$conn->prepare("select * from comp_user");
                       // $stmt1->execute();
                       // $result1=$stmt1->fetch();    
                        if (isset($_POST['city'])) {
                            $city=$_POST['city'];
                        }
                        if (isset($_POST['category'])) {
                            $cat=$_POST['category'];
                        }
                        if (isset($_POST['type'])) {
                            $type=$_POST['type'];
                        }
                        $s="select * from post_job where";
                        /*if ($city AND $cat AND $type) {
                            $s="select *from post_job where city=:city AND category=:cat AND jobtype=:type";
                            $a="1";$b="1";$c="1";
                        }
                        elseif ($city AND $cat) {
                            $s="select *from post_job where city=:city AND category=:cat";   
                            $a="1";$b="1";
                        }
                        elseif ($city AND $type) {
                            $s="select *from post_job where city=:city AND jobtype=:type";   
                            $a="1";$c="1";
                        }
                        elseif ($cat AND $type) {
                            $s="select *from post_job where category=:cat AND jobtype=:type";   
                            $b="1";$c="1";
                        }
                        elseif ($city) {
                            $s="select *from post_job where city=:city";   
                            $a="1";
                        }
                        elseif ($cat) {
                            $s="select *from post_job where category=:cat";   
                            $b="1";
                        }
                        elseif ($type) {
                            $s="select *from post_job where jobtype=:type";   
                            $c="1";
                        } */     
                      if (isset($_POST['city']) AND $_POST['city'] != "") {
                        
                            $city=$_POST['city'];
                            $s.=" city=:city AND";
                            $a="1";   
                        }
                        if(isset($_POST['category'])){
                            $cat=$_POST['category'];  
                            $s.=" category=:cat AND";
                            $b="1";  
                        }
                        if (isset($_POST['type'])) {
                            $type=$_POST['type'];
                            $s.=" jobtype=:type";
                            $c="1";
                        }
                      $s=rtrim($s,"AND");
                        
                        
            $stmt=$conn->prepare($s);
            if ($a=="1") {
              $stmt->bindparam(':city',$city);  
            }if ($b=="1") {
              $stmt->bindparam(':cat',$cat);  
            }                            
                        if ($c=="1") {
                            $stmt->bindparam(':type',$type);  
                        }
                        $stmt->execute();
                        $result=$stmt->fetchAll(PDO::FETCH_ASSOC); 
                    }
                    elseif (!isset($_REQUEST['submit'])) {
                        //$stmt1=$conn->prepare("select * from comp_user");
                       // $stmt1->execute();
                        //$result1=$stmt1->fetch();
                        $stmt= $conn->prepare("select * from post_job");
                        $stmt->execute();
                        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                        }

                           $date=date("y-m-d");
                            foreach ($result as $value) {
                            $stmt1=$conn->prepare("select * from comp_user where id=:id");
                            $stmt1->bindparam(':id',$value['compid']);
                            $stmt1->execute();
                            $result1=$stmt1->fetch();

                            $date1=$value['closingdate'];
                            $jid=$value['id'];

                            if (strtotime($date)<strtotime($date1)) {     
                    
                            $stmt6=$conn->prepare("select block_st from comp_user where id=:id");
                            $stmt6->bindparam(':id',$value['compid']); 
                            $stmt6->execute();
                            $res6=$stmt6->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($res6 as $val6) {
                                $a=0;
                                if($a==$val6['block_st']){
                             
                        ?>
                       <td><a href="#"><img src="images/users/<?php echo $result1['logo']; ?>" class="img-circle" alt="" style="max-height: 50px; min-height: 50px; min-width: 50px; max-width: 50px;">
                                </a>
                        </td>
                        <td>
                            <p style="font-size: 18px;"><a href="job_detail.php?jid=<?php echo$jid;?>" style="margin-left: 0px;"><?php echo $value['title']; ?></a></p><br/>
                                <p style="font-size: 16px;"><?php echo $result1[3]; ?></p>
                        </td>
                        <td>
                               <?php echo $value['city']; ?>        
                        </td>

                        <td>        
                                <p style="    padding-top: 0px; font-size: 18px; color: #707070;"><?php echo $value['category']; ?></P>         
                        </td>
                        <td>
                               <a href="#" class="mj_btn mj_greenbtn" style="margin-top: 0px;"><?php echo $value['jobtype']; ?></a>         
                        </td>
                        <td>
                            <?php
                            if (isset($_SESSION['user'])) {
                                # code...
                                $uid=$_SESSION['user'];
                            }
                            
                            $jid=$value['id'];
                            $stmt2= $conn->prepare("select * from applied_user where (job_id=:jid AND user_id=:uid)");
                                    $stmt2->bindparam(':jid',$jid);
                                    $stmt2->bindparam(':uid',$uid);
                                    $stmt2->execute();
                                    $result2=$stmt2->fetch();
                                  if (isset($_SESSION['comp_user'])) {
                                        
                                     }else{   
                            if($result2){

                                ?><form method="POST" action="cancel_process.php">
                        	<input type="hidden" name="jobid" value="<?php echo $jid; ?>">
                          <button name="cancel" class="mj_btn mj_orangebtn">Cancel_Applied</button></form>
                                <?php }
                        if(!$result2)
                        {?>
                            <?php if(isset($_SESSION['user'])){
                            $uid5=$_SESSION['user'];
                                $stmt8=$conn->prepare("select block_sta from user where uid=:id");
                                $stmt8->bindparam(':id',$uid5); 
                                $stmt8->execute();
                                $res8=$stmt8->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($res8 as $val8) {
                                    $a8=1;
                                    if($a8==$val8['block_sta']){
                                         $c8=1; 
                                         ?><a href="jobs.php?blac=<?php echo $c8; ?>" class="mj_btn mj_orangebtn">Apply</a><?php
                                    }else{?>
                        
                            <button class="mj_btn mj_orangebtn try" data-toggle="modal" data-id="<?php echo $value['id']; ?>" >Apply</button>
                            <?php }}}elseif(!isset($_SESSION['user']) AND !isset($_SESSION['comp_user'])){
                                    ?><button class="mj_btn mj_orangebtn try" data-toggle="modal" data-id="<?php echo $value['id']; ?>" >Apply</button><?php
                                }
                                ?>

                        <?php }}}}?>
                            
                        </td>
                    </tr>
                    <!-- modal-backdrop fade in -->
                    <?php if(isset($_GET['jid'])){ ?>
                         <?php 
                            $uid5=$_SESSION['user']; 
                            $jid=$_GET['jid'];
                            $stmt5= $conn->prepare("select * from applied_user where (job_id=:jid AND user_id=:uid)");
                            $stmt5->bindparam(':jid',$jid);
                            $stmt5->bindparam(':uid',$uid5);
                            $stmt5->execute();
                            $result5=$stmt5->fetch();
                            if($result5){
                                ?><div class="modal fade" id="myModal" role="dialog"><?php
                            }else{ ?>
                            <div class="modal-backdrop fade in" id="myModal" role="dialog">
                    <?php }
                    }
                    else{ ?>
                         <div class="modal fade" id="myModal" role="dialog">
                    <?php } ?>
                    
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
                            <textarea class="form-control" rows="4" cols="60" name="msg" placeholder="Write your msg" >
                                        
                            </textarea>
                            </div>
 
                            <label class="mj_mainbtn mj_btnyellow" data-text="Choose Resume"><span>choose Resume
                                <input type="File" name="res" style="display: none;">
                                <input type="hidden" name="id" id="jid" value="<?php echo $jid; ?>">        
                                </span></label>                      
                        </div>
                        <div class="modal-footer">                          
                            <p id="demo"></p>
                          <button type="Submit" class="btn btn-default">Submit</button>
                      
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                  </form>
                      <?php
                        }else if (!isset($_SESSION['user']) AND !isset($_SESSION['comp_user'])) {
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
                            <form action="login.php" method="GET">
                        <input type="hidden" name="jid" id="jid">
                        <input type="hidden" name="flag" value="1">
                  <!--<a href="login.php?jid=<?php $jo//=$jid; //echo $jo;?>&flag=1"  class="btn btn-default">login</a>-->
                  <input type="submit" name="login" value="login" class="btn btn-default">
              </form>
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
                          <p> <label><span>tme campable nathi</span>
                                
                              </label></p>
                        </div>
                        <div class="modal-footer">
                          
                          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                        </div>
                      </div><?php
                        }
                      ?>
                    </div>
                  </div>
                </div><?php  }}?></table>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
						<!--<div class="mj_showmore"> <a href="#" class="mj_showmorebtn mj_blackbtn">Show More</a> </div>-->
					</div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
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
    <!--<script>
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
    </script>-->
    <script>
        $(document).ready(function() {
            $(".try").click(function() {
                $('#myModal').modal('show');
                $("#jid").val($(this).data("id"));
            });
            console.log("ready!");
        });
    </script>
</body>
</html>