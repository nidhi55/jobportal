<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2019 09:49:03 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Smile Admin | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- animation -->
	<link href="assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Theme Styles -->
    
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" /> 
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <img alt="" src="assets/img/logo.png">
                    <span class="logo-default" >Smile</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                    	<!-- start language menu -->
                        <li class="dropdown language-switch">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="assets/img/flags/gb.png" class="position-left" alt=""> English <span class="fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu animated tada">
                                <li>
                                    <a class="deutsch"><img src="assets/img/flags/de.png" alt=""> Deutsch</a>
                                </li>
                                <li>
                                    <a class="ukrainian"><img src="assets/img/flags/ua.png" alt=""> Українська</a>
                                </li>
                                <li>
                                    <a class="english"><img src="assets/img/flags/gb.png" alt=""> English</a>
                                </li>
                                <li>
                                    <a class="espana"><img src="assets/img/flags/es.png" alt=""> España</a>
                                </li>
                                <li>
                                    <a class="russian"><img src="assets/img/flags/ru.png" alt=""> Русский</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end language menu -->
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu animated swing">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu animated slideInDown">

                                <li class="external">

                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user2.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user3.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> John Deo </span>
                                                	<span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user1.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Rajesh </span>
                                                	<span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user8.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Lina Smith </span>
                                                	<span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user5.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Jacob Ryan </span>
                                                	<span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> Kiran </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">more_vert</i>
	                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        <div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors" >
					
				<li><p class="selector-title">Sidebar Color</p></li>
				<li class="complete"><div class="theme-color sidebar-theme">
				<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
				</div></li>
             	<li><p class="selector-title">Header Brand color</p></li>
             	<li class="theme-option"><div class="theme-color logo-theme">
             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
             	<li><p class="selector-title">Header color</p></li>
             	<li class="theme-option"><div class="theme-color header-theme">
             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
			</ul>
			</div>
		</div>
		<!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p> Kiran Patel</p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item start ">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item   ">
	                                    <a href="index.html" class="nav-link ">
	                                        <span class="title">Dashboard 1</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="dashboard2.html" class="nav-link ">
	                                        <span class="title">Dashboard 2</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="dashboard3.html" class="nav-link ">
	                                        <span class="title">Dashboard 3</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="event.html" class="nav-link nav-toggle"> <i class="material-icons">event</i>
	                                <span class="title">Event Management</span> 
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Email</span>
	                                <span class="arrow"></span>
	                                <span class="label label-rouded label-menu label-danger">new</span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="email_inbox.html" class="nav-link ">
	                                        <span class="title">Inbox</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="email_view.html" class="nav-link ">
	                                        <span class="title">View Mail</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="email_compose.html" class="nav-link ">
	                                        <span class="title">Compose Mail</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
	                                <span class="title">Layout</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="layout_boxed.html" class="nav-link "> <span class="title">Boxed</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_full_width.html" class="nav-link "> <span class="title">Full Width</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_collapse.html" class="nav-link "> <span class="title">Collapse Menu</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_right_sidebar.html" class="nav-link "> <span class="title">Right Sidebar</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_sidebar_hover_menu.html" class="nav-link "> <span class="title">Hover Sidebar Menu</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_mega_menu.html" class="nav-link "> <span class="title">Mega Menu</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">grain</i>
	                                <span class="title">Apps</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="chat.html" class="nav-link "> <span class="title">Chat</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="contact_list.html" class="nav-link "> <span class="title">Contact List</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="contact_grid.html" class="nav-link "> <span class="title">Contact Grid</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="gallery.html" class="nav-link "> <span class="title">Gallery</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="support.html" class="nav-link "> <span class="title">Support</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="calendar.html" class="nav-link "> <span class="title">Calendar</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="widget.html" class="nav-link nav-toggle"> <i class="material-icons">widgets</i>
	                                <span class="title">Widget</span> 
	                            </a>
	                        </li>
	                        <li class="nav-item active">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dvr</i>
	                                <span class="title">UI Elements</span> 
	                                <span class="label label-rouded label-menu label-warning">new</span>
	                                <span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item active">
	                                    <a href="buttons.html" class="nav-link ">
	                                        <span class="title">Buttons</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="alert.html" class="nav-link ">
	                                        <span class="title">Alert</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="tabs_accordions_navs.html" class="nav-link ">
	                                        <span class="title">Tabs &amp; Accordions</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="typography.html" class="nav-link ">
	                                        <span class="title">Typography</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="notification.html" class="nav-link ">
	                                        <span class="title">Notifications</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="sweet_alert.html" class="nav-link ">
	                                        <span class="title">Sweet Alert</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="panels.html" class="nav-link ">
	                                        <span class="title">Panels</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="grid.html" class="nav-link ">
	                                        <span class="title">Grids</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="tree.html" class="nav-link ">
	                                        <span class="title">Tree View</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="carousel.html" class="nav-link ">
	                                        <span class="title">Carousel</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="animation.html" class="nav-link ">
	                                        <span class="title">Animations</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">store</i>
	                                <span class="title">Material Elements</span> 
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="material_button.html" class="nav-link ">
	                                        <span class="title">Buttons</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_tab.html" class="nav-link ">
	                                        <span class="title">Tabs</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_chips.html" class="nav-link ">
	                                        <span class="title">Chips</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_grid.html" class="nav-link ">
	                                        <span class="title">Grid</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_form.html" class="nav-link ">
	                                        <span class="title">Form</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_datepicker.html" class="nav-link ">
	                                        <span class="title">DatePicker</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_select.html" class="nav-link ">
	                                        <span class="title">Select Item</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_loading.html" class="nav-link ">
	                                        <span class="title">Loading</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_menu.html" class="nav-link ">
	                                        <span class="title">Menu</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_slider.html" class="nav-link ">
	                                        <span class="title">Slider</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_tables.html" class="nav-link ">
	                                        <span class="title">Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_toggle.html" class="nav-link ">
	                                        <span class="title">Toggle</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_badges.html" class="nav-link ">
	                                        <span class="title">Badges</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">subtitles</i>
	                                <span class="title">Forms </span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="layouts_form.html" class="nav-link ">
	                                        <span class="title">Form Layout</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="advance_form.html" class="nav-link ">
	                                        <span class="title">Advance Component</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="validation_form.html" class="nav-link ">
	                                        <span class="title">Form Validation</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="steps.html" class="nav-link ">
	                                        <span class="title">Wizard</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="wizard_form.html" class="nav-link ">
	                                        <span class="title">Smart Wizard</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="file_upload.html" class="nav-link ">
	                                        <span class="title">File Upload</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="editable_form.html" class="nav-link ">
	                                        <span class="title">Editor</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">list</i>
	                                <span class="title">Data Tables</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="basic_table.html" class="nav-link ">
	                                        <span class="title">Basic Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="advanced_table.html" class="nav-link ">
	                                        <span class="title">Advance Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="editable_table.html" class="nav-link ">
	                                        <span class="title">Editable Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="group_table.html" class="nav-link ">
	                                        <span class="title">Grouping</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="table_data.html" class="nav-link ">
	                                        <span class="title">Tables With Sourced Data</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">timeline</i>
	                                <span class="title">Charts</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="charts_echarts.html" class="nav-link ">
	                                        <span class="title">eCharts</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="charts_morris.html" class="nav-link ">
	                                        <span class="title">Morris Charts</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="charts_chartjs.html" class="nav-link ">
	                                        <span class="title">Chartjs</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">map</i>
	                                <span class="title">Maps</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="google_maps.html" class="nav-link ">
	                                        <span class="title">Google Maps</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="vector_maps.html" class="nav-link ">
	                                        <span class="title">Vector Maps</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">album</i>
	                                <span class="title">Icons</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="fontawesome_icons.html" class="nav-link "> <span class="title">Font Awesome</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="simpleline_icons.html" class="nav-link "> <span class="title">Simple Line Icon</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_icons.html" class="nav-link "> <span class="title">Material Icon</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        
	                        
	                        
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle"> <i class="material-icons">description</i>
	                            <span class="title">Extra pages</span> 
	                            <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                            	<li class="nav-item">
	                                    <a href="timeline.html" class="nav-link "> <span class="title">Timeline</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="login.html" class="nav-link "> <span class="title">Login</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="user_profile.html" class="nav-link "><span class="title">Profile</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="pricing.html" class="nav-link "><span class="title">Pricing</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="contactus.html" class="nav-link "> <span class="title">Contact Us</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="invoice.html" class="nav-link "><span class="title">Invoice</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="faq.html" class="nav-link "><span class="title">Faq</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="lock_screen.html" class="nav-link "> <span class="title">Lock Screen</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="blank_page.html" class="nav-link "> <span class="title">Blank Page</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">slideshow</i>
	                                <span class="title">Multi Level Menu</span>
	                                <span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="javascript:;" class="nav-link nav-toggle">
	                                        <i class="fa fa-university"></i> Item 1
	                                        <span class="arrow"></span>
	                                    </a>
	                                    <ul class="sub-menu">
	                                        <li class="nav-item">
	                                            <a href="javascript:;" class="nav-link nav-toggle">
	                                                <i class="fa fa-bell-o"></i> Arrow Toggle
	                                                <span class="arrow "></span>
	                                            </a>
	                                            <ul class="sub-menu">
	                                                <li class="nav-item">
	                                                    <a href="javascript:;" class="nav-link">
	                                                        <i class="fa fa-calculator"></i> Sample Link 1</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a href="#" class="nav-link">
	                                                        <i class="fa fa-clone"></i> Sample Link 2</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a href="#" class="nav-link">
	                                                        <i class="fa fa-cogs"></i> Sample Link 3</a>
	                                                </li>
	                                            </ul>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-rss"></i> Sample Link 2</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-hdd-o"></i> Sample Link 3</a>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="javascript:;" class="nav-link nav-toggle">
	                                        <i class="fa fa-gavel"></i> Arrow Toggle
	                                        <span class="arrow"></span>
	                                    </a>
	                                    <ul class="sub-menu">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-paper-plane"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-power-off"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-recycle"></i> Sample Link 1
	                                             </a>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link">
	                                        <i class="fa fa-volume-up"></i> Item 3 </a>
	                                </li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Buttons</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">UI Elements</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Buttons</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Default Buttons</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-round btn-default">Default</button>
											<button type="button" class="btn btn-round btn-primary">Primary</button>
											<button type="button" class="btn btn-round btn-success">Success</button>
											<button type="button" class="btn btn-round btn-info">Info</button>
											<button type="button" class="btn btn-round btn-warning">Warning</button>
											<button type="button" class="btn btn-round btn-danger">Danger</button>
											<br>
											<h4 class="sub-title">Disable buttons</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button class="btn btn-default disabled m-b-10">Disabled</button>
											<button class="btn btn-primary disabled m-b-10">Disabled</button>
											<button class="btn btn-success disabled m-b-10">Disabled</button>
											<button class="btn btn-info disabled m-b-10">Disabled</button>
											<button class="btn btn-warning disabled m-b-10">Disabled</button>
											<button class="btn btn-danger disabled m-b-10">Disabled</button>
											<br>
											<h4 class="sub-title">Outline Buttons</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button"
												class="btn default btn-outline m-b-10">Default</button>
											<button type="button" class="btn red btn-outline m-b-10">Red</button>
											<button type="button"
												class="btn blue-bgcolor btn-outline m-b-10">Blue</button>
											<button type="button"
												class="btn deepPink btn-outline m-b-10">Deep Pink</button>
											<button type="button" class="btn yellow btn-outline m-b-10">Yellow</button>
											<button type="button" class="btn purple btn-outline m-b-10">Purple</button>
											<button type="button" class="btn dark btn-outline m-b-10">Dark</button>
											<br>
											<h4 class="sub-title">Buttons Size</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-default btn-lg m-b-10">Large
												Button</button>
											<button type="button" class="btn btn-primary m-b-10">Default
												Button</button>
											<button type="button" class="btn btn-success btn-sm m-b-10">Small
												Button</button>
											<button type="button" class="btn btn-info btn-xs m-b-10">Extra
												Small Button</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Rounded Buttons</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-circle btn-default">Default</button>
											<button type="button" class="btn btn-circle btn-primary">Primary</button>
											<button type="button" class="btn btn-circle btn-success">Success</button>
											<button type="button" class="btn btn-circle btn-info">Info</button>
											<button type="button" class="btn btn-circle btn-warning">Warning</button>
											<button type="button" class="btn btn-circle btn-danger">Danger</button>
											<br>
											<h4 class="sub-title">Disable Rounded Buttons</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button class="btn btn-circle btn-default disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-primary disabled m-b-10">Disabled</button>
											<button
												class="btn btn-circle btn-success disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-info disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-warning disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-danger disabled m-b-10">Disabled</button>
											<br>
											<h4 class="sub-title">Outline Rounded Buttons</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button"
												class="btn default btn-outline btn-circle m-b-10">Default</button>
											<button type="button" class="btn red btn-outline btn-circle m-b-10">Red</button>
											<button type="button"
												class="btn blue-bgcolor btn-outline btn-circle m-b-10">Blue</button>
											<button type="button"
												class="btn deepPink btn-outline btn-circle m-b-10">Deep Pink</button>
											<button type="button" class="btn yellow btn-outline btn-circle m-b-10">Yellow</button>
											<button type="button" class="btn purple btn-outline btn-circle m-b-10">Purple</button>
											<button type="button" class="btn dark btn-outline btn-circle m-b-10">Dark</button>
											<br>
											<h4 class="sub-title">Rounded Buttons Size</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-circle btn-default btn-lg m-b-10">Large button</button>
											<button type="button" class="btn btn-circle btn-primary m-b-10">Default button</button>
											<button type="button" class="btn btn-circle btn-success btn-sm m-b-10">Small button</button>
											<button type="button" class="btn btn-circle btn-info btn-xs m-b-10">Extra small button</button>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Group Buttons</header>
								</div>
								<div class="card-body ">
									 <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                            <div class="btn-group btn-group-solid">
                                                <button type="button" class="btn btn-info">Left</button>
                                                <button type="button" class="btn btn-warning">Middle</button>
                                                <button type="button" class="btn deepPink-bgcolor">Right</button>
                                            </div>
                                            <br>
											<h4 class="sub-title">Vertical buttons groups</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-group-vertical">
                                                <button class="btn btn-info" type="button">Top</button>
                                                <button class="btn deepPink-bgcolor" type="button">Middle</button>
                                                <button class="btn yellow" type="button">Bottom</button>
                                            </div>
                                            <br>
											<h4 class="sub-title">Group Checkbox</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary deepPink-bgcolor">
                                                    <input type="checkbox"> Option 1
                                                </label>
                                                <label class="btn btn-primary deepPink-bgcolor">
                                                    <input type="checkbox"> Option 2
                                                </label>
                                                <label class="btn btn-primary deepPink-bgcolor">
                                                    <input type="checkbox"> Option 3
                                                </label>
                                            </div>
                                            <br>
											<h4 class="sub-title">Multiple buttons group</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-toolbar mg-bottom-10">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>
                                                    <button type="button" class="btn btn-default">3</button>
                                                    <button type="button" class="btn btn-default">4</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">5</button>
                                                    <button type="button" class="btn btn-default">6</button>
                                                    <button type="button" class="btn btn-default">7</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">8</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Rounded Group Buttons</header>
								</div>
								<div class="card-body ">
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                            <div class="btn-group btn-group-circle btn-group-solid">
                                                <button type="button" class="btn btn-info">Left</button>
                                                <button type="button" class="btn btn-warning">Middle</button>
                                                <button type="button" class="btn deepPink-bgcolor">Right</button>
                                            </div>
                                            <br>
											<h4 class="sub-title">Vertical buttons groups</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-group-vertical btn-group-vertical-circle margin-right-10">
                                                <button class="btn btn-info" type="button">Top</button>
                                                <button class="btn deepPink-bgcolor" type="button">Middle</button>
                                                <button class="btn yellow" type="button">Bottom</button>
                                            </div>
                                            <br>
											<h4 class="sub-title">Group Checkbox</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                <label class="btn btn-primary deepPink-bgcolor">
                                                    <input type="checkbox"> Option 1
                                                </label>
                                                <label class="btn btn-primary deepPink-bgcolor">
                                                    <input type="checkbox"> Option 2
                                                </label>
                                                <label class="btn btn-primary deepPink-bgcolor">
                                                    <input type="checkbox"> Option 3
                                                </label>
                                            </div>
                                             <br>
											<h4 class="sub-title">Multiple buttons group</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-toolbar mg-bottom-10">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>
                                                    <button type="button" class="btn btn-default">3</button>
                                                    <button type="button" class="btn btn-default">4</button>
                                                </div>
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-default">5</button>
                                                    <button type="button" class="btn btn-default">6</button>
                                                    <button type="button" class="btn btn-default">7</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-circle btn-default">8</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Buttons With Icons</header>
								</div>
								<div class="card-body ">
									<div class="row">
                                       <div class="col-md-12">
                                           <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add </button>
                                           <button data-toggle="button" class="btn btn-primary"><i class="fa fa-thumbs-up "></i> 12</button>
                                           <button type="button" class="btn btn-info "><i class="fa fa-cogs"></i> Setting</button>
                                           <button type="button" class="btn btn-default "><i class="fa fa-cloud-upload"></i> Upload</button>
                                           <button data-toggle="button" class="btn btn-default"><i class="fa fa-font"></i>
                                           </button>
                                           <button data-toggle="button" class="btn btn-default"><i class="fa fa-search"></i>
                                           </button>
                                       </div>
                                   </div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Rounded Buttons With Icons</header>
								</div>
								<div class="card-body ">
									<div class="row">
                                       <div class="col-md-12">
                                           <button type="button" class="btn btn-circle btn-success"><i class="fa fa-plus"></i> Add </button>
                                           <button data-toggle="button" class="btn btn-circle btn-primary"><i class="fa fa-thumbs-up "></i> 12</button>
                                           <button type="button" class="btn btn-circle btn-info "><i class="fa fa-cogs"></i> Setting</button>
                                           <button type="button" class="btn btn-circle btn-default "><i class="fa fa-cloud-upload"></i> Upload</button>
                                           <button data-toggle="button" class="btn btn-circle btn-default"><i class="fa fa-font"></i>
                                           </button>
                                           <button data-toggle="button" class="btn btn-circle btn-default"><i class="fa fa-search"></i>
                                           </button>
                                       </div>
                                   </div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Dropdowns Buttons</header>
								</div>
								<div class="card-body ">
									 <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle m-r-20" type="button">
                                            Default <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">New File</a>
                                            </li>
                                            <li><a href="#">Save as</a>
                                            </li>
                                            <li><a href="#">Open With</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Exit</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- button-group -->
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle m-r-20" type="button">
                                            Primary <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">New File</a>
                                            </li>
                                            <li><a href="#">Save as</a>
                                            </li>
                                            <li><a href="#">Open With</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Exit</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- button-group -->
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle m-r-20" type="button">
                                            Success <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">New File</a>
                                            </li>
                                            <li><a href="#">Save as</a>
                                            </li>
                                            <li><a href="#">Open With</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Exit</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- button-group -->
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Rounded Buttons With Icons</header>
								</div>
								<div class="card-body ">
									<div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-default btn-circle dropdown-toggle m-r-20" type="button">
                                            Default <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">New File</a>
                                            </li>
                                            <li><a href="#">Save as</a>
                                            </li>
                                            <li><a href="#">Open With</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Exit</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- button-group -->
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-circle dropdown-toggle m-r-20" type="button">
                                            Primary <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">New File</a>
                                            </li>
                                            <li><a href="#">Save as</a>
                                            </li>
                                            <li><a href="#">Open With</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Exit</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- button-group -->
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-success btn-circle dropdown-toggle m-r-20" type="button">
                                            Success <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">New File</a>
                                            </li>
                                            <li><a href="#">Save as</a>
                                            </li>
                                            <li><a href="#">Open With</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Exit</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- button-group -->
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-head">
									<header>Split Dropdowns Button </header>
								</div>
								<div class="card-body ">
								<div class="btn-group">
                                      <button type="button" class="btn btn-default">Default</button>
                                      <button type="button" class="btn btn-default dropdown-toggle m-r-20" data-toggle="dropdown">
                                          <i class="fa fa-angle-down"></i>
                                      </button>
                                      <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">New File</a>
                                          </li>
                                          <li><a href="#">Save as</a>
                                          </li>
                                          <li><a href="#">Open With</a>
                                          </li>
                                          <li class="divider"></li>
                                          <li><a href="#">Exit</a>
                                          </li>
                                      </ul>
                                  </div>
                                  <!-- button-group -->
                                  <div class="btn-group">
                                      <button type="button" class="btn btn-primary">Primary</button>
                                      <button type="button" class="btn btn-primary dropdown-toggle m-r-20" data-toggle="dropdown">
                                          <i class="fa fa-angle-down"></i>
                                      </button>
                                      <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">New File</a>
                                          </li>
                                          <li><a href="#">Save as</a>
                                          </li>
                                          <li><a href="#">Open With</a>
                                          </li>
                                          <li class="divider"></li>
                                          <li><a href="#">Exit</a>
                                          </li>
                                      </ul>
                                  </div>
                                  <!-- button-group -->
                                  <div class="btn-group">
                                      <button type="button" class="btn btn-success">Success</button>
                                      <button type="button" class="btn btn-success dropdown-toggle m-r-20" data-toggle="dropdown">
                                          <i class="fa fa-angle-down"></i>
                                      </button>
                                      <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">New File</a>
                                          </li>
                                          <li><a href="#">Save as</a>
                                          </li>
                                          <li><a href="#">Open With</a>
                                          </li>
                                          <li class="divider"></li>
                                          <li><a href="#">Exit</a>
                                          </li>
                                      </ul>
                                  </div>
                                  <!-- button-group -->
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-head">
									<header>Split Dropdowns Rounded Button</header>
								</div>
								<div class="card-body ">
									 <div class="btn-group btn-group-circle">
                                         <button type="button" class="btn btn-default">Default</button>
                                         <button type="button" class="btn btn-circle-right btn-default dropdown-toggle m-r-20" data-toggle="dropdown">
                                             <i class="fa fa-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu" role="menu">
                                             <li><a href="#">New File</a>
                                             </li>
                                             <li><a href="#">Save as</a>
                                             </li>
                                             <li><a href="#">Open With</a>
                                             </li>
                                             <li class="divider"></li>
                                             <li><a href="#">Exit</a>
                                             </li>
                                         </ul>
                                     </div>
                                     <div class="btn-group btn-group-circle">
                                         <button type="button" class="btn btn-primary">Primary</button>
                                         <button type="button" class="btn btn-circle-right btn-primary dropdown-toggle m-r-20" data-toggle="dropdown">
                                             <i class="fa fa-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu" role="menu">
                                             <li><a href="#">New File</a>
                                             </li>
                                             <li><a href="#">Save as</a>
                                             </li>
                                             <li><a href="#">Open With</a>
                                             </li>
                                             <li class="divider"></li>
                                             <li><a href="#">Exit</a>
                                             </li>
                                         </ul>
                                     </div>
                                     <div class="btn-group btn-group-circle">
                                         <button type="button" class="btn btn-success">Success</button>
                                         <button type="button" class="btn btn-circle-right btn-success dropdown-toggle m-r-20" data-toggle="dropdown">
                                             <i class="fa fa-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu" role="menu">
                                             <li><a href="#">New File</a>
                                             </li>
                                             <li><a href="#">Save as</a>
                                             </li>
                                             <li><a href="#">Open With</a>
                                             </li>
                                             <li class="divider"></li>
                                             <li><a href="#">Exit</a>
                                             </li>
                                         </ul>
                                     </div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Block level button</header>
								</div>
								<div class="card-body ">
									<button type="button" class="btn btn-default btn-block">Block level button</button>
                                     <button type="button" class="btn btn-warning btn-block">Block level button</button>
                                     <button type="button" class="btn btn-danger  btn-block">Block level button</button>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Star Rating Example</header>
								</div>
								<div class="card-body ">
									<span class="rating"> <span class="star"></span> <span class="star"></span> <span class="star"></span> <span class="star"></span> <span class="star"></span> </span>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
						<div class="col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>SOCIAL BUTTONS</header>
								</div>
								<div class="card-body ">
									<div class="button-list">
									<button type="button"
										class="btn btn-facebook waves-effect waves-light">
										<i class="fa fa-facebook"></i>
									</button>
									<button type="button"
										class="btn btn-twitter waves-effect waves-light">
										<i class="fa fa-twitter"></i>
									</button>
									<button type="button"
										class="btn btn-linkedin waves-effect waves-light">
										<i class="fa fa-linkedin"></i>
									</button>
									<button type="button"
										class="btn btn-dribbble waves-effect waves-light">
										<i class="fa fa-dribbble"></i>
									</button>
									<button type="button"
										class="btn btn-googleplus waves-effect waves-light">
										<i class="fa fa-google-plus"></i>
									</button>
									<button type="button"
										class="btn btn-instagram waves-effect waves-light">
										<i class="fa fa-instagram"></i>
									</button>
									<button type="button"
										class="btn btn-pinterest waves-effect waves-light">
										<i class="fa fa-pinterest"></i>
									</button>
									<button type="button"
										class="btn btn-dropbox waves-effect waves-light">
										<i class="fa fa-dropbox"></i>
									</button>
									<button type="button"
										class="btn btn-flickr waves-effect waves-light">
										<i class="fa fa-flickr"></i>
									</button>
									<button type="button"
										class="btn btn-tumblr waves-effect waves-light">
										<i class="fa fa-tumblr"></i>
									</button>
									<button type="button"
										class="btn btn-skype waves-effect waves-light">
										<i class="fa fa-skype"></i>
									</button>
									<button type="button"
										class="btn btn-youtube waves-effect waves-light">
										<i class="fa fa-youtube"></i>
									</button>
									<button type="button"
										class="btn btn-github waves-effect waves-light">
										<i class="fa fa-github"></i>
									</button>
									<br>
									<button type="button"
										class="btn btn-facebook waves-effect waves-light">
										<i class="fa fa-facebook m-r-5"></i> Facebook
									</button>
									<button type="button"
										class="btn btn-twitter waves-effect waves-light">
										<i class="fa fa-twitter m-r-5"></i> Twitter
									</button>
									<button type="button"
										class="btn btn-linkedin waves-effect waves-light">
										<i class="fa fa-linkedin m-r-5"></i> Linkedin
									</button>
									<button type="button"
										class="btn btn-dribbble waves-effect waves-light">
										<i class="fa fa-dribbble m-r-5"></i> Dribbble
									</button>
									<button type="button"
										class="btn btn-googleplus waves-effect waves-light">
										<i class="fa fa-google-plus m-r-5"></i> Google+
									</button>
									<button type="button"
										class="btn btn-instagram waves-effect waves-light">
										<i class="fa fa-instagram m-r-5"></i> Instagram
									</button>
									<button type="button"
										class="btn btn-pinterest waves-effect waves-light">
										<i class="fa fa-pinterest m-r-5"></i> Pinterest
									</button>
									<button type="button"
										class="btn btn-dropbox waves-effect waves-light">
										<i class="fa fa-dropbox m-r-5"></i> Dropbox
									</button>
									<button type="button"
										class="btn btn-flickr waves-effect waves-light">
										<i class="fa fa-flickr m-r-5"></i> Flickr
									</button>
									<button type="button"
										class="btn btn-tumblr waves-effect waves-light">
										<i class="fa fa-tumblr m-r-5"></i> Tumblr
									</button>
									<button type="button"
										class="btn btn-skype waves-effect waves-light">
										<i class="fa fa-skype m-r-5"></i> Skype
									</button>
									<button type="button"
										class="btn btn-youtube waves-effect waves-light">
										<i class="fa fa-youtube m-r-5"></i> Youtube
									</button>
									<button type="button"
										class="btn btn-github waves-effect waves-light">
										<i class="fa fa-github m-r-5"></i> Github
									</button>
									</div>
								</div>
							</div>
						</div>
                    </div>
				</div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab"> <i class="material-icons">chat</i>Chat
                                    <span class="badge badge-danger">4</span>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_3" class="nav-link tab-icon"  data-toggle="tab"> <i class="material-icons">settings</i> Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start User Chat --> 
 						<div class="tab-pane active chat-sidebar-chat in active show animated slideInRight" role="tabpanel" id="quick_sidebar_tab_1">
                        	<div class="chat-sidebar-list">
	                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
	                                <div class="chat-header"><h5 class="list-heading">Online</h5></div>
	                                <ul class="media-list list-items">
	                                    <li class="media"><img class="media-object" src="assets/img/user/user3.jpg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">John Deo</h5>
	                                            <div class="media-heading-sub">Spine Surgeon</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-success">5</span>
	                                        </div> <img class="media-object" src="assets/img/user/user1.jpg" width="35" height="35" alt="...">
	                                        <i class="busy dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Rajesh</h5>
	                                            <div class="media-heading-sub">Director</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="assets/img/user/user5.jpg" width="35" height="35" alt="...">
	                                        <i class="away dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Jacob Ryan</h5>
	                                            <div class="media-heading-sub">Ortho Surgeon</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-danger">8</span>
	                                        </div> <img class="media-object" src="assets/img/user/user4.jpg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Kehn Anderson</h5>
	                                            <div class="media-heading-sub">CEO</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="assets/img/user/user2.jpg" width="35" height="35" alt="...">
	                                        <i class="busy dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Sarah Smith</h5>
	                                            <div class="media-heading-sub">Anaesthetics</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="assets/img/user/user7.jpg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Vlad Cardella</h5>
	                                            <div class="media-heading-sub">Cardiologist</div>
	                                        </div>
	                                    </li>
	                                </ul>
	                                <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
	                                <ul class="media-list list-items">
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-warning">4</span>
	                                        </div> <img class="media-object" src="assets/img/user/user6.jpg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Jennifer Maklen</h5>
	                                            <div class="media-heading-sub">Nurse</div>
	                                            <div class="media-heading-small">Last seen 01:20 AM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="assets/img/user/user8.jpg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Lina Smith</h5>
	                                            <div class="media-heading-sub">Ortho Surgeon</div>
	                                            <div class="media-heading-small">Last seen 11:14 PM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-success">9</span>
	                                        </div> <img class="media-object" src="assets/img/user/user9.jpg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Jeff Adam</h5>
	                                            <div class="media-heading-sub">Compounder</div>
	                                            <div class="media-heading-small">Last seen 3:31 PM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="assets/img/user/user10.jpg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Anjelina Cardella</h5>
	                                            <div class="media-heading-sub">Physiotherapist</div>
	                                            <div class="media-heading-small">Last seen 7:45 PM</div>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>
                            </div>
                            <div class="chat-sidebar-item">
                                <div class="chat-sidebar-chat-user">
                                    <div class="page-quick-sidemenu">
                                        <a href="javascript:;" class="chat-sidebar-back-to-list">
                                            <i class="fa fa-angle-double-left"></i>Back
                                        </a>
                                    </div>
                                    <div class="chat-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="assets/img/dp.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
                                                <span class="body-out"> could you send me menu icons ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="assets/img/user/user5.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                                <span class="body"> please give me 10 minutes. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="assets/img/dp.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
                                                <span class="body-out"> ok fine :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="assets/img/user/user5.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                                <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="assets/img/dp.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> it is perfect! :) </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="assets/img/dp.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> Great! Thanks. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="assets/img/user/user5.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
                                                <span class="body"> it is my pleasure :) </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn deepPink-bgcolor">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End User Chat --> 
 						<!-- Start Setting Panel --> 
 						<div class="tab-pane chat-sidebar-settings animated slideInUp" role="tabpanel" id="quick_sidebar_tab_3">
                            <div class="chat-sidebar-settings-list slimscroll-style">
                                <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
	                            <div class="chatpane inner-content ">
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Sidebar Position</div>
					                        <div class="setting-set">
					                           <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
	                                                <option value="left" selected="selected">Left</option>
	                                                <option value="right">Right</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Header</div>
					                        <div class="setting-set">
					                           <select class="page-header-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed" selected="selected">Fixed</option>
	                                                <option value="default">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Sidebar Menu </div>
					                        <div class="setting-set">
					                           <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
	                                                <option value="accordion" selected="selected">Accordion</option>
	                                                <option value="hover">Hover</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Footer</div>
					                        <div class="setting-set">
					                           <select class="page-footer-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed">Fixed</option>
	                                                <option value="default" selected="selected">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                </div>
									<div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Notifications</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-1">
									                  <input type = "checkbox" id = "switch-1" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Show Online</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-7">
									                  <input type = "checkbox" id = "switch-7" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Status</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-2">
									                  <input type = "checkbox" id = "switch-2" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">2 Steps Verification</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-3">
									                  <input type = "checkbox" id = "switch-3" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                </div>
                                    <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                    <div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Location</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-4">
									                  <input type = "checkbox" id = "switch-4" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Save Histry</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-5">
									                  <input type = "checkbox" id = "switch-5" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Auto Updates</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-6">
									                  <input type = "checkbox" id = "switch-6" 
									                     class = "mdl-switch__input" checked>
									               	</label>
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
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Smile Admin Theme By
                <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RedStar Theme</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.min.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js" ></script>
     <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2019 09:49:03 GMT -->
</html>