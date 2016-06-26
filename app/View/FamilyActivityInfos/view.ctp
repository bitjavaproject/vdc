
<div class="row familyActivityInfos">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Family Activity Info'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Family Activity Info'), array('action' => 'edit', $familyActivityInfo['FamilyActivityInfo']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($familyActivityInfo['FamilyActivityInfo']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Activity'); ?></td>
		<td>
			<?php echo $this->Html->link($familyActivityInfo['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $familyActivityInfo['Activity']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Gender'); ?></td>
		<td>
			<?php echo $this->Html->link($familyActivityInfo['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $familyActivityInfo['Gender']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyActivityInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyActivityInfo['FamilyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($familyActivityInfo['FamilyActivityInfo']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($familyActivityInfo['FamilyActivityInfo']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($familyActivityInfo['FamilyActivityInfo']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Family Activity Info'), array('action' => 'edit', $familyActivityInfo['FamilyActivityInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Activity Info'), array('action' => 'delete', $familyActivityInfo['FamilyActivityInfo']['id']), null, __('Are you sure you want to delete # %s?', $familyActivityInfo['FamilyActivityInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Activity Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Activity Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
