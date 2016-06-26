
<div class="row familyAgricultureInfos">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Family Agriculture Info'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Family Agriculture Info'), array('action' => 'edit', $familyAgricultureInfo['FamilyAgricultureInfo']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Product'); ?></td>
		<td>
			<?php echo $this->Html->link($familyAgricultureInfo['Product']['name'], array('controller' => 'products', 'action' => 'view', $familyAgricultureInfo['Product']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Economic Year'); ?></td>
		<td>
			<?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['economic_year']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Area'); ?></td>
		<td>
			<?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['area']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Quatity'); ?></td>
		<td>
			<?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['quatity']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyAgricultureInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyAgricultureInfo['FamilyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Family Agriculture Info'), array('action' => 'edit', $familyAgricultureInfo['FamilyAgricultureInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Agriculture Info'), array('action' => 'delete', $familyAgricultureInfo['FamilyAgricultureInfo']['id']), null, __('Are you sure you want to delete # %s?', $familyAgricultureInfo['FamilyAgricultureInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Agriculture Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Agriculture Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
