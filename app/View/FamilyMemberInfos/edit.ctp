<div class="row familyMemberInfos form">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i><?php echo __('Edit Family Member Info'); ?>                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('FamilyMemberInfo', array('class' => 'form-horizontal', 
                                                                                   'inputDefaults' => array('div' => false,
                                                                                                            'label' => false, 
                                                                                                            'class' => 'form-control'))); ?>
                <div class="form-body">
                    <div class='form-group'>
	<div class='col-md-4'>
		<?php echo $this->Form->input('id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Family Age Group</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('family_age_group_id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Male</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('male'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Female</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('female'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Family Designation Info</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('family_desgnation_info_id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Family Info ID</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('family_info_id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Modified By</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('modified_by'); ?>
	</div>
</div>
                    <div class="form-actions right">
                        <button class="btn green" type="submit">Submit</button>
                        <button class="btn default" type="button">Cancel</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
