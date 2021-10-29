<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des Articles</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('article/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>#</th>
						<th>Type</th>
						<th>Categorie</th>
						<th>Titre</th>
						<th>Etat</th>
						<th>Date Pub</th>
						<th>Création</th>
						<th>Actions</th>
                    </tr>
                    <?php 
                    $count = 1;

                    foreach($articles as $a){ ?>
                    <tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $a['article_type']; ?></td>
						<td><?php echo $a['categorie_libelle']; ?></td>
						<td><?php echo $a['article_titre']; ?></td>
						<td><?php echo $a['article_statut']; ?></td>
						<td><?php echo $a['article_date_pub']; ?></td>
						<td><?php echo $a['article_created_at']; ?></td>
						<td>
                            <a href="<?php echo site_url('article/view/'.$a['article_uid']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-eye"></span> Détails</a> 

                            <a href="<?php echo site_url('article/edit/'.$a['article_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            
                            <a href="<?php echo site_url('article/remove/'.$a['article_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
