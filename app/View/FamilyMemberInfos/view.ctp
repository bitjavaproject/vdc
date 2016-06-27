
<div class="row familyMemberInfos">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Family Member Info'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Family Member Info'), array('action' => 'edit', $familyMemberInfo['FamilyMemberInfo']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($familyMemberInfo['FamilyMemberInfo']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Age Group'); ?></td>
		<td>
			<?php echo $this->Html->link($familyMemberInfo['FamilyAgeGroup']['name'], array('controller' => 'family_age_groups', 'action' => 'view', $familyMemberInfo['FamilyAgeGroup']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Total'); ?></td>
		<td>
			<?php echo h($familyMemberInfo['FamilyMemberInfo']['total']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Gender'); ?></td>
		<td>
			<?php echo $this->Html->link($familyMemberInfo['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $familyMemberInfo['Gender']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Desgnation Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyMemberInfo['FamilyDesgnationInfo']['id'], array('controller' => 'family_desgnation_infos', 'action' => 'view', $familyMemberInfo['FamilyDesgnationInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyMemberInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyMemberInfo['FamilyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($familyMemberInfo['FamilyMemberInfo']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($familyMemberInfo['FamilyMemberInfo']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($familyMemberInfo['FamilyMemberInfo']['updated']); ?>
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
