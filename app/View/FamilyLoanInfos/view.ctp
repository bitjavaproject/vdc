
<div class="row familyLoanInfos">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Family Loan Info'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Family Loan Info'), array('action' => 'edit', $familyLoanInfo['FamilyLoanInfo']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($familyLoanInfo['FamilyLoanInfo']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Loan Source'); ?></td>
		<td>
			<?php echo $this->Html->link($familyLoanInfo['LoanSource']['name'], array('controller' => 'loan_sources', 'action' => 'view', $familyLoanInfo['LoanSource']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Loan Objective'); ?></td>
		<td>
			<?php echo h($familyLoanInfo['FamilyLoanInfo']['loan_objective']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyLoanInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyLoanInfo['FamilyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($familyLoanInfo['FamilyLoanInfo']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($familyLoanInfo['FamilyLoanInfo']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($familyLoanInfo['FamilyLoanInfo']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Family Loan Info'), array('action' => 'edit', $familyLoanInfo['FamilyLoanInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Loan Info'), array('action' => 'delete', $familyLoanInfo['FamilyLoanInfo']['id']), null, __('Are you sure you want to delete # %s?', $familyLoanInfo['FamilyLoanInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Loan Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Loan Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loan Sources'), array('controller' => 'loan_sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Source'), array('controller' => 'loan_sources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
