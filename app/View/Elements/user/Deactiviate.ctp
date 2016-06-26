<div class="portlet box grey-cascade">
<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i><?php echo __('Deactiviate');?>
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
  	
  	   <?php echo $this->Form->create('User', array('controller' => 'users','action'=>'deactiviate_account','class' => 'form-horizontal login-form', 
                                                                                   'inputDefaults' => array('div' => false,
                                                                                                            'label' => false, 
                                                                                                            'class' => 'form-control'))); ?>
             
             
             <div class='form-group'>
             	  <div class='form-group'>
							<label class='col-md-5 control-label'> Password</label>
							<div class='col-md-7'>
								<?php echo $this->Form->input('oldpassword', array('class' => 'form-control pwdField oPwd','type'=>'password','default' =>""));
								?>
							</div>
					</div>
             	</div>
             <div class="save-button pull-right">
                    	<button type="button" class="deactiviateUser action-mainbtn1 leftmargin">Deactiviate</button>
                    </div>
              <?php echo $this->Form->end(); ?>
  	</div>