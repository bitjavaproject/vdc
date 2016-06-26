<div class="row familyForeignInfos form">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i><?php echo __('Edit Family Foreign Info'); ?>                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('FamilyForeignInfo', array('class' => 'form-horizontal', 
                                                                                   'inputDefaults' => array('div' => false,
                                                                                                            'label' => false, 
                                                                                                            'class' => 'form-control'))); ?>
                <div class="form-body">
                    <div class='form-group'>
	<label class='col-md-3 control-label'>id</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>gender_id</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('gender_id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>country_name</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('country_name'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>total</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('total'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>time_period</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('time_period'); ?>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FamilyForeignInfo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FamilyForeignInfo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Family Foreign Infos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
