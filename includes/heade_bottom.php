<?php
$query_result = $obj_app->select_all_category();
$sub_query_result = $obj_app->select_all_sub_category();
?>
<div class="header-bottom"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="index.php" class="dropdown">Home</a></li>
                        <li>
                            <a href="our_product.php">Sub Categories<span class="caret"></span> </a>
                            <ul role="menu" class="sub-menu">
                                <?php while ($sub_category_info = mysqli_fetch_assoc($sub_query_result)) { ?>
                                    <li style="">
                                        <a href="sub_category.php?id=<?php echo $sub_category_info['sub_category_id'];?>">
                                            <?php echo $sub_category_info['sub_category_name']; ?>
                                        </a>
                                    </li>
                               <?php } ?>
                            </ul>
                        </li>
                        
                        
                     <?php while ($category_info = mysqli_fetch_assoc($query_result)) { ?>
                            <li>
                                <a href="category.php?id=<?php echo $category_info['category_id']; ?>">
                                    <?php echo $category_info['category_name']; ?>
                                </a>
                            </li>
                        <?php } ?>
                            
                          <li><a href="contact_us.php">Contact us</a></li>
                          
                          
                       </ul>
                </div>
            </div>
            <form action="" method="get">
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" name="search_string" placeholder="Search"/>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>