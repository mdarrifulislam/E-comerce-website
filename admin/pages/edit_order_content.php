<?php
$order_id=$_GET['id'];
$query_result =$obj_super_admin->Select_order_info_by_id_in_edit($order_id);
$order_info = mysqli_fetch_assoc($query_result);
if (isset($_POST['btn_save'])) {
    $message = $obj_super_admin->update_order_info($_POST);
}
?>



<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Order Info</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2 style="color: #009900"><?php if (isset($message)) {echo $message; }?></h2>
        <div class="box-content">
            <form class="form-horizontal" action="" method="post" name="" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Order Status</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" value="<?php echo $order_info['order_status'];?>" name="order_status" id="typeahead"  data-provide="typeahead" data-items="4"  data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <input type="hidden" class="span6 typeahead" value="<?php echo $order_info['order_id'];?>" name="order_id" id="typeahead"  data-provide="typeahead" data-items="4"  data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                      </div>
                    </div>
 
                   
                    <div class="form-actions">
                        <button type="submit" name="btn_save" class="btn btn-primary">Update</button>
                        <button type="reset" name="btn_reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->
</div>

<script>
   document.forms['edit_product_name'].elements['publication_status'].value='<?php echo $product_info['publication_status'];?>'
</script>


