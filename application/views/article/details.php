<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Article détails</h3>
              	<br>
              	<img src="<?= base_url('resources/img/'.$article['article_image']) ; ?>">
            </div>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="article_type" class="control-label"><span class="text-danger">*</span>Article Type</label>
						<div class="form-group">
							<select name="article_type" class="form-control">
								<option value="">select</option>
								<?php 
								$article_type_values = array(
									'news'=>'Actualités',
									'activity'=>'Activités',
									'tools'=>'Outils',
								);

								foreach($article_type_values as $value => $display_text)
								{
									$selected = ($value == $article['article_type']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('article_type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_categorie_uid" class="control-label">Categorie</label>
						<div class="form-group">
							<select name="article_categorie_uid" class="form-control">
								<option value="">select category</option>
								<?php 
								foreach($all_categories as $category)
								{
									$selected = ($category['categorie_uid'] == $article['article_categorie_uid']) ? ' selected="selected"' : "";

									echo '<option value="'.$category['categorie_uid'].'" '.$selected.'>'.$category['categorie_libelle'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('article_categorie_uid');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="article_titre" class="control-label"><span class="text-danger">*</span>Article Titre</label>
						<div class="form-group">
							<input type="text" name="article_titre" value="<?php echo ($this->input->post('article_titre') ? $this->input->post('article_titre') : $article['article_titre']); ?>" class="form-control" id="article_titre" />
							<span class="text-danger"><?php echo form_error('article_titre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_titre_slug" class="control-label">Article Titre Slug</label>
						<div class="form-group">
							<input type="text" name="article_titre_slug" value="<?php echo ($this->input->post('article_titre_slug') ? $this->input->post('article_titre_slug') : $article['article_titre_slug']); ?>" class="form-control" id="article_titre_slug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_statut" class="control-label">Article Statut</label>
						<div class="form-group">
							<input type="text" name="article_statut" value="<?php echo ($this->input->post('article_statut') ? $this->input->post('article_statut') : $article['article_statut']); ?>" class="form-control" id="article_statut" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="article_date_pub" class="control-label">Article Date Pub</label>
						<div class="form-group">
							<input type="text" name="article_date_pub" value="<?php echo ($this->input->post('article_date_pub') ? $this->input->post('article_date_pub') : $article['article_date_pub']); ?>" class=" form-control" id="article_date_pub" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_created_at" class="control-label">Article Created At</label>
						<div class="form-group">
							<input type="text" name="article_created_at" value="<?php echo ($this->input->post('article_created_at') ? $this->input->post('article_created_at') : $article['article_created_at']); ?>" class=" form-control" id="article_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_created_by" class="control-label">Article Created By</label>
						<div class="form-group">
							<input type="text" name="article_created_by" value="<?php echo ($this->input->post('article_created_by') ? $this->input->post('article_created_by') : $article['article_created_by']); ?>" class="form-control" id="article_created_by" />
							<span class="text-danger"><?php echo form_error('article_created_by');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_updated_at" class="control-label">Article Updated At</label>
						<div class="form-group">
							<input type="text" name="article_updated_at" value="<?php echo ($this->input->post('article_updated_at') ? $this->input->post('article_updated_at') : $article['article_updated_at']); ?>" class=" form-control" id="article_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_updated_by" class="control-label">Article Updated By</label>
						<div class="form-group">
							<input type="text" name="article_updated_by" value="<?php echo ($this->input->post('article_updated_by') ? $this->input->post('article_updated_by') : $article['article_updated_by']); ?>" class="form-control" id="article_updated_by" />
							<span class="text-danger"><?php echo form_error('article_updated_by');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_deleted_at" class="control-label">Article Deleted At</label>
						<div class="form-group">
							<input type="text" name="article_deleted_at" value="<?php echo ($this->input->post('article_deleted_at') ? $this->input->post('article_deleted_at') : $article['article_deleted_at']); ?>" class="form-control" id="article_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_deleted_by" class="control-label">Article Deleted By</label>
						<div class="form-group">
							<input type="text" name="article_deleted_by" value="<?php echo ($this->input->post('article_deleted_by') ? $this->input->post('article_deleted_by') : $article['article_deleted_by']); ?>" class="form-control" id="article_deleted_by" />
							<span class="text-danger"><?php echo form_error('article_deleted_by');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="article_sommaire" class="control-label">Article Sommaire</label>
						<div class="form-group">
							<textarea name="article_sommaire" class="form-control" id="article_sommaire"><?php echo ($this->input->post('article_sommaire') ? $this->input->post('article_sommaire') : $article['article_sommaire']); ?></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<label for="article_description" class="control-label">Article Description</label>
						<div class="form-group">
							<textarea name="article_description" class="form-control" id="article_description"><?php echo ($this->input->post('article_description') ? $this->input->post('article_description') : $article['article_description']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button onclick="window.print();" type="button" class="btn btn-success">
					<i class="fa fa-print"></i> Imprimer
				</button>
	        </div>				
		</div>
    </div>
</div>