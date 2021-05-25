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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:50:49 GMT -->
<head>
    <meta charset="utf-8" />
    <title>MeshJobs Multipurpose Responsive HTML Template</title>
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

<body class="woocommerce">
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
    ?>
    <div class="mj_lightgraytbg mj_checkout mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <div class="mj_mainheading mj_toppadder20 mj_bottompadder50">
                        <h1> c<span>heckout</span></h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_postdiv mj_shadow_blue mj_toppadder50 mj_bottompadder50">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                            <div class="row">
                                <form class="checkout woocommerce-checkout">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>first name <sup>*</sup>
                                            </label>
                                            <input type="text" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>last name <sup>*</sup>
                                            </label>
                                            <input type="text" class="form-control" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>company name</label>
                                            <input type="text" class="form-control" name="cname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>Email Address <sup>*</sup>
                                            </label>
                                            <input type="text" class="form-control" name="eadd">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>Phone Number <sup>*</sup>
                                            </label>
                                            <input type="text" class="form-control" name="pno">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>country <sup>*</sup>
                                            </label>
                                            <select name="timepass" class="custom-select">
                                                <option>Choose country</option>
                                                <option>United States (US)</option>
                                                <option>India</option>
                                                <option>UK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>Address <sup>*</sup>
                                            </label>
                                            <input type="text" class="form-control" name="sadd" placeholder="Street Address">
                                            <input type="text" class="form-control" name="hno" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>Town / City <sup>*</sup>
                                            </label>
                                            <input type="text" class="form-control" name="twn" placeholder="Town / City">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>State <sup>*</sup>
                                            </label>
                                            <select name="timepass" class="custom-select">
                                                <option>Choose state</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mj_bottompadder20">
                                        <div class="form-group">
                                            <label>ZIP <sup>*</sup>
                                            </label>
                                            <input type="text" class="form-control" name="zip" placeholder="ZIP Code">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_about_section mj_toppadder80 mj_bottompadder80">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                                <div class="mj_mainheading mj_toppadder20 mj_bottompadder50">
                                    <h1> y<span>our </span>o<span>rder</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                                <div class="woo-cart-table">
                                    <table class="table">
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Price</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <h6>Professional Package</h6>
                                                <p>
                                                    <label>Resume:</label>John Doe</p>
                                            </td>
                                            <td>$79,00</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <label class="text-uppercase">subtotal:</label>
                                            </td>
                                            <td>$79,00</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <label class="text-uppercase">total:</label>
                                            </td>
                                            <td><span class="mj_blue_text">$158,00</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="woocommerce-checkout-payment mj_toppadder50 mj_bottompadder50">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                            <div class="row">
                                <ul class="payment_methods methods">
                                    <li>
                                        <div class="mj_radiobox">
                                            <input type="radio" value="dbt" id="radio1" name="checkout">
                                            <label for="radio1"></label>
                                        </div>
                                        Direct Bank Transfer
                                        <div class="payment_box" data-period="dbt">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mj_radiobox">
                                            <input type="radio" value="cheque_payment" id="radio2" name="checkout">
                                            <label for="radio2"></label>
                                        </div>
                                        Cheque Payment
                                        <div class="payment_box" data-period="cheque_payment">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mj_radiobox">
                                            <input type="radio" value="credit_card" id="radio3" name="checkout">
                                            <label for="radio3"></label>
                                        </div>
                                        Credit Card
                                        <img src="images/card.png" class="pull-right" alt="">
                                        <div class="payment_box" data-period="credit_card">
                                            <p>Pay with your credit card. TEST MODE ENABLED. In test mode, you can use the card number 0000 0000 0000 0000 with any CVC and a valid expiration date.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mj_radiobox">
                                            <input type="radio" value="paypal" id="radio4" name="checkout">
                                            <label for="radio4"></label>
                                        </div>
                                        PayPal
                                        <img src="images/paypal.png" class="pull-right" alt="">
                                        <div class="payment_box" data-period="paypal">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mj_login_form">
                                    <div class="form-group  pull-left">
                                        <div class="mj_checkbox">
                                            <input type="checkbox" value="1" id="check1" name="checkbox">
                                            <label for="check1"></label>
                                        </div>
                                        <span> I've read and accept the <a href="#">Terms & Conditions</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mj_showmore">
                        <a href="#" class="mj_showmorebtn mj_blackbtn" data-toggle="modal" data-target="#myModal">Continue to Payment <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade mj_popupdesign mj_checkoutpopup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">M<span>ashjobs</span></h4>
                    <p>mailname@gmail.com</p>
                </div>
                <div class="modal-body">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                        <div class="row">
                            <div class="mj_pricingtable mj_greentable mj_login_form_wrapper">
                                <form>
                                    <div class="mj_login_form">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="card number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="MM/YY" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="CVC" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_toppadder20">
                                            <div class="form-group  pull-left">
                                                <div class="mj_checkbox">
                                                    <input type="checkbox" value="1" id="check2" name="checkbox">
                                                    <label for="check2"></label>
                                                </div>
                                                <span> remember me</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mj_pricing_footer">
                                        <a href="#">Confirm and Pay $158,00</a>
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


<!-- Mirrored from phpstack-127012-364689.cloudwaysapps.com/meshjobs/mesh/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 09:50:51 GMT -->
</html>