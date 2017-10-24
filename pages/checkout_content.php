 

<?php
 
$customer_id = isset($_SESSION['customer_id']);
if ($customer_id) {
    header("Location: shipping.php");
}


if (isset($_POST['btn'])) {
    $obj_app->save_customer_info($_POST);
}
if (isset($_POST['login_btn'])) {
    $message = $obj_app->user_login_check($_POST);
}
?>



<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="well text-success text-center">
                                <h3> You have to login in this system to complete your valuable order. If you are not 
                                    registered, registered now..
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="well">
                                <h3 class="text-center text-success">Registration Point Here.</h3>
                                <hr>
                                <form role="form" class="form-horizontal" action="" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">First Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="first_name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Last Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="last_name" required>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Email Address</label>
                                        <div class="col-lg-8">
                                            <input type="email" name="email_address" onblur="ajax_email_check(this.value, 'res');" required>
                                            <span id="res"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Password</label>
                                        <div class="col-lg-8">
                                            <input type="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Address</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" name="address" style="resize: vertical" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Phone Number</label>
                                        <div class="col-lg-8">
                                            <input type="number" name="phone_number" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">District Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="district_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-lg-offset-4 col-lg-8">
                                            <input type="submit" name="btn" id="reg_btn" class="btn btn-primary btn-block" value="Registration">
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="well">
                                <h3 class="text-center text-success">Login Point Here.</h3>
                                <h4 style="color: #ff0000"><?php if (isset($message)) {
    echo $message;
} ?></h4>
                                <hr>
                                <form role="form" class="form-horizontal" action="" method="post">


                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Email Address</label>
                                        <div class="col-lg-8">
                                            <input type="email" name="email_address" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Password</label>
                                        <div class="col-lg-8">
                                            <input type="password" name="password" required>
                                        </div>
                                    </div>



                                    <div class="form-group">

                                        <div class="col-lg-offset-4 col-lg-8">
                                            <input type="submit" name="login_btn" class="btn btn-primary btn-block" value="Login">
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


