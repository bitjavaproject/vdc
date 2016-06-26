
<div class="row familyForeignInfos">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Family Foreign Info'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Family Foreign Info'), array('action' => 'edit', $familyForeignInfo['FamilyForeignInfo']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($familyForeignInfo['FamilyForeignInfo']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Gender'); ?></td>
		<td>
			<?php echo $this->Html->link($familyForeignInfo['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $familyForeignInfo['Gender']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Country Name'); ?></td>
		<td>
			<?php echo h($familyForeignInfo['FamilyForeignInfo']['country_name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Total'); ?></td>
		<td>
			<?php echo h($familyForeignInfo['FamilyForeignInfo']['total']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Time Period'); ?></td>
		<td>
			<?php echo h($familyForeignInfo['FamilyForeignInfo']['time_period']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyForeignInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyForeignInfo['FamilyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($familyForeignInfo['FamilyForeignInfo']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($familyForeignInfo['FamilyForeignInfo']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($familyForeignInfo['FamilyForeignInfo']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Family Foreign Info'), array('action' => 'edit', $familyForeignInfo['FamilyForeignInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Foreign Info'), array('action' => 'delete', $familyForeignInfo['FamilyForeignInfo']['id']), null, __('Are you sure you want to delete # %s?', $familyForeignInfo['FamilyForeignInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Foreign Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Foreign Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
