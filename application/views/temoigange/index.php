<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Temoiganges Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('temoigange/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Temoigange Uid</th>
						<th>Temoigange Nom</th>
						<th>Temoigange Email</th>
						<th>Temoigange Profession</th>
						<th>Temoigange Statut</th>
						<th>Temoigange Created At</th>
						<th>Temoigange Created By</th>
						<th>Temoigange Updated At</th>
						<th>Temoigange Updated By</th>
						<th>Temoigange Deleted At</th>
						<th>Temoigange Deleted By</th>
						<th>Temoigange Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($temoiganges as $t){ ?>
                    <tr>
						<td><?php echo $t['temoigange_uid']; ?></td>
						<td><?php echo $t['temoigange_nom']; ?></td>
						<td><?php echo $t['temoigange_email']; ?></td>
						<td><?php echo $t['temoigange_profession']; ?></td>
						<td><?php echo $t['temoigange_statut']; ?></td>
						<td><?php echo $t['temoigange_created_at']; ?></td>
						<td><?php echo $t['temoigange_created_by']; ?></td>
						<td><?php echo $t['temoigange_updated_at']; ?></td>
						<td><?php echo $t['temoigange_updated_by']; ?></td>
						<td><?php echo $t['temoigange_deleted_at']; ?></td>
						<td><?php echo $t['temoigange_deleted_by']; ?></td>
						<td><?php echo $t['temoigange_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('temoigange/edit/'.$t['temoigange_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('temoigange/remove/'.$t['temoigange_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
