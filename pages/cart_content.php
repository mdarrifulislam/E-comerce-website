<?php
if (isset($_POST['btn'])) {
    $message = $obj_app->update_product_by_temp_cart_id($_POST);
}
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $temp_cart_id = $_GET['id'];
        $message = $obj_app->delete_product_by_temp_cart_id($temp_cart_id);
    }
}

$session_id = session_id();
$query_result = $obj_app->select_cart_product_by_session_id($session_id);
?>


<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">

            <h3 style="color: #009900; text-align: center;"><?php
                if (isset($message)) {
                    echo $message;
                    unset($message);
                }
                ?></h3>

        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sum = 0;
                    while ($cart_product = mysqli_fetch_assoc($query_result)) {
                        ?> 
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="assets/<?php echo $cart_product['product_image']; ?>" alt="" width="50px" height="50"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?php echo $cart_product['product_name']; ?></a></h4>
                                <p>Web ID: <?php echo $cart_product['product_id']; ?></p>
                            </td>
                            <td class="cart_price">
                                <p>BDT <?php echo $cart_product['product_price']; ?></p>
                            </td>
                            <td class="cart_quantity">
                                <form action="" method="post">
                                    <div class="cart_quantity_button">
                                        <input class="cart_quantity_input btn-sm" type="text" name="product_quantity" value="<?php echo $cart_product['product_quantity']; ?>" autocomplete="off" size="2">
                                        <input class="cart_quantity_input btn-sm" type="hidden" name="temp_cart_id" value="<?php echo $cart_product['temp_cart_id']; ?>" autocomplete="off" size="2">

                                        <button type="submit" name="btn" class="cart_quantity-down btn-primary btn-sm" title="Update">
                                            <span class="glyphicon glyphicon-upload"></span>  
                                        </button>
                                    </div>
                                </form>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">BDT 
                                    <?php
                                    $sub_total = $cart_product['product_price'] * $cart_product['product_quantity'];
                                    echo $sub_total;
                                    ?>
                                </p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="?status=delete&&id=<?php echo $cart_product['temp_cart_id']; ?>" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <?php
                        $sum = $sum + $sub_total;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="table-responsive cart_info" style="width: 60%; float: right;">
            <table class="table table-condensed">
                <tr>
                    <th>Sub Total: </th>
                    <th class="pull-right">BDT <?php echo $sum; ?> </th>
                </tr>
                <tr>
                    <th>Vat Total: </th>
                    <th class="pull-right">BDT 
                        <?php
                        $vat = ($sum * 10) / 100;
                        echo $vat;
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Grand Total: </th>
                    <th class="pull-right">BDT 
                        <?php
                        $grand_total = $sum + $vat;
                        $_SESSION['order_total'] = $grand_total;
                        echo $grand_total;
                        ?>
                    </th>
                </tr>

            </table>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="well">
                        <?php
                        ///$id=  isset($_SESSION['shipping_id']);
                        $customer_id = isset($_SESSION['customer_id']);
                        $shipping_id = isset($_SESSION['shipping_id']);
                         


                        if ($customer_id == NULL && $shipping_id==NULL) {
                            ?>
                            <a href="checkout.php" class="btn btn-primary pull-right">Checkout</a> 
                        <?php } else if ($customer_id != NULL && $shipping_id == NULL) { ?>
                            <a href="shipping.php" class="btn btn-primary pull-right">Checkout</a> 
                        <?php } else if ($customer_id != NULL && $shipping_id != NULL) { ?>
                            <a href="payment.php" class="btn btn-primary pull-right">Checkout</a>
                        <?php } ?>

                        <a href="index.php" class="btn btn-primary">Continue Shopping</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>