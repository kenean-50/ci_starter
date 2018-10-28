<div class="content-wrapper">
	<section class="content-header">
      	<h1>
      		Settings
    	</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Settings</li>
		</ol>
    </section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<?php if($this->session->flashdata("message")):?>
					<div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-info"></i> Notification!</h4>
						<?php echo $this->session->flashdata("messagePr")?> 
					</div>
				<?php endif;?>	
			</div>
		</div>
		<?php if(validation_errors()):?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Notification!</h4>
              <?php echo validation_errors(); ?> 
            </div>
		<?php endif;?>		
	    <div class="row">   
			<div class="col-xs-6">
		  		<div class="box <?php echo setting_all('box_headers'); ?>">
					<div class="box-header with-border">
			  			<h3 class="box-title">Groups/Privilages</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
						</div>
					</div>		  
					<div class="box-body">
					<button class="btn btn-flat <?php echo setting_all('buttons'); ?> btn-sm pull-right" data-toggle="modal"  data-target="#addgp">
						Add Group
					</button><br><br>
 					<div class="modal fade" id="addgp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="myModalLabel">Add Group</h4>
								</div>
								<?php echo form_open('settings/create_group')?>
									<div class="modal-body">
											<div class="form-group">
												<label class="col-sm-2 col-sm-2 control-label"> Group Name</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="group_name" >
												</div>
											</div><br><br><br>
											<div class="form-group">
												<label class="col-sm-2 col-sm-2 control-label"> Discription</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="description" >
												</div>
											</div><br><br><br>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
										<button type="submit" name="submit" class="btn btn-flat <?php echo setting_all('buttons'); ?>">Add</button>
									</div>
						  		<?php echo form_close();?>
							</div>
						</div>
					</div>   
					<div class="box-body table-responsive"> 
               			 <table id="tableGroups" class="table table-hover">
							<thead>
								<tr>
									<th> Group Id</th>
									<th> Group Name</th>
									<th> Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$groups = $this->Admin_model->get_row('groups');
									foreach ($groups as $group):
								?>
									<tr>
										<td><?php echo $group['id'] ?> </td>
										<td><?php echo $group['name']; ?> </td>
										<td>
											<a onclick="confirm_modal('<?php echo base_url().'settings/delete_group/'.$group['id']?>');"  href="#">
												<button class="btn btn-danger btn-xs">
													<i class="fa fa-trash-o "></i> Delete
												</button>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
 			</div> 
		</div> 	
		<div class="col-xs-6">
			<div class="box <?php echo setting_all('box_headers'); ?>">
				<div class="box-header with-border">
					<h3 class="box-title">Images Management</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>		  
				<div class="box-body">
					<button class="btn btn-flat <?php echo setting_all('buttons'); ?> btn-sm pull-right" data-toggle="modal" data-target="#addImage">
						Add Image place
					</button><br><br>
					<div class="modal fade" id="addImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<?php echo form_open_multipart('settings/add_image')?>
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="myModalLabel">Add New Image Placement</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label class="col-sm-2 col-sm-2 control-label">Image file</label>
										<div class="col-sm-10">
											<input type="file" name="userfile" value="<?= set_value('userfile')?>"  class="form-control"><br>
										</div>
									</div><br><br><br>
									<div class="form-group">
										<label class="col-sm-2 col-sm-2 control-label">Image Placement</label>
										<?php echo form_error('placement'); ?>
										<div class="col-sm-10">
											<input type="text" name="placement" value="<?= set_value('placement')?>"  class="form-control"><br>
										</div>
									</div><br><br><br>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
									<button type="submit" name="submit" class="btn btn-flat <?php echo setting_all('buttons'); ?>">Add</button>
								</div>
							</form>
						</div>
					</div>
				</div>   
				<div class="box-body table-responsive">
					<table id="tableImages" class="table  table-hover">
						<thead>
							<tr>
								<th> Image </th>
								<th> Image Name</th>
								<th> Image Placement</th>
								<th> Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$images = $this->Admin_model->get_row('images');
								foreach ($images as $image):
							?>
								<tr>
									<td data-toggle="modal" data-target="#viewImage<?php echo $image['image_id']; ?>">
										<div class="row centered">
											<img src="<?php echo base_url();?>files/web_images/<?php echo $image['image_name'];?>"   width="30">			
										</div>
									</td>
									<td><?php echo $image['image_name']; ?> </td>
									<td><?php echo $image['placement']; ?> </td>
									<td>
										<button title="Change" class="btn btn-info btn-xs" data-toggle="modal" data-target="#changeImage<?php echo $image['image_id']; ?>">
											<i class="fa fa-pencil-square-o "></i>
										</button>
										<a onclick="confirm_modal('<?php echo base_url().'settings/delete_image/'.$image['image_id']?>');"  href="#">
											<button title="Delete" class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i> 
											</button>
										</a>
									</td>
								</tr>
								<div class="modal fade" id="changeImage<?php echo $image['image_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title" id="myModalLabel"> Change Image <?php echo $image['placement']; ?></h4>
											</div>
											<?php echo form_open_multipart('settings/change_image')?>
												<div class="modal-body">
													<div class="form-group">
														<label class="col-sm-2 col-sm-2 control-label">Image file</label>
														<div class="col-sm-10">
															<input type="file" name="userfile"  class="form-control"><br>
														</div>
													</div><br><br><br>
													<input type="hidden" name="image_id" value="<?php echo $image['image_id']; ?>">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
													<button type="submit" name="submit" class="btn btn-flat <?php echo setting_all('buttons'); ?>">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>   
								<div class="modal fade" id="viewImage<?php echo $image['image_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title" id="myModalLabel">  Image <?php echo $image['placement']; ?></h4>
											</div>
											<div class="modal-body">
												<div class="row centered">
													<img src="<?php echo base_url();?>files/web_images/<?php echo $image['image_name'];?>"   width="100%">			
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>   
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
        </div> 	
	</section>
</div>
 