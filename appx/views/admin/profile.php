<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Profile
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"> profile</li>
		</ol>
	</section>
    <section class="content">
		<div class="row">
			<div class="col-xs-12">
				<?php if($this->session->flashdata("message")):?>
					<div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-info"></i> Notification!</h4>
						<?php echo $this->session->flashdata("message")?> 
					</div>
				<?php endif;?>	
			</div>
		</div>
		<?php if(validation_errors()):?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Error!</h4>
              <?php echo validation_errors(); ?> 
            </div>
		<?php endif;?>		
      	<div class="row">
      	  	<div class="col-md-3">
				<div class="box <?php echo setting_all('box_headers'); ?>">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().'files/profiles/'.$profile_image;?>" alt="user Image">
						<h3 class="profile-username text-center"><?php echo $full_name; ?></h3>
						<p class="text-muted text-center">Software Engineer</p>
					</div>
 				</div>
        	</div>
        	<div class="col-md-9">
         		<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#profile" data-toggle="tab">User Profile</a></li>
					</ul>
					<div class="tab-content">
						<div class="active tab-pane " id="profile">
							<?php echo form_open_multipart(uri_string());?>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">First Name</label>
									<div class="col-sm-10">
										<?php echo form_input($first_name);?><br>
									</div>
								</div>				 
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Last Name</label>
									<div class="col-sm-10">
										<?php echo form_input($last_name);?><br>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label"> Phone</label>
									<div class="col-sm-10">
										<?php echo form_input($phone);?><br>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label"> Profile pic</label>
									<div class="col-sm-10">
										<?php echo form_input($userfile);?><br>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">New Password</label>
									<div class="col-sm-10">
										<?php echo form_input($password);?><br>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Confirm password</label>
									<div class="col-sm-10">
										<?php echo form_input($password_confirm);?><br>
									</div>
								</div>
                  				<?php if ($this->ion_auth->is_admin()): ?>
                  				<div class="form-group">
                       				<div class="col-sm-offset-2 col-sm-10">
                        			   <label class="col-sm-2 col-sm-2 control-label">User Groups</label>
                       				   <div class="checkbox">
											<?php foreach ($groups as $group): 
												$gID=$group['id'];
												$checked = null;
												$item = null;
												foreach($currentGroups as $grp) {
													if ($gID == $grp->id) {
														$checked= ' checked="checked"';
													break;
													}
												}
											?>
											<label>
												<input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
												<?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>&nbsp;
											</label> 
											<?php endforeach?>
                         				 </div>
                       				 </div>
                     			</div>
               				    <?php endif ?>
								<?php echo form_hidden('id', $user->id);?>
								<?php echo form_hidden($csrf); ?>
               					<button type="submit" name="submit" class="btn btn-flat <?php echo setting_all('buttons'); ?>">Save</button>
              				<?php echo form_close();?>
              			</div>
           		 	</div>
		        </div>
 	        </div>
 	    </div>
    </section>
</div>
 