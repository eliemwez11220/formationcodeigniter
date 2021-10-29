<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>User Uid</th>
						<th>User Role</th>
						<th>User Password</th>
						<th>User Nom</th>
						<th>User Telephone</th>
						<th>User Email</th>
						<th>User Pseudo</th>
						<th>User Type</th>
						<th>User Avatar</th>
						<th>User Statut</th>
						<th>User Created At</th>
						<th>User Created By</th>
						<th>User Updated At</th>
						<th>User Updated By</th>
						<th>User Deleted At</th>
						<th>User Deleted By</th>
						<th>User Biography</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['user_uid']; ?></td>
						<td><?php echo $u['user_role']; ?></td>
						<td><?php echo $u['user_password']; ?></td>
						<td><?php echo $u['user_nom']; ?></td>
						<td><?php echo $u['user_telephone']; ?></td>
						<td><?php echo $u['user_email']; ?></td>
						<td><?php echo $u['user_pseudo']; ?></td>
						<td><?php echo $u['user_type']; ?></td>
						<td><?php echo $u['user_avatar']; ?></td>
						<td><?php echo $u['user_statut']; ?></td>
						<td><?php echo $u['user_created_at']; ?></td>
						<td><?php echo $u['user_created_by']; ?></td>
						<td><?php echo $u['user_updated_at']; ?></td>
						<td><?php echo $u['user_updated_by']; ?></td>
						<td><?php echo $u['user_deleted_at']; ?></td>
						<td><?php echo $u['user_deleted_by']; ?></td>
						<td><?php echo $u['user_biography']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['user_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['user_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
