
<div class="row familyDesgnationInfos">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Family Desgnation Info'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Family Desgnation Info'), array('action' => 'edit', $familyDesgnationInfo['FamilyDesgnationInfo']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Desgnation Type'); ?></td>
		<td>
			<?php echo $this->Html->link($familyDesgnationInfo['DesgnationType']['name'], array('controller' => 'desgnation_types', 'action' => 'view', $familyDesgnationInfo['DesgnationType']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Total'); ?></td>
		<td>
			<?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['total']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Gender'); ?></td>
		<td>
			<?php echo $this->Html->link($familyDesgnationInfo['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $familyDesgnationInfo['Gender']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Family Info'); ?></td>
		<td>
			<?php echo $this->Html->link($familyDesgnationInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyDesgnationInfo['FamilyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Family Desgnation Info'), array('action' => 'edit', $familyDesgnationInfo['FamilyDesgnationInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Desgnation Info'), array('action' => 'delete', $familyDesgnationInfo['FamilyDesgnationInfo']['id']), null, __('Are you sure you want to delete # %s?', $familyDesgnationInfo['FamilyDesgnationInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Desgnation Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Desgnation Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Desgnation Types'), array('controller' => 'desgnation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Desgnation Type'), array('controller' => 'desgnation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Member Infos'), array('controller' => 'family_member_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Member Info'), array('controller' => 'family_member_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	
<div class="row familyDesgnationInfos related">
    <div class="col-md-12">
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i><?php echo __('Related Family Member Infos'); ?>                </div>
                <div class="actions">			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil')) . ' ' . __('New Family Member Info'), 
                                                              array('controller' => 'family_member_infos', 'action' => 'add'), 
                                                              array('class' => 'btn blue', 'escape' => false)); ?>
                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <?php if (!empty($familyDesgnationInfo['FamilyMemberInfo'])): ?>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1"> # </th>
                                                                <th class="col-md-2"> <?php echo __('Id'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Family Age Group Id'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Total'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Gender Id'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Family Desgnation Info Id'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Family Info Id'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Created'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Modified By'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Updated'); ?></th>
                                                                <th class="col-md-1 actions"> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            	<?php foreach ($familyDesgnationInfo['FamilyMemberInfo'] as $familyMemberInfo): ?>
		<tr>
		<th></th>
			<td><?php echo $familyMemberInfo['id']; ?></td>
			<td><?php echo $familyMemberInfo['family_age_group_id']; ?></td>
			<td><?php echo $familyMemberInfo['total']; ?></td>
			<td><?php echo $familyMemberInfo['gender_id']; ?></td>
			<td><?php echo $familyMemberInfo['family_desgnation_info_id']; ?></td>
			<td><?php echo $familyMemberInfo['family_info_id']; ?></td>
			<td><?php echo $familyMemberInfo['created']; ?></td>
			<td><?php echo $familyMemberInfo['modified_by']; ?></td>
			<td><?php echo $familyMemberInfo['updated']; ?></td>
		<th class="actions">
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-share')) . ' ' . __('View'), array('controller' => 'family_member_infos', 'action' => 'view', $familyMemberInfo['id']), array('class' => 'btn default btn-xs green', 'escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . ' ' . __('Edit'), array('controller' => 'family_member_infos', 'action' => 'edit', $familyMemberInfo['id']), array('class' => 'btn default btn-xs blue', 'escape' => false)); ?>
			<?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'fa fa-trash-o')) . ' ' . __('Delete'), array('controller' => 'family_member_infos', 'action' => 'delete', $familyMemberInfo['id']), array('class' => 'btn default btn-xs grey', 'escape' => false), __('Are you sure you want to delete # %s?', $familyMemberInfo['id'])); ?>
		</th>
	</tr>
<?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
