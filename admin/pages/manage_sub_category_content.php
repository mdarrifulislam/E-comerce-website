<?php
if (isset($_GET['status'])) {
    $sub_category_id = $_GET['id'];
    if ($_GET['status'] == 'unpublish') {

        $message = $obj_super_admin->unpublish_sub_category_id($sub_category_id);
    } else if ($_GET['status'] == 'publish') {

        $message = $obj_super_admin->publish_sub_category_id($sub_category_id);
    } else if ($_GET['status'] == 'delete') {

        $message = $obj_super_admin->delete_sub_category_id($sub_category_id);
    }
}



$query_result = $obj_super_admin->select_all_admin_sub_category();
?>


<!--    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="admin_master.php">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Tables</a></li>
    </ul>-->





<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
                        <th>Sub Category Id</th>
                        <th>Sub Category Name</th>
                        <th>Sub Category Description</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($sub_category_info = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td><?php echo $sub_category_info['sub_category_id']; ?></td>
                            <td class="center"><?php echo $sub_category_info['sub_category_name']; ?></td>
                            <td class="center"><?php echo $sub_category_info['sub_category_description']; ?></td>
                            <td class="center"><?php
                                if ($sub_category_info['publication_status'] == 1) {
                                    echo 'Publish';
                                } else {
                                    echo 'Unpublish';
                                }
                                ?>
                            </td>
                            <td class="center">

                                <?php if ($sub_category_info['publication_status'] == 1) { ?>
                                    <a class="btn btn-success" href="?status=unpublish&&id=<?php echo $sub_category_info['sub_category_id']; ?>" title="unpublish">
                                        <i class="halflings-icon white arrow-down"></i>  
                                    </a>
                                <?php } else { ?>
                                    <a class="btn btn-danger" href="?status=publish&&id=<?php echo $sub_category_info['sub_category_id']; ?>" title="publish">
                                        <i class="halflings-icon white arrow-up"></i>  
                                    </a>
                                <?php } ?>
                                <a class="btn btn-info" href="edit_sub_category.php?id=<?php echo $sub_category_info['sub_category_id']; ?>" title="Edit">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="?status=delete&&id=<?php echo $sub_category_info['sub_category_id']; ?>" title="Delete" onclick="return check_delete_info();">
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

