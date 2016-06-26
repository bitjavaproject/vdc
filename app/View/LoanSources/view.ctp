
<div class="row loanSources">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Loan Source'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Loan Source'), array('action' => 'edit', $loanSource['LoanSource']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($loanSource['LoanSource']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($loanSource['LoanSource']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($loanSource['LoanSource']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($loanSource['LoanSource']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($loanSource['LoanSource']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Loan Source'), array('action' => 'edit', $loanSource['LoanSource']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loan Source'), array('action' => 'delete', $loanSource['LoanSource']['id']), null, __('Are you sure you want to delete # %s?', $loanSource['LoanSource']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loan Sources'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Source'), array('action' => 'add')); ?> </li>
	</ul>
</div>
