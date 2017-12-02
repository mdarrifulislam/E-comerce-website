<?php
  $query_result= $obj_app->select_all_publish_manufacturer_info();
    $result=$obj_app->select_all_category();
?>

<div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-widget">
                                <h2>Manufacturer List</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    
                                    <?php while($manufacturer_info=mysqli_fetch_assoc($query_result)){?> 
                                    <li><a href="manufacturer.php?id=<?php echo $manufacturer_info['manufacturer_id'];?>"><?php echo $manufacturer_info['manufacturer_name'];?></a></li>
                                    <?php }?>
                                  </ul>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="single-widget">
                                <h4>Active category list</h4>
                                <ul class="nav nav-pills nav-stacked">
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