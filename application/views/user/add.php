<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_role" class="control-label">User Role</label>
						<div class="form-group">
							<select name="user_role" class="form-control">
								<option value="">select</option>
								<?php 
								$user_role_values = array(
									'sysadmin'=>'Super Admin',
									'admin'=>'Administrator',
									'agent'=>'Agent',
								);

								foreach($user_role_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('user_role')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_password" class="control-label">User Password</label>
						<div class="form-group">
							<input type="password" name="user_password" value="<?php echo $this->input->post('user_password'); ?>" class="form-control" id="user_password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_nom" class="control-label">User Nom</label>
						<div class="form-group">
							<input type="text" name="user_nom" value="<?php echo $this->input->post('user_nom'); ?>" class="form-control" id="user_nom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_telephone" class="control-label">User Telephone</label>
						<div class="form-group">
							<input type="text" name="user_telephone" value="<?php echo $this->input->post('user_telephone'); ?>" class="form-control" id="user_telephone" />
							<span class="text-danger"><?php echo form_error('user_telephone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_email" class="control-label">User Email</label>
						<div class="form-group">
							<input type="text" name="user_email" value="<?php echo $this->input->post('user_email'); ?>" class="form-control" id="user_email" />
							<span class="text-danger"><?php echo form_error('user_email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_pseudo" class="control-label">User Pseudo</label>
						<div class="form-group">
							<input type="text" name="user_pseudo" value="<?php echo $this->input->post('user_pseudo'); ?>" class="form-control" id="user_pseudo" />
							<span class="text-danger"><?php echo form_error('user_pseudo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_type" class="control-label">User Type</label>
						<div class="form-group">
							<input type="text" name="user_type" value="<?php echo $this->input->post('user_type'); ?>" class="form-control" id="user_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_avatar" class="control-label">User Avatar</label>
						<div class="form-group">
							<input type="text" name="user_avatar" value="<?php echo $this->input->post('user_avatar'); ?>" class="form-control" id="user_avatar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_statut" class="control-label">User Statut</label>
						<div class="form-group">
							<input type="text" name="user_statut" value="<?php echo $this->input->post('user_statut'); ?>" class="form-control" id="user_statut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_created_at" class="control-label">User Created At</label>
						<div class="form-group">
							<input type="text" name="user_created_at" value="<?php echo $this->input->post('user_created_at'); ?>" class="has-datetimepicker form-control" id="user_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_created_by" class="control-label">User Created By</label>
						<div class="form-group">
							<input type="text" name="user_created_by" value="<?php echo $this->input->post('user_created_by'); ?>" class="form-control" id="user_created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_updated_at" class="control-label">User Updated At</label>
						<div class="form-group">
							<input type="text" name="user_updated_at" value="<?php echo $this->input->post('user_updated_at'); ?>" class="has-datetimepicker form-control" id="user_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_updated_by" class="control-label">User Updated By</label>
						<div class="form-group">
							<input type="text" name="user_updated_by" value="<?php echo $this->input->post('user_updated_by'); ?>" class="form-control" id="user_updated_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_deleted_at" class="control-label">User Deleted At</label>
						<div class="form-group">
							<input type="text" name="user_deleted_at" value="<?php echo $this->input->post('user_deleted_at'); ?>" class="has-datetimepicker form-control" id="user_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_deleted_by" class="control-label">User Deleted By</label>
						<div class="form-group">
							<input type="text" name="user_deleted_by" value="<?php echo $this->input->post('user_deleted_by'); ?>" class="form-control" id="user_deleted_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_biography" class="control-label">User Biography</label>
						<div class="form-group">
							<textarea name="user_biography" class="form-control" id="user_biography"><?php echo $this->input->post('user_biography'); ?></textarea>
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