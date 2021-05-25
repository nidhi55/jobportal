<?php $pagenm="home"; ?>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:08 GMT -->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
	<?php
		session_start();
	?>
    <!--Loader Start 
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
    include 'header.php';
    include 'connect.php';
    if(isset($_GET['blac'])){
    	$a8=1;
    	if ($a8==$_GET['blac']) {
	    	?><script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script><?php
			?><script type="text/javascript">
				swal("Oops","Admin Block you So you can not Apply","error");
			</script><?php
		}
    }
    if(isset($_GET['bl'])){
    	$a=1;
    	if ($a==$_GET['bl']) {
	    	?><script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script><?php
			?><script type="text/javascript">
				swal("Oops","Admin Block you So you can not post job","error");
			</script><?php
		}
    }
    if (isset($_GET['apply'])) 
    {
    	?><script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    	  <script type="text/javascript">
			swal("Good job!", "You have successfully applied for job", "success");
		  </script>
    <?php } 
    if (isset($_GET['login'])) {
			$a=$_GET['login'];
			?><script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script><?php
			if ($a==1) {
					?><script type="text/javascript">
								swal("Good job!", "You clicked the button!", "success");
						</script><?php
				}
				elseif ($a==2) {
					?><script> 
						swal("Oops","Something went wrong!","error");
					</script><?php
				}	
		}
    ?>
    
    <script>	if (history.pushState) {
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname;
    window.history.pushState({path:newurl},'',newurl);
}</script>
   
	<div class="clearfix"></div>
     <div class="mj_slider">
		<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
				<ul>	<!-- SLIDE  -->
					<?php 
						$id="1";
						$stmt= $conn->prepare("select *from slider where id=:id");
						$stmt->bindparam(':id',$id);
					  	$stmt->execute();
					  	$result=$stmt->fetch(); 
					?>
					<li data-index="rs-1" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/homeslider_thumb1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
						<!-- MAIN IMAGE -->
						<img src="images/<?php echo $result[1]; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYER NR 0 -->
							<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" id="slide-16-layer-8" 
									 data-x="['left','left','left','left']" data-hoffset="['450','350','250','100']" 
									 data-y="['top','top','top','top']" data-voffset="['120','100','80','50']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 
									style="z-index: 7; white-space: nowrap;"><img src="images/left-line.jpg" alt="">
							</div>
							<!-- LAYER NR 1 -->
							<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" id="slide-16-layer-1.1" 
									 data-x="['right','right','right','right']" data-hoffset="['450','350','250','100']" 
									 data-y="['top','top','top','top']" data-voffset="['120','100','80','50']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 
									style="z-index: 7; white-space: nowrap;"><img src="images/left-line.jpg" alt="">
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-CallToAction   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.2" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['top','top','top','top']" data-voffset="['125','105','85','55']" 
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

									
									style="z-index: 6; white-space: nowrap;">Dreamjobs.com
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.3" 
									 data-x="['left','left','left','left']" data-hoffset="['150','150','100','20']" 
									 data-y="['top','top','top','top']" data-voffset="['200','200','180','150']" 
												data-fontsize="['130','100','80','60']"
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
									
									style="z-index: 5; white-space: nowrap;">
									<?php echo $result[2]; ?>
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.4" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" 
									 data-fontsize="['100','80','80','50']"
									data-lineheight="['100','100','80','50']"
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

									
									style="z-index: 6; white-space: nowrap;">
									<?php echo $result[3]; ?> 
								</div>
								<!-- LAYER NR. 5 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1.5" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i> 
								</div>
							</li>
						<?php 
							$id2="2";
							$stmt= $conn->prepare("select *from slider where id=:id");
							$stmt->bindparam(':id',$id2);
						  	$stmt->execute();
						  	$result=$stmt->fetch(); 
						?>
							<li data-index="rs-2" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/homeslider_thumb2.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
								<!-- MAIN IMAGE -->
								<img src="images/<?php echo $result[1]; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->
								<!-- LAYER NR 0 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.1" 
									 data-x="['left','left','left','left']" data-hoffset="['450','350','250','100']" 
									 data-y="['top','top','top','top']" data-voffset="['120','100','80','50']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><img src="images/left-line.jpg" alt="">
								</div>
								<!-- LAYER NR 1 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.2" 
									 data-x="['right','right','right','right']" data-hoffset="['450','350','250','100']" 
									 data-y="['top','top','top','top']" data-voffset="['120','100','80','50']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><img src="images/left-line.jpg" alt="">
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-CallToAction   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.3" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['top','top','top','top']" data-voffset="['125','105','85','55']" 
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

									
									style="z-index: 6; white-space: nowrap;">Dreamjobs.com
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.4" 
									 data-x="['left','left','left','left']" data-hoffset="['150','150','100','20']" 
									 data-y="['top','top','top','top']" data-voffset="['200','200','180','150']" 
												data-fontsize="['130','100','80','60']"
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
									
									style="z-index: 5; white-space: nowrap;">
									<?php echo $result[2]; ?> 
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.5" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" 
									 data-fontsize="['100','80','80','50']"
									data-lineheight="['100','100','80','50']"
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

									
									style="z-index: 6; white-space: nowrap;"><?php echo $result[3]; ?>
								</div>
								<!-- LAYER NR. 5 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-2.6" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i> 
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
    <div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_tabs mj_bottompadder50">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mj_joblist" role="tablist">
                            <li role="presentation" class="active"><a href="#recentjobs" aria-controls="recentjobs" role="tab" data-toggle="tab">Recent Jobs</a>
                            </li>
                           <!-- <li role="presentation"><a href="#featuredjobs" aria-controls="featuredjobs" role="tab" data-toggle="tab">Featured Jobs</a>
                            </li>-->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="recentjobs">
                                <div class="mj_tabcontent mj_toppadder30">
                                	<table class="table table-striped">
                                    	<?php  
                			$stmt= $conn->prepare("select *from post_job");
                			$stmt->execute();
                			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                			$date=date("y-m-d");
                			$i=1;
						     foreach ($result as $value) 
							 {
							 	$jid=$value['id'];
							 	
							 	if($i<=5)
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
                                        	<?php
                            $stmt6=$conn->prepare("select block_st from comp_user where id=:id");
                            $stmt6->bindparam(':id',$value['compid']); 
                            $stmt6->execute();
                            $res6=$stmt6->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($res6 as $val6) {
                                $a=0;
                                if($a==$val6['block_st']){?>
                                             
                                            <td><a href="#"><img src="images/users/<?php echo $result1['logo']; ?>" class="img-circle" alt="" style="max-height: 50px; min-height: 50px; min-width: 50px; max-width: 50px;">
                                </a>
                                            </td>
                                            <td><p style="font-size: 18px;"><a href="job_detail.php?jid=<?php echo $jid; ?>" style="margin-left: 0px;"><?php $jobid=$value['id']; echo $value['title']; ?></a></p><br/>
                                            	<p style="font-size: 16px;"><?php 
               				      echo $result1['comp_nm']; ?></p>
                                            </td>
                                            <td><?php echo $value['city']; ?>
                                            </td>
                                            <td><p style="    padding-top: 0px; font-size: 18px; color: #707070;"><?php echo $value['category']; ?></p>
                                            </td>
                                            <td><a class="mj_btn mj_greenbtn" style="margin-top: 0px;"><?php echo $value['jobtype']; ?></a> 
                                            </td>
                                            <td><?php
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
                        	<input type="name" name="jobid" hidden="true" value="<?php echo $jobid; ?>">
                          <button name="cancel" class="mj_btn mj_orangebtn">Cancel</button></form>
                        <?php }
                    if(!$result2)
                    {?>
						<?php 	if(isset($_SESSION['user'])){
								$uid5=$_SESSION['user'];
				             	$stmt8=$conn->prepare("select * from user where uid=:id");
				    			$stmt8->bindparam(':id',$uid5); 
				    			$stmt8->execute();
				    			$res8=$stmt8->fetch();
								$a8=1;
								if($a8==$res8['block_sta']){
								$c8=1;	
										 ?><a href="index.php?blac=<?php echo $c8; ?>" class="mj_btn mj_orangebtn">Apply</a><?php
									}else{?>
								
                      <button class="mj_btn mj_orangebtn try" data-toggle="modal" data-id="<?php echo $value['id']; ?>">Apply</button>
                  				<?php }}elseif(!isset($_SESSION['user']) AND !isset($_SESSION['comp_user'])){
                  					?><button class="mj_btn mj_orangebtn try" data-toggle="modal" data-id="<?php echo $value['id']; ?>">Apply</button><?php
                  				}
								?>

                    <?php }} if(isset($_GET['jid'])){ ?>
                         <?php 
                            $uid5=$_SESSION['user']; 
                            $jid5=$_GET['jid'];
                            $idj=0;
                            $stmt5= $conn->prepare("select * from applied_user where (job_id=:jid AND user_id=:uid)");
                            $stmt5->bindparam(':jid',$jid);
                            $stmt5->bindparam(':uid',$uid5);
                            $stmt5->execute();
                            $result5=$stmt5->fetch();
                            if($result5){
                            	?><div class="modal fade" id="myModal" role="dialog"><?php
                            }else{ ?>                       
                            <div class="modal-backdrop fade in" id="myModal" role="dialog">
                            	<?php $idj=1; ?>
                    <?php }}
                    else{ ?>
                         <div class="modal fade" id="myModal" role="dialog">
                         	<?php $idj=0; ?>
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
                    <textarea class="form-control" rows="4" cols="60" name="msg" placeholder="Write your msg">
                                       
                            </textarea>
                    </div>
                    
                    <label class="mj_mainbtn mj_btnyellow" data-text="Choose Resume">Choose Resume
                        <input type="File" name="res" style="display: none;" accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document" ></label>
                        <?php if($idj==0){
                        ?>
                        <input type="hidden" name="id" id="jid">
                    <?php }elseif($idj==1){?><input type="hidden" name="id" value="<?php echo $jid5; ?>">
                   		
                    <?php }?>
                      </p>
                    
                </div>
                <div class="modal-footer">                  
                  
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
                  <label><h4>Please login First</h4></label>
                </div>
                <div class="modal-body">
                	<label>
                  		You want to Login
                  	</label>
                </div>
                <div class="modal-footer">
                	<form action="login.php" method="GET">
                		<input type="hidden" name="jid" id="jid">
                		<input type="hidden" name="flag" value="1">
                  <!--<a href="login.php?jid=<?php $jo//=$jid; //echo $jo;?>&flag=1"  class="btn btn-default">login</a>-->
                  <input type="submit" name="login" value="login" class="btn btn-default">
              
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></form>
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
                   <label><span>You are not capable</span>
                        
                      </label>
                </div>
                <div class="modal-footer">
                  
                  <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                </div>
              </div><?php
              }
            ?>
            </div>
          </div>
                                            </td>
                                        </tr>
                                    <?php $i++; }}}}}?>
                                    </table>
				<!-- Modal -->
				
  
                                    <!--<table class="table table-striped">
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic1.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Senior Web Developer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>New York City</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">Full Time</a>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">Full Time</a>
                                            </td>
                                            <td><span>$45,000</span>
                                            </td>
                                        </tr>
                                        
                                    </table>-->

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
										<div class="mj_showmore">
											<a href="jobs.php" class="mj_blackbtn mj_showmorebtn">Show More</a>
										</div>
                                    </div>
                                </div>

                            </div>
                            <!--<div role="tabpanel" class="tab-pane" id="featuredjobs">
                                <div class="mj_tabcontent mj_toppadder30">
                                    <table class="table table-striped">
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic2.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">UX Designer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Boston</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_bluebtn">Freelance</a>
                                            </td>
                                            <td><span>$20,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic1.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Senior Web Developer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>New York City</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">Full Time</a>
                                            </td>
                                            <td><span>$45,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic3.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Web Designer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Boston</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full time</a>
                                            </td>
                                            <td><span>$36,500</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic4.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Project Manager</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Los Angeles</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full time</a>
                                            </td>
                                            <td><span>$26,200</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic5.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Design Technologist</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>Chicago</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_orangebtn">Part Time</a>
                                            </td>
                                            <td><span>$84,000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><i class="fa fa-heart"></i></a>
                                            </td>
                                            <td>
                                                <a href="#"><img src="images/profilepic6.jpg" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <h4><a href="#">Front End Developer</a></h4>
                                                <p>Company Inc.</p>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i>
                                                <P>New York City</P>
                                            </td>
                                            <td>
                                                <a href="#" class="mj_btn mj_greenbtn">full Time</a>
                                            </td>
                                            <td><span>$65,000</span>
                                            </td>
                                        </tr>
                                    </table>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
										<div class="mj_showmore">
											<a href="#" class="mj_blackbtn mj_showmorebtn">Show More</a>
										</div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder50 mj_bottompadder50">
                        <h1>D<span>reamjobs</span> S<span>ite</span> S<span>tats</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder20">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mj_countdiv">
                                <div class="mj_count_img">
                                    <img src="images/count1.png" class="img-responsive" alt="">
                                </div>
                                <div class="mj_countdata">
                                	<?php
                                		$stmt2= $conn->prepare("select *from post_job");
                                		$stmt2->execute();
  	  									$result2=$stmt2->fetch();
  	  									$count=$stmt->rowcount();

                                	?>
                                    <span class="timer" data-from="0" data-to="<?php echo "$count";?>" data-speed="3000" data-decimals="3"></span>
                                    <p>Jobs Posted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mj_countdiv">
                                <div class="mj_count_img">
                                    <img src="images/count2.png" class="img-responsive" alt="">
                                </div>
                                <div class="mj_countdata">
                                	<?php
                                		$stmt2= $conn->prepare("select *from comp_user");
                                		$stmt2->execute();
  	  									$result2=$stmt2->fetch();
  	  									$count=$stmt2->rowcount();

                                	?>
                                    <span class="timer" data-from="0" data-to="<?php echo "$count";?>" data-speed="3000" data-decimals="3"></span>
                                    <p>Companies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mj_countdiv">
                                <div class="mj_count_img">
                                    <img src="images/count3.png" class="img-responsive" alt="">
                                </div>
                                <div class="mj_countdata">
                                	<?php
                                		$stmt2= $conn->prepare("select *from applied_user");
                                		$stmt2->execute();
  	  									$result2=$stmt2->fetch();
  	  									$count=$stmt2->rowcount();

                                	?>
                                    
                                    <span class="timer" data-from="0" data-to="<?php echo "$count";?>" data-speed="3000" data-decimals="3"></span>
                                    <p>Resumes Posted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mj_countdiv">
                                <div class="mj_count_img">
                                    <img src="images/count4.png" class="img-responsive" alt="">
                                </div>
                                <div class="mj_countdata">
                                	<?php
                                		$stmt2= $conn->prepare("select *from comp_user");
                                		$stmt2->execute();
  	  									$result2=$stmt2->fetch();
  	  									$c1=$stmt2->rowcount();

                                		$stmt3= $conn->prepare("select *from user");
                                		$stmt3->execute();
  	  									$result3=$stmt3->fetch();
  	  									$c2=$stmt3->rowcount();
  	  									$count=$c1+$c2;
                                
                                	?>
                                    <span class="timer" data-from="0" data-to="<?php echo "$count";?>" data-speed="3000" data-decimals="3"></span>
                                    <p>Members</p>
                                </div>
                            </div>
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
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 mj_toppadder80 mj_bottompadder50">
                            <div class="mj_videosection_data mj_toppadder50">
                                <?php
                                $stmt= $conn->prepare("select *from about");
						  	  	$stmt->execute();
						  	  	$result=$stmt->fetch();

                                ?>
                                <h1><?php echo $result[1]; ?></h1>
                                <p><?php echo $result[2];  ?></p>
                                <!--<a href="#" class="mj_readmore">Read More</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="mj_video">
                            <div class="mj_videodiv">
                                <img src="images/applepc1.jpg" alt="work">
                                <div class="mj_overlay">
                                    <div class="mj_videooverlay_inner">
                                        <a href="#"><i class="fa fa-play-circle"></i></a>
                                        <p>Watch now this video about how works mesh<span class="mj_yellow_text">jobs</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <iframe id="video" src="video.php" width="1200	" height="482"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder50 mj_bottompadder50">
                        <h1>A<span>vailable</span> c<span>ompanies</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
            </div>
           
            <div class="row">
            	 <?php  
            	$status=0;
            	$count=0;
            	$stmt=$conn->prepare("select *from comp_user where block_st=:status");
            	$stmt->bindparam(':status',$status);
				$stmt->execute();
				$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
				foreach ($result as $value) {
					if($count<8){
										  	  		
            ?>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a><img src="images/users/<?php echo $value['logo']; ?>"  alt="" height="130" width="130">
                        
                        </a>
                        
                    </div>
                </div><?php }
                $count++;

            } ?>
                <!--<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo2.png" class="img-responsive" alt="">
                         
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo3.png" class="img-responsive" alt="">
                        
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo4.png" class="img-responsive" alt="">
                        
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo5.png" class="img-responsive" alt="">
                        <span>5</span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo6.png" class="img-responsive" alt="">
                        <span>104</span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo7.png" class="img-responsive" alt="">
                        <span>7</span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mj_bottompadder50">
                    <div class="mj_clientlogo">
                        <a href="#"><img src="images/clientlogo8.png" class="img-responsive" alt="">
                        <span>14</span>
                        </a>

                    </div>
                </div>-->
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
                                	<?php
                                        		$stmt= $conn->prepare("select *from testimonial");
										  	  	$stmt->execute();
										  	  	$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
										  	  	foreach ($result as $value) {
										  	  		
                                     ?>
										  	  	
                                    <div class="item">
                                        <div class="mj_testimonial_img">
                                            <img src="images/<?php echo $value['img'] ?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="mj_testimonial_data">
                                        	
                                            <h4><span><?php echo $value['description']; ?></span></h4>
                                            <h6><?php echo $value['name'];  ?></h6>
                                            <p><?php echo $value['comp_name']; ?></p>
                                        </div>
                                    </div>
                                    <?php
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
    <div class="mj_lightgraytbg mj_bottompadder80">
        
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
<script>
        $(document).ready(function() {
            $(".try").click(function() {
                $('#myModal').modal('show');
                $("#jid").val($(this).data("id"));
                document.getElementById("");
            });
            console.log("ready!");
        });
    </script>
    <!-- Script End -->
</body>


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:45:29 GMT -->
</html>