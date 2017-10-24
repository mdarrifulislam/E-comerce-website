<?php
$product_id = $_GET['id'];
$query_result = $obj_app->select_product_info_by_id($product_id);
$product_info = mysqli_fetch_assoc($query_result);


$category_id = $product_info['category_id'];
$result=$obj_app->select_category_product_info_by_id($category_id);
if(isset($_POST['btn'])){
    $query_result = $obj_app->add_product_to_cart($_POST);
}
?>


<section>
    <div class="container">
        <div class="row">
<!--            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian">category-productsr
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Sportswear
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Nike </a></li>
                                        <li><a href="">Under Armour </a></li>
                                        <li><a href="">Adidas </a></li>
                                        <li><a href="">Puma</a></li>
                                        <li><a href="">ASICS </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Mens
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Fendi</a></li>
                                        <li><a href="">Guess</a></li>
                                        <li><a href="">Valentino</a></li>
                                        <li><a href="">Dior</a></li>
                                        <li><a href="">Versace</a></li>
                                        <li><a href="">Armani</a></li>
                                        <li><a href="">Prada</a></li>
                                        <li><a href="">Dolce and Gabbana</a></li>
                                        <li><a href="">Chanel</a></li>
                                        <li><a href="">Gucci</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Womens
                                    </a>
                                </h4>
                            </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Fendi</a></li>
                                        <li><a href="">Guess</a></li>
                                        <li><a href="">Valentino</a></li>
                                        <li><a href="">Dior</a></li>
                                        <li><a href="">Versace</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Kids</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Fashion</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Households</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Interiors</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Clothing</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Bags</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Shoes</a></h4>
                            </div>
                        </div>
                    </div>/category-products

                    <div class="brands_products">brands_products
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div>/brands_products

                    <div class="price-range">price-range
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div>/price-range

                    <div class="shipping text-center">shipping
                        <img src="" alt="" />
                    </div>/shipping

                </div>
            </div>-->

            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" />
                            <h3></h3>
                        </div>
<!--                       -->

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="assets/font_end_assets/images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2><?php echo $product_info['product_name']; ?></h2>
                            <p>Product Id: <?php echo $product_info['product_id']; ?></p>
                            <img src="assets/font_end_assets/images/product-details/rating.png" alt="" />
                            <span>
                                <span>BDT<?php echo $product_info['product_price']; ?></span>
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

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Details</a></li>
<!--                            <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                            <li><a href="#tag" data-toggle="tab">Tag</a></li>
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>-->
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >
                            <h3>Product Short Description</h3>
                            <p><?php echo $product_info['product_short_description'];?></p>
                            <h3>Product Long Description</h3>
                            <p><?php echo $product_info['product_long_description'];?></p>
                        </div>
                        <div class="tab-pane fade" id="companyprofile" >
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
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
                             
                            <?php while ($category_product= mysqli_fetch_assoc($result)){?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper"> 
                                    <div class="single-products">
                                        
                                        <div class="productinfo text-center">
                                            <img src="assets/<?php echo $category_product['product_image'];?>" alt="<?php echo $category_product['product_name'];?>" width="225px" height="225px"/>
                                            <h2>BDT <?php echo $category_product['product_price'];?></h2>
                                            <p><?php echo $category_product['product_name'];?></p>
                                           <input type="hidden" value="<?php echo $category_product['product_id'];?>"> 
                                            <a href="?id=<?php echo $category_product['product_id'];?>">    <button type="button" name="btn" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product Details</button></a>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                           
                            
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


