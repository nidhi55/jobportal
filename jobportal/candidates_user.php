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
    <!--Loader End -->
    <?php
    session_start();
     include 'connect.php';
     include 'header.php';
     ?>
      <!--<script>  if (history.pushState) {
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname;
    window.history.pushState({path:newurl},'',newurl);
}</script>-->
    <div class="mj_pagetitle">
        <img src="images/last.jpg" alt="">
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
                            <li role="presentation" class="active"><a href="#recentjobs" aria-controls="recentjobs" role="tab" data-toggle="tab">Applied Candidates</a>
                            </li>
                            
                        </ul>
    
        <div class="container">
            <div class="row">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="recentjobs">
                                <div class="mj_tabcontent mj_toppadder30">
                                    <table class="table table-striped">
                        
                                	<?php  
                                    if (isset($_GET['title'])) {
                                        $a=$_GET['title'];
                                	    //$a=$_SESSION['comp_user'];

                			$stmt=$conn->prepare("select * from applied_user where job_id=:a");
                			$stmt->bindparam(':a',$a);
                			$stmt->execute();
                            $count1=$stmt->rowcount();
                            if ($count1<=0) {
                                ?><label><center>Opps! no one applied for job..</center></label>
                          <?php  }
                			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                			

						     foreach ($result as $value) 
							 {      $path=$value['resume_nm'];
							 	    $id2=$value["user_id"];
								    $stmt1= $conn->prepare("select * from user where (uid=:id)");
								    $stmt1->bindparam(':id',$id2);
	                				$stmt1->execute();
	                				$result1=$stmt1->fetch();
	                				//$result=$stmt->fetch();
	                			
                	 		
                	 ?>
                	
                		<tr>
                            <!--<td>
                                <a href="#"><i class="fa fa-heart"></i></a>
                             </td>-->
                             <?php
                                $bl_st=0;
                                if($bl_st==$result1['block_sta']){ 
                             ?>
                            <td>
                                 <a href= "#"><img src="images/users/<?php echo $result1['photo']; ?>" class="img-circle" alt="" width="50px" height="50px">
                                                </a>
                            </td>
                           
                		<td>
                			<a href="candidates_detail.php?uid=<?php echo $id2; ?>&jid=<?php echo "$a"; ?>"><?php echo $result1['name']; ?></a>
                			<!--<p>
                            	<?php 
               				      //echo $value['description']; ?>
               			     </p>-->
                		</td>
                		<td>
    						   	
                                <?php echo $result1['city']; ?>         
                		</td>

                		<td>
    						   
                                <?php echo $result1['email']; ?>         
                		</td>
                         <td>
                               <?php  $msg=$value['msg'];
                               $m=substr($msg, 0,12);
                               ?>
                                <?php echo $m; ?>         
                        </td>
                        <td>
                             <?php $x=$id2; $y=$a; 

                            ?>
                           
                            <form>
                                <input type="hidden" name="a" value="<?php  echo $x; ?>">
                                <input type="hidden" name="b" value="<?php echo $y; ?>">
                            <?php 
                            $stm=$conn->prepare("select * from selected_user where job_id=:a AND user_id=:id2");
                            $stm->bindparam(':a',$a);
                            $stm->bindparam(':id2',$id2);
                            $stm->execute();
                             $idu=$id2;
                                    $idj=$a;

                            if ($stm->rowcount()==0) {?>
                                
                            <input type="hidden" name="uid" id="uid1" value="<?php echo"$id2"; ?>" >
                            <input type="hidden" name="jid" id="jid1" value="<?php echo "$a";?>">
                            <button type="button" class="mj_btn mj_orangebtn key">Select</button>
                        </form>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
	<form action="seluser_process.php" method="post">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <input type="hidden" id="uid2" name="uid" value="">
          <input type="hidden" id="jid2" name="jid" value="">
          <label>Meeting Date</label>
                    <input type="text" class="form-control" name="md" id="datepicker">
        </div>
        
        <div class="modal-footer">
            <input name="button" type="submit">
        </div>
      </div>
      </form>
    </div>
  </div>
                            <!--<input type="submit" name="submit" class="mj_btn mj_orangebtn try" value="SELECT" data-toggle="modal" data-id="<?php //echo $a; ?>" data-target="#myModal">
                           --><?php } 
                            else if($stm->rowcount()>=1) { ?>
                                <!--<form action="unselect_process.php" method="POST"> 
                                <input type="hidden" name="jid" value="<?php //echo $idj; ?>">
                                <input type="hidden" name="uid" value="<?php //echo $idu; ?>">
                                <button name="button" type="submit" class="mj_btn mj_orangebtn" value="UnSelect">UnSelect
                                </button>
                           </form>-->
                           <a href="unselect_process.php?uid=<?php echo $id2 ?>&jid=<?php echo $a ?>" class="mj_btn mj_orangebtn" >UnSelect</a>
                            <?php }
                           ?>  
                        
                        </td>
                		<td>
    						    <a class="mj_btn mj_orangebtn try" href="images/resume/<?php echo $path; ?>">Resume</a><?php //echo $value['']; ?>             
                		</td>
                        <!--<td>
                            <a href="images/resume/path=<?php //echo $path; ?>">view</a>
                        </td>-->
                  	</tr>
                	  
				    
                <?php  }}}//else{
                    ?>
                    <!--<label>Oops,Anyone is not apply in your job</label>-->
                    <?php 
                //}?>
                </table>
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
        $(document).ready(function() {
            $(".key").click(function() {
                var uid=document.getElementById("uid1").value;
                var jid=document.getElementById("jid1").value;
                $("#uid2").val(uid);
                $("#jid2").val(jid);
                $('#myModal').modal('show');
            });
            console.log("ready!");
        });
    </script>
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