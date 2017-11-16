<?php 
   $query_result= $obj_super_admin->select_contact_info();
?>





<div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Contact Id</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Message</th>
                        
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($contact_info = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td><?php echo $contact_info['contact_id']; ?></td>
                            <td class="center"><?php echo $contact_info['full_name']; ?></td>
                            <td class="center"><?php echo $contact_info['email_address']; ?></td>
                            <td class="center"><?php echo $contact_info['message']; ?></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>

