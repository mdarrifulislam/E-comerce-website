<?php
$id = $_SESSION['customer_id'];
if ($id == NULL) {
    header("Location: login.php");
}
if (isset($_SESSION['customer_id'])) {
    $customer_id = $_SESSION['customer_id'];
    $query_result = $obj_app->select_profile_info($customer_id);
    $customer_info = mysqli_fetch_assoc($query_result);
    $result = $obj_app->select_order_info($customer_id);
//    $get_order_path= $obj_app->select_order_detail_info_by_id($customer_id);
//    $order_status_info= mysqli_fetch_assoc($get_order_path);
    
}





?>

<table width='40%' style="margin-left: 100px;" cellpadding='15'>
    <tr>
        <th>Full Name:</th>
        <td><?php echo $customer_info['first_name'] . ' ' . $customer_info['last_name']; ?></td>
    </tr>
    <tr>
        <th>Email Address:</th>
        <td><?php echo $customer_info['email_address']; ?></td>
    </tr>
    <tr>
        <th>Address:</th>
        <td><?php echo $customer_info['address']; ?></td>
    </tr>
    <tr>
        <th>Phone Number:</th>
        <td><?php echo $customer_info['phone_number']; ?></td>
    </tr>
    <tr>
        <th>District Name:</th>
        <td><?php echo $customer_info['district_name']; ?></td>
    </tr>

</table>

<table  width='70%' style="margin-left: 100px; margin-top: 50px;margin-bottom: 50px; border: 2px dotted orange;" cellpadding='15' align="center">
    <tr style="border: 2px dotted orange;">
        <th>Ordered Product</th>
        <th>Product Quantity</th>
        <th>Product Price</th>
        <th>Order Status</th>
        <th>Order total</th>
        <th>Order date</th>
        

    </tr>
<?php while ($order_info = mysqli_fetch_assoc($result)) { ?>
        <tr style="border-bottom: 2px dotted orange;">
            <td><?php echo $order_info['product_name']; ?></td>
            <td><?php echo $order_info['product_price']; ?></td>
            <td><?php echo $order_info['product_quantity']; ?></td>
            <td><?php echo $order_info['order_status']?></td>
            <td><?php echo $order_info['order_total']?></td>
            <td><?php echo $order_info['order_date']?></td>
         

        </tr>
<?php } ?>
</table>



















