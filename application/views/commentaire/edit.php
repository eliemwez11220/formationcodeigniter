<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Commentaire Edit</h3>
            </div>
			<?php echo form_open('commentaire/edit/'.$commentaire['commentaire_uid']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="commentaire_article_uid" class="control-label">Article</label>
						<div class="form-group">
							<select name="commentaire_article_uid" class="form-control">
								<option value="">select article</option>
								<?php 
								foreach($all_articles as $article)
								{
									$selected = ($article['article_uid'] == $commentaire['commentaire_article_uid']) ? ' selected="selected"' : "";

									echo '<option value="'.$article['article_uid'].'" '.$selected.'>'.$article['article_titre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_user" class="control-label">Commentaire User</label>
						<div class="form-group">
							<input type="text" name="commentaire_user" value="<?php echo ($this->input->post('commentaire_user') ? $this->input->post('commentaire_user') : $commentaire['commentaire_user']); ?>" class="form-control" id="commentaire_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_statut" class="control-label">Commentaire Statut</label>
						<div class="form-group">
							<input type="text" name="commentaire_statut" value="<?php echo ($this->input->post('commentaire_statut') ? $this->input->post('commentaire_statut') : $commentaire['commentaire_statut']); ?>" class="form-control" id="commentaire_statut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_created_at" class="control-label">Commentaire Created At</label>
						<div class="form-group">
							<input type="text" name="commentaire_created_at" value="<?php echo ($this->input->post('commentaire_created_at') ? $this->input->post('commentaire_created_at') : $commentaire['commentaire_created_at']); ?>" class="has-datetimepicker form-control" id="commentaire_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_created_by" class="control-label">Commentaire Created By</label>
						<div class="form-group">
							<input type="text" name="commentaire_created_by" value="<?php echo ($this->input->post('commentaire_created_by') ? $this->input->post('commentaire_created_by') : $commentaire['commentaire_created_by']); ?>" class="form-control" id="commentaire_created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_updated_at" class="control-label">Commentaire Updated At</label>
						<div class="form-group">
							<input type="text" name="commentaire_updated_at" value="<?php echo ($this->input->post('commentaire_updated_at') ? $this->input->post('commentaire_updated_at') : $commentaire['commentaire_updated_at']); ?>" class="has-datetimepicker form-control" id="commentaire_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_updated_by" class="control-label">Commentaire Updated By</label>
						<div class="form-group">
							<input type="text" name="commentaire_updated_by" value="<?php echo ($this->input->post('commentaire_updated_by') ? $this->input->post('commentaire_updated_by') : $commentaire['commentaire_updated_by']); ?>" class="form-control" id="commentaire_updated_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_deleted_at" class="control-label">Commentaire Deleted At</label>
						<div class="form-group">
							<input type="text" name="commentaire_deleted_at" value="<?php echo ($this->input->post('commentaire_deleted_at') ? $this->input->post('commentaire_deleted_at') : $commentaire['commentaire_deleted_at']); ?>" class="has-datetimepicker form-control" id="commentaire_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_deleted_by" class="control-label">Commentaire Deleted By</label>
						<div class="form-group">
							<input type="text" name="commentaire_deleted_by" value="<?php echo ($this->input->post('commentaire_deleted_by') ? $this->input->post('commentaire_deleted_by') : $commentaire['commentaire_deleted_by']); ?>" class="form-control" id="commentaire_deleted_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="commentaire_description" class="control-label">Commentaire Description</label>
						<div class="form-group">
							<textarea name="commentaire_description" class="form-control" id="commentaire_description"><?php echo ($this->input->post('commentaire_description') ? $this->input->post('commentaire_description') : $commentaire['commentaire_description']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>