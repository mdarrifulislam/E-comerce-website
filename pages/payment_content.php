<?php
if (isset($_POST['btn'])) {
    $obj_app->save_order_info($_POST);
}
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="well text-success" style="text-align: justify;">
                                <h3>You have to give us payment information in this system to complete your valuable order.</h3>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="well">
                                <form action="" method="post">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Cash On Delivery</th>
                                            <th><input type="radio" name="payment_type" value="cash_on_delivery"></th>
                                        </tr>
                                        
                                        <tr>
                                            <th>Bkas</th>
                                            <th><input type="radio" name="payment_type" value="bkas"></th>
                                        </tr>
                                    </table>
                                    <button type="submit" name="btn" class="btn btn-primary pull-right">Confirm Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









