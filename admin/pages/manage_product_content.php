<?php
 if (isset($_GET['status'])){
      $product_id=$_GET['id'];
     if($_GET['status']=='unpublish'){
         $message = $obj_super_admin->unpublish_product_id($product_id);
     }else if($_GET['status']=='publish') {
        $message = $obj_super_admin->publish_product_id($product_id);
    }
    else if($_GET['status']=='delete') {
        $message = $obj_super_admin->delete_product_id($product_id);
    }
 }





 $query_result= $obj_super_admin->select_all_product_info();
 
?>


<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Product</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2>
            <?php
            if (isset($message)) {
                echo $message;
            }
            unset($message);
            ?>
        </h2>
        <h2>
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
        </h2>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Manufacturer Name</th>
                        <th>Product Price</th>
                        <th>Product Amount</th>
                        <th>Publication Status</th>
                        <th>Actions</th> 
                    </tr>
                </thead>   
                <tbody>
             <?php while ($product_info=  mysqli_fetch_assoc($query_result)){?>
                    <tr>
                        <td><?php echo $product_info['product_name'];?></td>
                        <td class="center"><?php echo $product_info['category_name'];?></td>
                        <td class="center"><?php echo $product_info['manufacturer_name'];?></td>
                        <td class="center"><?php echo $product_info['product_price'];?></td>
                        <td class="center"><?php echo $product_info['stock_quantity'];?></td>

                        <td class="center"><?php  
                        
                            if($product_info['publication_status']==1){
                                echo 'Publish';
                            }  else {
                                echo 'Unpublish';    
                            }
                            
                            ?>
                        
                        
                        </td>
                        <td class="center">

                            <a class="btn btn-info" href="view_product.php?id=<?php echo $product_info['product_id'];?>" title="View Product">
                                <i class="halflings-icon white zoom-in"></i>  
                            </a>  
                           
                            <?php if ($product_info['publication_status']==1) {?>
                            <a class="btn btn-success" href="?status=unpublish&&id=<?php echo $product_info['product_id'];?>" title="unpublish">
                                <i class="halflings-icon white thums-up"></i>  
                            </a>
                            <?php } else {?>
                                         <a class="btn btn-danger" href="?status=publish&&id=<?php echo $product_info['product_id']; ?>" title="publish">
                                        <i class="halflings-icon white thums-up"></i>  
                                         </a>
                            <?php }?>
                            <a class="btn btn-info" href="edit_product.php?id=<?php echo $product_info['product_id'];?>" title="Edit">
                                <i class="halflings-icon white edit"></i>  
                             </a>
                            <a class="btn btn-danger" href="?status=delete&&id=<?php echo $product_info['product_id'];?>" title="Delete" onclick="return check_delete_info();">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
             <?php }?>
                </tbody>
            </table>            
        </div>
    </div>
</div>


