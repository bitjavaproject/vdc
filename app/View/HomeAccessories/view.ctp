
<div class="row homeAccessories">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Home Accessory'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Home Accessory'), array('action' => 'edit', $homeAccessory['HomeAccessory']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($homeAccessory['HomeAccessory']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($homeAccessory['HomeAccessory']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($homeAccessory['HomeAccessory']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($homeAccessory['HomeAccessory']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($homeAccessory['HomeAccessory']['updated']); ?>
			&nbsp;
		</td>
	</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- END PORTLET-->
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Home Accessory'), array('action' => 'edit', $homeAccessory['HomeAccessory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Home Accessory'), array('action' => 'delete', $homeAccessory['HomeAccessory']['id']), null, __('Are you sure you want to delete # %s?', $homeAccessory['HomeAccessory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Accessories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Home Accessory'), array('action' => 'add')); ?> </li>
	</ul>
</div>
