
<div class="row familyExpenses">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Family Expense'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Family Expense'), array('action' => 'edit', $familyExpense['FamilyExpense']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($familyExpense['FamilyExpense']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Expense'); ?></td>
		<td>
			<?php echo $this->Html->link($familyExpense['Expense']['name'], array('controller' => 'expenses', 'action' => 'view', $familyExpense['Expense']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyExpense['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyExpense['FamilyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($familyExpense['FamilyExpense']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($familyExpense['FamilyExpense']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($familyExpense['FamilyExpense']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Family Expense'), array('action' => 'edit', $familyExpense['FamilyExpense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Expense'), array('action' => 'delete', $familyExpense['FamilyExpense']['id']), null, __('Are you sure you want to delete # %s?', $familyExpense['FamilyExpense']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Expenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Expense'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('controller' => 'expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
