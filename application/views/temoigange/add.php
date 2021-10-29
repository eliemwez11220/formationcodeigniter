<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Temoigange Add</h3>
            </div>
            <?php echo form_open('temoigange/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="temoigange_nom" class="control-label">Temoigange Nom</label>
						<div class="form-group">
							<input type="text" name="temoigange_nom" value="<?php echo $this->input->post('temoigange_nom'); ?>" class="form-control" id="temoigange_nom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_email" class="control-label">Temoigange Email</label>
						<div class="form-group">
							<input type="text" name="temoigange_email" value="<?php echo $this->input->post('temoigange_email'); ?>" class="form-control" id="temoigange_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_profession" class="control-label">Temoigange Profession</label>
						<div class="form-group">
							<input type="text" name="temoigange_profession" value="<?php echo $this->input->post('temoigange_profession'); ?>" class="form-control" id="temoigange_profession" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_statut" class="control-label">Temoigange Statut</label>
						<div class="form-group">
							<input type="text" name="temoigange_statut" value="<?php echo $this->input->post('temoigange_statut'); ?>" class="form-control" id="temoigange_statut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_created_at" class="control-label">Temoigange Created At</label>
						<div class="form-group">
							<input type="text" name="temoigange_created_at" value="<?php echo $this->input->post('temoigange_created_at'); ?>" class="has-datetimepicker form-control" id="temoigange_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_created_by" class="control-label">Temoigange Created By</label>
						<div class="form-group">
							<input type="text" name="temoigange_created_by" value="<?php echo $this->input->post('temoigange_created_by'); ?>" class="form-control" id="temoigange_created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_updated_at" class="control-label">Temoigange Updated At</label>
						<div class="form-group">
							<input type="text" name="temoigange_updated_at" value="<?php echo $this->input->post('temoigange_updated_at'); ?>" class="has-datetimepicker form-control" id="temoigange_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_updated_by" class="control-label">Temoigange Updated By</label>
						<div class="form-group">
							<input type="text" name="temoigange_updated_by" value="<?php echo $this->input->post('temoigange_updated_by'); ?>" class="form-control" id="temoigange_updated_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_deleted_at" class="control-label">Temoigange Deleted At</label>
						<div class="form-group">
							<input type="text" name="temoigange_deleted_at" value="<?php echo $this->input->post('temoigange_deleted_at'); ?>" class="has-datetimepicker form-control" id="temoigange_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_deleted_by" class="control-label">Temoigange Deleted By</label>
						<div class="form-group">
							<input type="text" name="temoigange_deleted_by" value="<?php echo $this->input->post('temoigange_deleted_by'); ?>" class="form-control" id="temoigange_deleted_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="temoigange_description" class="control-label">Temoigange Description</label>
						<div class="form-group">
							<textarea name="temoigange_description" class="form-control" id="temoigange_description"><?php echo $this->input->post('temoigange_description'); ?></textarea>
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