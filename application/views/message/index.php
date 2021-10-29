<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Messages Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('message/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Message Uid</th>
						<th>Message Client Recepteur</th>
						<th>Message Objet</th>
						<th>Message Statut</th>
						<th>Message Created At</th>
						<th>Message Created By</th>
						<th>Message Updated At</th>
						<th>Message Updated By</th>
						<th>Message Deleted At</th>
						<th>Message Deleted By</th>
						<th>Message Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($messages as $m){ ?>
                    <tr>
						<td><?php echo $m['message_uid']; ?></td>
						<td><?php echo $m['message_client_recepteur']; ?></td>
						<td><?php echo $m['message_objet']; ?></td>
						<td><?php echo $m['message_statut']; ?></td>
						<td><?php echo $m['message_created_at']; ?></td>
						<td><?php echo $m['message_created_by']; ?></td>
						<td><?php echo $m['message_updated_at']; ?></td>
						<td><?php echo $m['message_updated_by']; ?></td>
						<td><?php echo $m['message_deleted_at']; ?></td>
						<td><?php echo $m['message_deleted_by']; ?></td>
						<td><?php echo $m['message_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('message/edit/'.$m['message_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('message/remove/'.$m['message_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
