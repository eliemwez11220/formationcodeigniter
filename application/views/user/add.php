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