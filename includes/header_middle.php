<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'logout') {
        $obj_app->customer_logout();
    }
}
?>

<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                 <h1><a href="index.php" style="font-size: 20px;color: #000"> <span style="color: #002a80;">Online - </span>Shopping</a></h1> <!-- <img src="assets/font_end_assets/images/home/logo.png" alt="" />-->
                </div>
                <!--           <div class="btn-group pull-right">
                            style="color: #002a80;-->

            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
<!--                        <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
                        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                        <?php
                        $customer_id = isset($_SESSION['customer_id']);
                        if ($customer_id) {
                            ?>
                            <li><a href="?status=logout"><i class="fa fa-lock"></i> Logout</a></li>
                        <?php } else { ?>    
                            <li><a href="login.php"><i class="fa fa-lock"></i> Login/SignUp</a></li>
                        <?php } ?>
                        <?php if (isset($_SESSION['customer_id'])) { ?>
                            <li><a href="profile.php"><i class="fa fa-male"></i> My Profile</a></li>
                            <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>