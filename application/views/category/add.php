<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Category Add</h3>
            </div>
            <?php echo form_open('category/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="categorie_libelle" class="control-label"><span class="text-danger">*</span>Categorie Libelle</label>
						<div class="form-group">
							<input type="text" name="categorie_libelle" value="<?php echo $this->input->post('categorie_libelle'); ?>" class="form-control" id="categorie_libelle" />
							<span class="text-danger"><?php echo form_error('categorie_libelle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_image" class="control-label">Categorie Image</label>
						<div class="form-group">
							<input type="text" name="categorie_image" value="<?php echo $this->input->post('categorie_image'); ?>" class="form-control" id="categorie_image" />
							<span class="text-danger"><?php echo form_error('categorie_image');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_statut" class="control-label">Categorie Statut</label>
						<div class="form-group">
							<input type="text" name="categorie_statut" value="<?php echo $this->input->post('categorie_statut'); ?>" class="form-control" id="categorie_statut" />
							<span class="text-danger"><?php echo form_error('categorie_statut');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_created_at" class="control-label">Categorie Created At</label>
						<div class="form-group">
							<input type="text" name="categorie_created_at" value="<?php echo $this->input->post('categorie_created_at'); ?>" class="has-datetimepicker form-control" id="categorie_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_created_by" class="control-label">Categorie Created By</label>
						<div class="form-group">
							<input type="text" name="categorie_created_by" value="<?php echo $this->input->post('categorie_created_by'); ?>" class="form-control" id="categorie_created_by" />
							<span class="text-danger"><?php echo form_error('categorie_created_by');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_updated_at" class="control-label">Categorie Updated At</label>
						<div class="form-group">
							<input type="text" name="categorie_updated_at" value="<?php echo $this->input->post('categorie_updated_at'); ?>" class="has-datetimepicker form-control" id="categorie_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_updated_by" class="control-label">Categorie Updated By</label>
						<div class="form-group">
							<input type="text" name="categorie_updated_by" value="<?php echo $this->input->post('categorie_updated_by'); ?>" class="form-control" id="categorie_updated_by" />
							<span class="text-danger"><?php echo form_error('categorie_updated_by');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_deleted_at" class="control-label">Categorie Deleted At</label>
						<div class="form-group">
							<input type="text" name="categorie_deleted_at" value="<?php echo $this->input->post('categorie_deleted_at'); ?>" class="has-datetimepicker form-control" id="categorie_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_deleted_by" class="control-label">Categorie Deleted By</label>
						<div class="form-group">
							<input type="text" name="categorie_deleted_by" value="<?php echo $this->input->post('categorie_deleted_by'); ?>" class="form-control" id="categorie_deleted_by" />
							<span class="text-danger"><?php echo form_error('categorie_deleted_by');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_description" class="control-label">Categorie Description</label>
						<div class="form-group">
							<textarea name="categorie_description" class="form-control" id="categorie_description"><?php echo $this->input->post('categorie_description'); ?></textarea>
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