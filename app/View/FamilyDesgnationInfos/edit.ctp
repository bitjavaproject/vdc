<div class="row familyDesgnationInfos form">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i><?php echo __('Edit Family Desgnation Info'); ?>                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('FamilyDesgnationInfo', array('class' => 'form-horizontal', 
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
	<label class='col-md-3 control-label'>desgnation_type_id</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('desgnation_type_id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>male</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('male'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>female</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('female'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>family_info_id</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('family_info_id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>modified_by</label>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FamilyDesgnationInfo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FamilyDesgnationInfo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Family Desgnation Infos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Desgnation Types'), array('controller' => 'desgnation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Desgnation Type'), array('controller' => 'desgnation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Member Infos'), array('controller' => 'family_member_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Member Info'), array('controller' => 'family_member_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
