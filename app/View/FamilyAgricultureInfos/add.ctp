<div class="row familyAgricultureInfos form">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i><?php echo __('Add Family Agriculture Info'); ?>                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('FamilyAgricultureInfo', array('class' => 'form-horizontal', 
                                                                                   'inputDefaults' => array('div' => false,
                                                                                                            'label' => false, 
                                                                                                            'class' => 'form-control'))); ?>
                <div class="form-body">
                    <div class='form-group'>
	<label class='col-md-3 control-label'>product_id</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('product_id'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>economic_year</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('economic_year'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>area</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('area'); ?>
	</div>
</div>
<div class='form-group'>
	<label class='col-md-3 control-label'>quatity</label>
	<div class='col-md-4'>
		<?php echo $this->Form->input('quatity'); ?>
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

		<li><?php echo $this->Html->link(__('List Family Agriculture Infos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
