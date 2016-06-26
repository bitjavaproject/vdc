
<div class="row familyDisasterInfos">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Family Disaster Info'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Family Disaster Info'), array('action' => 'edit', $familyDisasterInfo['FamilyDisasterInfo']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($familyDisasterInfo['FamilyDisasterInfo']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($familyDisasterInfo['FamilyDisasterInfo']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Amount'); ?></td>
		<td>
			<?php echo h($familyDisasterInfo['FamilyDisasterInfo']['amount']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyDisasterInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyDisasterInfo['FamilyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($familyDisasterInfo['FamilyDisasterInfo']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($familyDisasterInfo['FamilyDisasterInfo']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($familyDisasterInfo['FamilyDisasterInfo']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Family Disaster Info'), array('action' => 'edit', $familyDisasterInfo['FamilyDisasterInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Disaster Info'), array('action' => 'delete', $familyDisasterInfo['FamilyDisasterInfo']['id']), null, __('Are you sure you want to delete # %s?', $familyDisasterInfo['FamilyDisasterInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Disaster Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Disaster Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
