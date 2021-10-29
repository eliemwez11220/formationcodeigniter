<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Service Add</h3>
            </div>
            <?php echo form_open('service/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="service_libelle" class="control-label"><span class="text-danger">*</span>Service Libelle</label>
						<div class="form-group">
							<input type="text" name="service_libelle" value="<?php echo $this->input->post('service_libelle'); ?>" class="form-control" id="service_libelle" />
							<span class="text-danger"><?php echo form_error('service_libelle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_image" class="control-label">Service Image</label>
						<div class="form-group">
							<input type="text" name="service_image" value="<?php echo $this->input->post('service_image'); ?>" class="form-control" id="service_image" />
							<span class="text-danger"><?php echo form_error('service_image');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_statut" class="control-label">Service Statut</label>
						<div class="form-group">
							<input type="text" name="service_statut" value="<?php echo $this->input->post('service_statut'); ?>" class="form-control" id="service_statut" />
							<span class="text-danger"><?php echo form_error('service_statut');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_created_at" class="control-label">Service Created At</label>
						<div class="form-group">
							<input type="text" name="service_created_at" value="<?php echo $this->input->post('service_created_at'); ?>" class="has-datetimepicker form-control" id="service_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_created_by" class="control-label">Service Created By</label>
						<div class="form-group">
							<input type="text" name="service_created_by" value="<?php echo $this->input->post('service_created_by'); ?>" class="form-control" id="service_created_by" />
							<span class="text-danger"><?php echo form_error('service_created_by');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_updated_at" class="control-label">Service Updated At</label>
						<div class="form-group">
							<input type="text" name="service_updated_at" value="<?php echo $this->input->post('service_updated_at'); ?>" class="has-datetimepicker form-control" id="service_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_updated_by" class="control-label">Service Updated By</label>
						<div class="form-group">
							<input type="text" name="service_updated_by" value="<?php echo $this->input->post('service_updated_by'); ?>" class="form-control" id="service_updated_by" />
							<span class="text-danger"><?php echo form_error('service_updated_by');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_deleted_at" class="control-label">Service Deleted At</label>
						<div class="form-group">
							<input type="text" name="service_deleted_at" value="<?php echo $this->input->post('service_deleted_at'); ?>" class="has-datetimepicker form-control" id="service_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_deleted_by" class="control-label">Service Deleted By</label>
						<div class="form-group">
							<input type="text" name="service_deleted_by" value="<?php echo $this->input->post('service_deleted_by'); ?>" class="form-control" id="service_deleted_by" />
							<span class="text-danger"><?php echo form_error('service_deleted_by');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_description" class="control-label">Service Description</label>
						<div class="form-group">
							<textarea name="service_description" class="form-control" id="service_description"><?php echo $this->input->post('service_description'); ?></textarea>
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