<?php



$product_id=$_GET['id'];
$query_result=$obj_super_admin->Select_product_info_by_id($product_id);
$product_info=mysqli_fetch_assoc($query_result);
 
if (isset($_POST['btn_save'])) {
    $message = $obj_super_admin->update_product_info($_POST);
}
?>




<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product Info</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2 style="color: #009900"><?php if (isset($message)) {echo $message; }?></h2>
        <div class="box-content">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" value="<?php echo $product_info['product_name'];?>" name="product_name" id="typeahead"  data-provide="typeahead" data-items="4"  data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block">Start typing to add product!</p>
                        </div>
                    </div>
 
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Category Name</label>
                        <div class="controls">
                            <select id="selectError3" name="category_id">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Manufacturer Name</label>
                        <div class="controls">
                            <select id="selectError3" name="manufacturer_id">
                                <option>Select Manufacturer Name</option> 
                                <?php while ($manufacturer_info = mysqli_fetch_assoc($manufacturer_result)){?> 
                                <option value="<?php echo $manufacturer_info['manufacturer_id'];?>"><?php echo $manufacturer_info['manufacturer_name'];?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Price</label>
                        <div class="controls">
                            <input type="number" class="span6 typeahead" value="<?php echo $product_info['product_price'];?>" name="product_price" id="typeahead"  data-provide="typeahead" data-items="4"  data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                       </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Stock Quantity</label>
                        <div class="controls">
                            <input type="number" class="span6 typeahead"  value="<?php echo $product_info['stock_quantity'];?>"name="stock_quantity" id="typeahead"  data-provide="typeahead" data-items="4"  data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                       </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product SKU</label>
                        <div class="controls">
                            <input type="number" value="<?php echo $product_info['product_sku'];?>" class="span6 typeahead" name="product_sku" id="typeahead"  data-provide="typeahead" data-items="4"  data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                       </div>
                    </div>
                    
                    


                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_short_description" id="textarea2" rows="3">
                            <?php echo $product_info['product_short_description'];?>
                            
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_long_description" id="textarea2" rows="3">
                                <?php echo $product_info['product_long_description'];?>
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="product_image" id="typeahead"  data-provide="typeahead" data-items="4"  data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                       </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <option>--------Publication Status--------</option>
                                <option value="0">Unpublish</option>
                                <option value="1">Publish</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="btn_save" class="btn btn-primary">Save Product</button>
                        <button type="reset" name="btn_reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div>

