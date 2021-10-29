<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Client Edit</h3>
            </div>
			<?php echo form_open('client/edit/'.$client['client_uid']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="client_updated_by" class="control-label">Client Updated By</label>
						<div class="form-group">
							<input type="text" name="client_updated_by" value="<?php echo ($this->input->post('client_updated_by') ? $this->input->post('client_updated_by') : $client['client_updated_by']); ?>" class="form-control" id="client_updated_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_deleted_at" class="control-label">Client Deleted At</label>
						<div class="form-group">
							<input type="text" name="client_deleted_at" value="<?php echo ($this->input->post('client_deleted_at') ? $this->input->post('client_deleted_at') : $client['client_deleted_at']); ?>" class="has-datetimepicker form-control" id="client_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_deleted_by" class="control-label">Client Deleted By</label>
						<div class="form-group">
							<input type="text" name="client_deleted_by" value="<?php echo ($this->input->post('client_deleted_by') ? $this->input->post('client_deleted_by') : $client['client_deleted_by']); ?>" class="form-control" id="client_deleted_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_nom" class="control-label"><span class="text-danger">*</span>Client Nom</label>
						<div class="form-group">
							<input type="text" name="client_nom" value="<?php echo ($this->input->post('client_nom') ? $this->input->post('client_nom') : $client['client_nom']); ?>" class="form-control" id="client_nom" />
							<span class="text-danger"><?php echo form_error('client_nom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_email" class="control-label">Client Email</label>
						<div class="form-group">
							<input type="text" name="client_email" value="<?php echo ($this->input->post('client_email') ? $this->input->post('client_email') : $client['client_email']); ?>" class="form-control" id="client_email" />
							<span class="text-danger"><?php echo form_error('client_email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_telephone" class="control-label">Client Telephone</label>
						<div class="form-group">
							<input type="text" name="client_telephone" value="<?php echo ($this->input->post('client_telephone') ? $this->input->post('client_telephone') : $client['client_telephone']); ?>" class="form-control" id="client_telephone" />
							<span class="text-danger"><?php echo form_error('client_telephone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_profession" class="control-label">Client Profession</label>
						<div class="form-group">
							<input type="text" name="client_profession" value="<?php echo ($this->input->post('client_profession') ? $this->input->post('client_profession') : $client['client_profession']); ?>" class="form-control" id="client_profession" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_entreprise" class="control-label">Client Entreprise</label>
						<div class="form-group">
							<input type="text" name="client_entreprise" value="<?php echo ($this->input->post('client_entreprise') ? $this->input->post('client_entreprise') : $client['client_entreprise']); ?>" class="form-control" id="client_entreprise" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_objet" class="control-label">Client Objet</label>
						<div class="form-group">
							<input type="text" name="client_objet" value="<?php echo ($this->input->post('client_objet') ? $this->input->post('client_objet') : $client['client_objet']); ?>" class="form-control" id="client_objet" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_statut" class="control-label">Client Statut</label>
						<div class="form-group">
							<input type="text" name="client_statut" value="<?php echo ($this->input->post('client_statut') ? $this->input->post('client_statut') : $client['client_statut']); ?>" class="form-control" id="client_statut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_created_at" class="control-label">Client Created At</label>
						<div class="form-group">
							<input type="text" name="client_created_at" value="<?php echo ($this->input->post('client_created_at') ? $this->input->post('client_created_at') : $client['client_created_at']); ?>" class="has-datetimepicker form-control" id="client_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_created_by" class="control-label">Client Created By</label>
						<div class="form-group">
							<input type="text" name="client_created_by" value="<?php echo ($this->input->post('client_created_by') ? $this->input->post('client_created_by') : $client['client_created_by']); ?>" class="form-control" id="client_created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_updated_at" class="control-label">Client Updated At</label>
						<div class="form-group">
							<input type="text" name="client_updated_at" value="<?php echo ($this->input->post('client_updated_at') ? $this->input->post('client_updated_at') : $client['client_updated_at']); ?>" class="has-datetimepicker form-control" id="client_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_message" class="control-label">Client Message</label>
						<div class="form-group">
							<textarea name="client_message" class="form-control" id="client_message"><?php echo ($this->input->post('client_message') ? $this->input->post('client_message') : $client['client_message']); ?></textarea>
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