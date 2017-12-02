<?php
if (isset($_POST['btn'])) {
    $obj_app->update_shipping_info($_POST);
}

$shipping_id = $_GET['id'];
$query_result = $obj_app->select_shipping_info_by_id($shipping_id);
$customer_info = mysqli_fetch_assoc($query_result);
?>



<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="well text-success" style="text-align: justify;">
                                <h3>Well come <b style="color: #cc0000;"><?php echo $_SESSION['customer_name']; ?></b> , You can update product shipping information in this system to complete your valuable order. 
                                    If you wanna change or update , then just change shipping information and  press on "Update Shipping Info" button.
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <div class="well">
                                <h3 class="text-center text-success">Product Shipping Point Here.</h3>
                                <hr>
                                <form role="form" class="form-horizontal" action="" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Full Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="full_name"  class="form-control" value="<?php echo $customer_info['full_name']?>" required>
                                            <input type="hidden" name="shipping_id"  class="form-control" value="<?php echo $customer_info['shipping_id']?> ">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Email Address</label> 
                                        <div class="col-lg-8">
                                            <input type="email" name="email_address" required class="form-control" value="<?php echo $customer_info['email_address']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Address</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" name="address" required style="resize: vertical"><?php echo $customer_info['address']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Phone Number</label>
                                        <div class="col-lg-8">
                                            <input type="number" name="phone_number" required class="form-control" value="<?php echo $customer_info['phone_number']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">District Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="district_name" required class="form-control" value="<?php echo $customer_info['district_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-lg-offset-4 col-lg-8">
                                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Shipping Info">
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


