<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Newsletter Edit</h3>
            </div>
			<?php echo form_open('newsletter/edit/'.$newsletter['newsletter_uid']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="newsletter_nom" class="control-label">Newsletter Nom</label>
						<div class="form-group">
							<input type="text" name="newsletter_nom" value="<?php echo ($this->input->post('newsletter_nom') ? $this->input->post('newsletter_nom') : $newsletter['newsletter_nom']); ?>" class="form-control" id="newsletter_nom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_email" class="control-label">Newsletter Email</label>
						<div class="form-group">
							<input type="text" name="newsletter_email" value="<?php echo ($this->input->post('newsletter_email') ? $this->input->post('newsletter_email') : $newsletter['newsletter_email']); ?>" class="form-control" id="newsletter_email" />
							<span class="text-danger"><?php echo form_error('newsletter_email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_statut" class="control-label">Newsletter Statut</label>
						<div class="form-group">
							<input type="text" name="newsletter_statut" value="<?php echo ($this->input->post('newsletter_statut') ? $this->input->post('newsletter_statut') : $newsletter['newsletter_statut']); ?>" class="form-control" id="newsletter_statut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_created_at" class="control-label">Newsletter Created At</label>
						<div class="form-group">
							<input type="text" name="newsletter_created_at" value="<?php echo ($this->input->post('newsletter_created_at') ? $this->input->post('newsletter_created_at') : $newsletter['newsletter_created_at']); ?>" class="has-datetimepicker form-control" id="newsletter_created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_created_by" class="control-label">Newsletter Created By</label>
						<div class="form-group">
							<input type="text" name="newsletter_created_by" value="<?php echo ($this->input->post('newsletter_created_by') ? $this->input->post('newsletter_created_by') : $newsletter['newsletter_created_by']); ?>" class="form-control" id="newsletter_created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_updated_at" class="control-label">Newsletter Updated At</label>
						<div class="form-group">
							<input type="text" name="newsletter_updated_at" value="<?php echo ($this->input->post('newsletter_updated_at') ? $this->input->post('newsletter_updated_at') : $newsletter['newsletter_updated_at']); ?>" class="has-datetimepicker form-control" id="newsletter_updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_updated_by" class="control-label">Newsletter Updated By</label>
						<div class="form-group">
							<input type="text" name="newsletter_updated_by" value="<?php echo ($this->input->post('newsletter_updated_by') ? $this->input->post('newsletter_updated_by') : $newsletter['newsletter_updated_by']); ?>" class="form-control" id="newsletter_updated_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_deleted_at" class="control-label">Newsletter Deleted At</label>
						<div class="form-group">
							<input type="text" name="newsletter_deleted_at" value="<?php echo ($this->input->post('newsletter_deleted_at') ? $this->input->post('newsletter_deleted_at') : $newsletter['newsletter_deleted_at']); ?>" class="has-datetimepicker form-control" id="newsletter_deleted_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_deleted_by" class="control-label">Newsletter Deleted By</label>
						<div class="form-group">
							<input type="text" name="newsletter_deleted_by" value="<?php echo ($this->input->post('newsletter_deleted_by') ? $this->input->post('newsletter_deleted_by') : $newsletter['newsletter_deleted_by']); ?>" class="form-control" id="newsletter_deleted_by" />
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