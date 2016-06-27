<div class="row familyInfos form">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i><?php echo __('Add Family Info'); ?>                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('FamilyInfo', array('class' => 'form-horizontal', 
                                                                                   'inputDefaults' => array('div' => false,
                                                                                                            'label' => false, 
                                                                                                            'class' => 'form-control'))); ?>
                <div class="form-body">
                    <div class='form-group'>
	<label class='col-md-3 control-label'>Ward No</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('ward_no'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Residential Code</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('residential_code'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Residential Name</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('resident_name'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>House No.</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('house_no'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>House Owner</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('house_owner'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>House Owner Type</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('house_owner_type'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Caste</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('caste'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Religion</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('religion'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Language</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('language'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Soure of Income</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('source_of_income'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Migration</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('migration'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>Organization Involvement ID</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('organization_involvement_id'); ?>
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
