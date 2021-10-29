<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Services Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('service/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Service Uid</th>
						<th>Service Libelle</th>
						<th>Service Image</th>
						<th>Service Statut</th>
						<th>Service Created At</th>
						<th>Service Created By</th>
						<th>Service Updated At</th>
						<th>Service Updated By</th>
						<th>Service Deleted At</th>
						<th>Service Deleted By</th>
						<th>Service Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($services as $s){ ?>
                    <tr>
						<td><?php echo $s['service_uid']; ?></td>
						<td><?php echo $s['service_libelle']; ?></td>
						<td><?php echo $s['service_image']; ?></td>
						<td><?php echo $s['service_statut']; ?></td>
						<td><?php echo $s['service_created_at']; ?></td>
						<td><?php echo $s['service_created_by']; ?></td>
						<td><?php echo $s['service_updated_at']; ?></td>
						<td><?php echo $s['service_updated_by']; ?></td>
						<td><?php echo $s['service_deleted_at']; ?></td>
						<td><?php echo $s['service_deleted_by']; ?></td>
						<td><?php echo $s['service_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('service/edit/'.$s['service_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('service/remove/'.$s['service_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
