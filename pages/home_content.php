<?php
$query_result = $obj_app->select_all_recent_product_info();
?>
<section id="slider"><!--slider-->
     <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Online</span>-Shopping</h1>
                                <h2>E-Commerce Website</h2>
                                <p>Be Logical, Be Smart</p>

                            </div>
                            <div class="col-sm-6">
                                <img src="assets/font_end_assets/images/home/slider/Shopping.jpg" style="height: 350px;" class="girl img-responsive" alt="" />

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Online</span>-Shopping</h1>
                                <h2>High quality products.</h2>
                                <p>Be Logical, Be Smart..</p>

                            </div>
                            <div class="col-sm-6">
                                <img src="assets/font_end_assets/images/home/slider/road.jpg" style="height: 350px;" class="girl img-responsive" alt="" />

                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Online</span>-Shopping</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Be Logical, Be Smart..</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="assets/font_end_assets/images/home/slider/matt-lamers.jpg" style="height: 350px;" class="girl img-responsive" alt="" />

                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <!--                    -->

            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Recent Items</h2>

                    <?php while ($product_info = mysqli_fetch_assoc($query_result)) { ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" width="200px" height="200px"/>
                                        <h2>BDT<?php echo $product_info['product_price']; ?></h2>
                                        <p><?php echo $product_info['product_name']; ?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>BDT<?php echo $product_info['product_price']; ?> </h2>
                                            <p><?php echo $product_info['product_name']; ?></p>
                                            <a href="product_details.php?id=<?php echo $product_info['product_id']; ?>" class="btn btn-default add-to-cart">Product Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!--                                    -->
                            </div>
                        </div>
                    <?php } ?>
                </div> 
            </div>
        </div>
    </div>
</section>