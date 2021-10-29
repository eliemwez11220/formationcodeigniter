<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Message Edit</h3>
            </div>
			<?php echo form_open('message/edit/'.$message['message_uid']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="message_client_recepteur" class="control-label">Client</label>
						<div class="form-group">
							<select name="message_client_recepteur" class="form-control">
								<option value="">select client</option>
								<?php 
								foreach($all_clients as $client)
								{
									$selected = ($client['client_uid'] == $message['message_client_recepteur']) ? ' selected="selected"' : "";

									echo '<option value="'.$client['client_uid'].'" '.$selected.'>'.$client['client_nom'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_objet" class="control-label">Message Objet</label>
						<div class="form-group">
							<input type="text" name="message_objet" value="<?php echo ($this->input->post('message_objet') ? $this->input->post('message_objet') : $message['message_objet']); ?>" class="form-control" id="message_objet" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_statut" class="control-label">Message Statut</label>
						<div class="form-group">
							<input type="text" name="message_statut" value="<?php echo ($this->input->post('message_statut') ? $this->input->post('message_statut') : $message['message_statut']); ?>" class="form-control" id="message_statut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_created_at" class="control-label">Message Created At</label>
						<div class="form-group">
							<input type="text" name="message_created_at" value="<?php echo ($this->input->post('message_created_at') ? $this->input->post('message_created_at') : $message['message_created_at']); ?>" class="has-datetimepicker form-control" id="message_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_created_by" class="control-label">Message Created By</label>
						<div class="form-group">
							<input type="text" name="message_created_by" value="<?php echo ($this->input->post('message_created_by') ? $this->input->post('message_created_by') : $message['message_created_by']); ?>" class="form-control" id="message_created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_updated_at" class="control-label">Message Updated At</label>
						<div class="form-group">
							<input type="text" name="message_updated_at" value="<?php echo ($this->input->post('message_updated_at') ? $this->input->post('message_updated_at') : $message['message_updated_at']); ?>" class="has-datetimepicker form-control" id="message_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_updated_by" class="control-label">Message Updated By</label>
						<div class="form-group">
							<input type="text" name="message_updated_by" value="<?php echo ($this->input->post('message_updated_by') ? $this->input->post('message_updated_by') : $message['message_updated_by']); ?>" class="form-control" id="message_updated_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_deleted_at" class="control-label">Message Deleted At</label>
						<div class="form-group">
							<input type="text" name="message_deleted_at" value="<?php echo ($this->input->post('message_deleted_at') ? $this->input->post('message_deleted_at') : $message['message_deleted_at']); ?>" class="has-datetimepicker form-control" id="message_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_deleted_by" class="control-label">Message Deleted By</label>
						<div class="form-group">
							<input type="text" name="message_deleted_by" value="<?php echo ($this->input->post('message_deleted_by') ? $this->input->post('message_deleted_by') : $message['message_deleted_by']); ?>" class="form-control" id="message_deleted_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_description" class="control-label">Message Description</label>
						<div class="form-group">
							<textarea name="message_description" class="form-control" id="message_description"><?php echo ($this->input->post('message_description') ? $this->input->post('message_description') : $message['message_description']); ?></textarea>
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