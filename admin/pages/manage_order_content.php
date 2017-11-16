<?php
if (isset($_GET['status'])) {
    $order_id = $_GET['id'];
    if ($_GET['status'] == 'delete') {
        $message = $obj_super_admin->delete_order_info($order_id);
    }
}



$query_result = $obj_super_admin->select_all_order_info();
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
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Order Total</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th>Actions</th> 
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($order_info = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td><?php echo $order_info['order_id']; ?></td>
                            <td class="center"><?php echo $order_info['first_name'] . ' ' . $order_info['last_name']; ?></td>
                            <td class="center"><?php echo $order_info['order_total']; ?></td>
                            <td class="center"><?php echo $order_info['order_date']; ?></td>
                            <td class="center"><?php echo $order_info['order_status']; ?></td>

                            
                            <td class="center">

                                <a class="btn btn-info" href="view_order.php?id=<?php echo $order_info['order_id']; ?>" title="View Order details">
                                    <i class="halflings-icon white zoom-in"></i>  
                                </a>
                                <a class="btn btn-default" href="view_invoice.php?id=<?php echo $order_info['order_id']; ?>" title="View Invoice">
                                    <i class="halflings-icon white zoom-in"></i>  
                                </a>


                                <a class="btn btn-success" href="edit_order.php?id=<?php echo $order_info['order_id'] ;?>" title="Edit Order">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="?status=delete&&id=<?php echo $order_info['order_id']; ?>" title="Delete Order" onclick="return check_delete_info();">
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div>
</div>



