<?php
session_start();
unset($_SESSION['admin']);
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2019 09:46:39 GMT -->
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
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" /> 
</head>
<body>
    <div class="form-title">
        <h1>Login Form</h1>
    </div>
    <!-- Login Form-->
    <div class="login-form text-center">
        
        <div class="form formLogin" style="display: block;">
            <h2>Login to your account</h2>
            <form action="loginpro.php" method="POST">
                <input type="text" placeholder="email"  name="email"/>
                <input type="password" placeholder="Password" name="pwd" />
                <div class="remember text-left">
                </div>
                <input type="submit" value="Login">
                
            </form>
        </div>  
        
       
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/js/pages/extra_pages/pages.js" ></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2019 09:46:39 GMT -->
</html>