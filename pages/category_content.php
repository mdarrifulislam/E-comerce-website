<?php
if (isset($_GET['search_string'])) {
    $search_string = $_GET['search_string'];
    $query_result = $obj_app->select_info_by_search($search_string);
} else {

    $category_id = $_GET['id'];
    $query_result = $obj_app->select_published_product_by_id($category_id);
}
?>
<section id="advertisement">
    <div class="container">
        <img src="assets/font_end_assets/images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <?php while ($category_product = mysqli_fetch_assoc($query_result)) { ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="pages/<?php echo $category_product['product_image']; ?>" alt="<?php echo $category_product['product_name']; ?>" height="200px" width="200px"/>
                                        <p><?php echo $category_product['product_price']; ?></p>
                                        <h3><?php echo $category_product['product_name']; ?></h3>
                                        <a href="#" class="btn btn-default add-to-cart">Product Details</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <p><?php echo $category_product['product_price']; ?></p>
                                            <h3><?php echo $category_product['product_name']; ?></h3>
                                            <a href="product_details.php?id=<?php echo $category_product['product_id']; ?>" class="btn btn-default add-to-cart">Product Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">

                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>

