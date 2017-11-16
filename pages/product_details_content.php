<?php
$product_id = $_GET['id'];
$query_result = $obj_app->select_product_info_by_id($product_id);
$product_info = mysqli_fetch_assoc($query_result);


$category_id = $product_info['category_id'];
$result = $obj_app->select_category_product_info_by_id($category_id);
if (isset($_POST['btn'])) {
    $query_result = $obj_app->add_product_to_cart($_POST);
}
?>


<section>
    <div class="container">
        <div class="row">
            <!--            -->
              <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" />
                        </div>
                        <!--                       -->
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="assets/font_end_assets/images/product-details/new.jpg" class="newarrival" alt="" />    <!---->
                            <h2><?php echo $product_info['product_name']; ?></h2>
                            <p>Product Id: <?php echo $product_info['product_id']; ?></p>
                            <img src="assets/font_end_assets/images/product-details/rating.png" alt="" />
                            <p style="font-size: 18px;">BDT<?php echo $product_info['product_price']; ?></p>
                            <span>
                                
                                <form action="" method="post">
                                    <label>Quantity:</label>
                                    <input type="text" name="product_quantity" value="1" />
                                    <input type="hidden" name="product_id" value="<?php echo $product_info['product_id']; ?>" />
                                    <button type="submit" class="btn btn-fefault cart" name="btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </form>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Category: </b><?php echo $product_info['category_name']; ?></p>
                            <p><b>Brand: </b><?php echo $product_info['manufacturer_name']; ?></p>
                            <a href=""><img src="assets/font_end_assets/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
                
                
                <div class="row" style="margin-bottom: 30px;">
            <div class="col-sm-3">
                <img src="assets/<?php echo $product_info['product_image']; ?>" alt=""  class="img-responsive img-polaroid img-thumbnail "/>
            </div>
            <div class="col-sm-3">
                <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" class="img-responsive img-polaroid img-thumbnail" />
            </div>
            <div class="col-sm-3">
                <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" class="img-responsive img-polaroid img-thumbnail"/>
            </div>
            <div class="col-sm-3">
                <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" class="img-responsive img-polaroid img-thumbnail"/>
            </div>
        </div>
                

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Details</a></li>
                            <!---->
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >
                            <h3>Product Short Description</h3>
                            <p><?php echo $product_info['product_short_description']; ?></p>
                            <h3>Product Long Description</h3>
                            <p><?php echo $product_info['product_long_description']; ?></p>
                        </div>
                        

                        <div class="tab-pane fade" id="tag" >

                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="tab-pane fade" id="reviews" > </div>

                    </div>
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Related items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">

                                <?php while ($category_product = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper"> 
                                            <div class="single-products">

                                                <div class="productinfo text-center">
                                                    <img  src="assets/<?php echo $category_product['product_image']; ?>"   alt="<?php echo $category_product['product_name']; ?>" width="225px" height="225px"/>
                                                    <p>BDT <?php echo $category_product['product_price']; ?></p>
                                                    <h2><?php echo $category_product['product_name']; ?></h2>
                                                    <input type="hidden" value="<?php echo $category_product['product_id']; ?>"> 
                                                    <a href="?id=<?php echo $category_product['product_id']; ?>"><button type="button" name="btn" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product Details</button></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div>

                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>			
                    </div>
                </div><!--/recommended_items-->

            </div>
            
        </div>
        
    </div>
</section>
