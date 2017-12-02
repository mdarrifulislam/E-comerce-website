<?php
ob_start();
session_start();
require './classes/application.php';
$obj_app = new Application();
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home</title>
        <link href="assets/font_end_assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/font_end_assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/font_end_assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/font_end_assets/css/price-range.css" rel="stylesheet">
        <link href="assets/font_end_assets/css/animate.css" rel="stylesheet">
        <link href="assets/font_end_assets/css/main.css" rel="stylesheet">
        <link href="assets/font_end_assets/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="assets/font_end_assets/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/font_end_assets/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/font_end_assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/font_end_assets/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/font_end_assets/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <div id="particles-js">
        <header id="header"><!--header-->
            <?php include './includes/header_top.php'; ?> <!--/header_top-->
            <?php include './includes/header_middle.php'; ?><!--/header-middle-->
            <?php include './includes/heade_bottom.php'; ?><!--/header-bottom-->
        </header><!--/header-->
        <?php
        if (isset($pages)) {
            if ($pages == 'category') {
                include './pages/category_content.php';
            } elseif ($pages == 'product_details') {  //product_details
                include './pages/product_details_content.php';
            } elseif ($pages == 'cart') {
                include './pages/cart_content.php';
            } elseif ($pages == 'checkout') {
                include './pages/checkout_content.php';
            }elseif ($pages == 'shipping') {
                include './pages/shipping_content.php';
            }elseif ($pages == 'payment') {
                include './pages/payment_content.php';
            }elseif ($pages == 'customer_home') {
                include './pages/customer_home_content.php';
            }elseif ($pages == 'login') {
                include './pages/login_content.php';
            }elseif ($pages == 'profile') {
                include './pages/profile_content.php';
            }elseif ($pages == 'our_products') {
                include './pages/our_products_content.php';
            }elseif ($pages == 'sub_category') {
                include './pages/sub_category_content.php';
            }elseif ($pages == 'search_result') {
                include './pages/search_result_content.php';
            }elseif ($pages == 'contact') {
                include './pages/contact_us_content.php';
            }elseif ($pages == 'get_voucher') {
                include './pages/get_voucher_content.php';
            }elseif ($pages == 'view_order') {
                include './pages/view_order_content.php';
            }elseif ($pages == 'manufacturer') {
                include './pages/manufacturer_content.php';
            }elseif ($pages == 'edit_shipping_info') {
                include './pages/edit_shipping_info_content.php';
            }
            
            
        } else {
            include './pages/home_content.php';
        }
        ?>


        <footer id="footer"><!--Footer-->
            <?php include './includes/footer_top.php'; ?>  <!--footer_top-->
            <?php include './includes/footer_widget.php'; ?> <!--footer_widget-->
            <?php include './includes/footer_bottom.php';?>
             <!--footer_bottom-->
        </footer><!--/Footer-->
        </div>


        <script src="assets/font_end_assets/js/app.js"></script>
        <script src="assets/font_end_assets/js/particles.js"></script>
        <script src="assets/font_end_assets/js/jquery.js"></script>
        <script src="assets/font_end_assets/js/bootstrap.min.js"></script>
        <script src="assets/font_end_assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/font_end_assets/js/price-range.js"></script>
        <script src="assets/font_end_assets/js/jquery.prettyPhoto.js"></script>
        <script src="assets/font_end_assets/js/main.js"></script>
    </body>
</html>

