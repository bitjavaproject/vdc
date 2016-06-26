
<div class="row fuelSources">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Fuel Source'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Fuel Source'), array('action' => 'edit', $fuelSource['FuelSource']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($fuelSource['FuelSource']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($fuelSource['FuelSource']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($fuelSource['FuelSource']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($fuelSource['FuelSource']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($fuelSource['FuelSource']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Fuel Source'), array('action' => 'edit', $fuelSource['FuelSource']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fuel Source'), array('action' => 'delete', $fuelSource['FuelSource']['id']), null, __('Are you sure you want to delete # %s?', $fuelSource['FuelSource']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Sources'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Source'), array('action' => 'add')); ?> </li>
	</ul>
</div>
