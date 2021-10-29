<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categories Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('category/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Categorie Uid</th>
						<th>Categorie Libelle</th>
						<th>Categorie Image</th>
						<th>Categorie Statut</th>
						<th>Categorie Created At</th>
						<th>Categorie Created By</th>
						<th>Categorie Updated At</th>
						<th>Categorie Updated By</th>
						<th>Categorie Deleted At</th>
						<th>Categorie Deleted By</th>
						<th>Categorie Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($categories as $c){ ?>
                    <tr>
						<td><?php echo $c['categorie_uid']; ?></td>
						<td><?php echo $c['categorie_libelle']; ?></td>
						<td><?php echo $c['categorie_image']; ?></td>
						<td><?php echo $c['categorie_statut']; ?></td>
						<td><?php echo $c['categorie_created_at']; ?></td>
						<td><?php echo $c['categorie_created_by']; ?></td>
						<td><?php echo $c['categorie_updated_at']; ?></td>
						<td><?php echo $c['categorie_updated_by']; ?></td>
						<td><?php echo $c['categorie_deleted_at']; ?></td>
						<td><?php echo $c['categorie_deleted_by']; ?></td>
						<td><?php echo $c['categorie_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('category/edit/'.$c['categorie_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('category/remove/'.$c['categorie_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
