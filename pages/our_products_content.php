<?php
$query_result = $obj_app->select_all_recent_product_info();
?>

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
                                        <h4>BDT<?php echo $product_info['product_price']; ?></h4>
                                        <p><?php echo $product_info['product_name']; ?></p>
                                        <a href="#" class="btn btn-default add-to-cart">Product Details</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h4>BDT<?php echo $product_info['product_price']; ?> </h4>
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

