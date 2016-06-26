<?php echo $this->Html->script('user'); ?>
<div class="portlet box grey-cascade">
<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i><?php echo __('Credentials');?>
		</div>
		<div class="tools">
			<a class="collapse" href="javascript:;"> </a>
			<a class="config" data-toggle="modal" href="#portlet-config"> </a>
			<a class="reload" href="javascript:;"> </a>
			<a class="remove" href="javascript:;"> </a>
		</div>
	</div>
</div>

<div class="portlet-body col-md-4">
			    <?php echo $this->Form->create('User', array('controller' => 'users','action'=>'change_credentials','class' => 'form-horizontal login-form', 
                                                                                   'inputDefaults' => array('div' => false,
                                                                                                            'label' => false, 
                                                                                                            'class' => 'form-control'))); ?>
             
             <div class='form-group'>
							<label class='col-md-5 control-label'>User Name</label>
							<div class='col-md-7'>
								<?php //debug($user_details); exit;
								if(!empty($user)){
									$user_name = isset($user['User']['username'])?$user['User']['username']:'';
									$user_id = isset($user['User']['id'])?$user['User']['id']:'';
									
										echo $this->Form->input('username',array('class' => 'form-control uName','value' => $user_name));
										echo $this->Form->input('id', array('type' => 'hidden', 'value' => $user_id));
									
								}else{ //debug('here'); exit;
									echo $this->Form->input('username',array('class' => 'form-control uName', 'value' => ''));
								} ?>
							</div>
					</div>	
					
						<div class='form-group'>
							<label class='col-md-5 control-label'>Old Password</label>
							<div class='col-md-7'>
								<?php echo $this->Form->input('oldpassword', array('class' => 'form-control pwdField oPwd','type'=>'password','default' =>""));
								?>
							</div>
					</div>
					<div class='form-group'>
							<label class='col-md-5 control-label'>New Password</label>
							<div class='col-md-7'>
								<?php echo $this->Form->input('new_password', array('class' => 'form-control pwdField nPwd','type'=>'password','default' => ''));
								?>
							</div>
					</div>
					
					<div class='form-group'>
							<label class='col-md-5 control-label'>Confirm Password</label>
							<div class='col-md-7'>
								<?php echo $this->Form->input('confirm_password', array('class' => 'form-control pwdField cPwd','type'=>'password','default' => ''));
								?>
							</div>
					</div>
					<div class="save-button pull-right">
                    	<button type="button" class="changeUserCredentials action-mainbtn1 leftmargin">Save</button>
                    </div>
              <?php echo $this->Form->end(); //debug($user_details); exit;?>                                                                                              
			</div>
