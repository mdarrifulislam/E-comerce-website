<?php
  $query_result= $obj_app->select_all_publish_manufacturer_info();
    $result=$obj_app->select_all_category();
?>

<div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="single-widget">
                                <h2>Manufacturer List</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    
                                    <?php while($manufacturer_info=mysqli_fetch_assoc($query_result)){?> 
                                    <li><a href="#"><?php echo $manufacturer_info['manufacturer_name'];?></a></li>
                                    <?php }?>
                                  </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-widget">
                                <h2>Quock Shop</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">T-Shirt</a></li>
                                    <li><a href="#">Mens</a></li>
                                    <li><a href="#">Womens</a></li>
                                    <li><a href="#">Gift Cards</a></li>
                                    <li><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-widget">
                                <h2>Policies</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privecy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Billing System</a></li>
                                    <li><a href="#">Ticket System</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-widget single-widget">
                                <h4>ACTIVE CATEGORY LIST</h4>
                                <ul class="nav nav-pills nav-stacked"style="margin: 20px;">
                                    <li><a href="index.php" class="active">Home</a></li>
                                    <?php while ($category_info=  mysqli_fetch_assoc($result)) {?>
                                    <li><a href="category.php?id=<?php echo $category_info['category_id'];?>"><?php echo $category_info['category_name'];?></a></li>
                                    <?php }?>
                                    
                                    
                                    <?php if(isset($_SESSION['customer_id'])) {?>
                                    <li><a href="profile.php">Profile</a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>