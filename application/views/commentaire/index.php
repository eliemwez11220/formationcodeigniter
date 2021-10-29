<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Commentaires Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('commentaire/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Commentaire Uid</th>
						<th>Commentaire Article Uid</th>
						<th>Commentaire User</th>
						<th>Commentaire Statut</th>
						<th>Commentaire Created At</th>
						<th>Commentaire Created By</th>
						<th>Commentaire Updated At</th>
						<th>Commentaire Updated By</th>
						<th>Commentaire Deleted At</th>
						<th>Commentaire Deleted By</th>
						<th>Commentaire Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($commentaires as $c){ ?>
                    <tr>
						<td><?php echo $c['commentaire_uid']; ?></td>
						<td><?php echo $c['commentaire_article_uid']; ?></td>
						<td><?php echo $c['commentaire_user']; ?></td>
						<td><?php echo $c['commentaire_statut']; ?></td>
						<td><?php echo $c['commentaire_created_at']; ?></td>
						<td><?php echo $c['commentaire_created_by']; ?></td>
						<td><?php echo $c['commentaire_updated_at']; ?></td>
						<td><?php echo $c['commentaire_updated_by']; ?></td>
						<td><?php echo $c['commentaire_deleted_at']; ?></td>
						<td><?php echo $c['commentaire_deleted_by']; ?></td>
						<td><?php echo $c['commentaire_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('commentaire/edit/'.$c['commentaire_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('commentaire/remove/'.$c['commentaire_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
