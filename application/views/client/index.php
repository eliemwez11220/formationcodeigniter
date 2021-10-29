<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Clients Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('client/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Client Uid</th>
						<th>Client Updated By</th>
						<th>Client Deleted At</th>
						<th>Client Deleted By</th>
						<th>Client Nom</th>
						<th>Client Email</th>
						<th>Client Telephone</th>
						<th>Client Profession</th>
						<th>Client Entreprise</th>
						<th>Client Objet</th>
						<th>Client Statut</th>
						<th>Client Created At</th>
						<th>Client Created By</th>
						<th>Client Updated At</th>
						<th>Client Message</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($clients as $c){ ?>
                    <tr>
						<td><?php echo $c['client_uid']; ?></td>
						<td><?php echo $c['client_updated_by']; ?></td>
						<td><?php echo $c['client_deleted_at']; ?></td>
						<td><?php echo $c['client_deleted_by']; ?></td>
						<td><?php echo $c['client_nom']; ?></td>
						<td><?php echo $c['client_email']; ?></td>
						<td><?php echo $c['client_telephone']; ?></td>
						<td><?php echo $c['client_profession']; ?></td>
						<td><?php echo $c['client_entreprise']; ?></td>
						<td><?php echo $c['client_objet']; ?></td>
						<td><?php echo $c['client_statut']; ?></td>
						<td><?php echo $c['client_created_at']; ?></td>
						<td><?php echo $c['client_created_by']; ?></td>
						<td><?php echo $c['client_updated_at']; ?></td>
						<td><?php echo $c['client_message']; ?></td>
						<td>
                            <a href="<?php echo site_url('client/edit/'.$c['client_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('client/remove/'.$c['client_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
