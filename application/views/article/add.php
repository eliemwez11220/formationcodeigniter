<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Article Add</h3>
            </div>
            <?php echo form_open_multipart('article/add'); ?>
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
									$selected = ($value == $this->input->post('article_type')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('article_type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_categorie_uid" class="control-label">Category</label>
						<div class="form-group">
							<select name="article_categorie_uid" class="form-control">
								<option value="">select category</option>
								<?php 
								foreach($all_categories as $category)
								{
									$selected = ($category['categorie_uid'] == $this->input->post('article_categorie_uid')) ? ' selected="selected"' : "";

									echo '<option value="'.$category['categorie_uid'].'" '.$selected.'>'.$category['categorie_libelle'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('article_categorie_uid');?></span>
						</div>
					</div>
					<div class="col-md-9">
						<label for="article_titre" class="control-label"><span class="text-danger">*</span>Article Titre</label>
						<div class="form-group">
							<input type="text" name="article_titre" value="<?php echo $this->input->post('article_titre'); ?>" class="form-control" id="article_titre" />
							<span class="text-danger"><?php echo form_error('article_titre');?></span>
						</div>
					</div>
					
					<div class="col-md-3">
						<label for="article_image" class="control-label">Article Image</label>
						<div class="form-group">
							<input type="file" name="article_image" value="<?php echo $this->input->post('article_image'); ?>" class="form-control" id="article_image" />
							<span class="text-danger"><?php echo form_error('article_image');?></span>
						</div>
					</div>
					
					<div class="col-md-12">
						<label for="article_sommaire" class="control-label">Article Sommaire</label>
						<div class="form-group">
							<textarea name="article_sommaire" class="form-control" id="article_sommaire"><?php echo $this->input->post('article_sommaire'); ?></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<label for="article_description" class="control-label">Article Description</label>
						<div class="form-group">
							<textarea name="article_description" class="form-control" id="article_description"><?php echo $this->input->post('article_description'); ?></textarea>
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