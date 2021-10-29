<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Newsletters Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('newsletter/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Newsletter Uid</th>
						<th>Newsletter Nom</th>
						<th>Newsletter Email</th>
						<th>Newsletter Statut</th>
						<th>Newsletter Created At</th>
						<th>Newsletter Created By</th>
						<th>Newsletter Updated At</th>
						<th>Newsletter Updated By</th>
						<th>Newsletter Deleted At</th>
						<th>Newsletter Deleted By</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($newsletters as $n){ ?>
                    <tr>
						<td><?php echo $n['newsletter_uid']; ?></td>
						<td><?php echo $n['newsletter_nom']; ?></td>
						<td><?php echo $n['newsletter_email']; ?></td>
						<td><?php echo $n['newsletter_statut']; ?></td>
						<td><?php echo $n['newsletter_created_at']; ?></td>
						<td><?php echo $n['newsletter_created_by']; ?></td>
						<td><?php echo $n['newsletter_updated_at']; ?></td>
						<td><?php echo $n['newsletter_updated_by']; ?></td>
						<td><?php echo $n['newsletter_deleted_at']; ?></td>
						<td><?php echo $n['newsletter_deleted_by']; ?></td>
						<td>
                            <a href="<?php echo site_url('newsletter/edit/'.$n['newsletter_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('newsletter/remove/'.$n['newsletter_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
