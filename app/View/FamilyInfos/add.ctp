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
	<label class='col-md-3 control-label'>ward_no</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('ward_no'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>residential_code</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('residential_code'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>residential_name</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('resident_name'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>house_no</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('house_no'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>house_owner</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('house_owner'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>house_owner_type</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('house_owner_type'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>caste</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('caste'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>religion</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('religion'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>language</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('language'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>source_of_income</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('source_of_income'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>migration</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('migration'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>organization_involvement_id</label>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Family Infos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organization Involvements'), array('controller' => 'organization_involvements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization Involvement'), array('controller' => 'organization_involvements', 'action' => 'add')); ?> </li>
	</ul>
</div>
