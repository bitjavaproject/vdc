
<div class="row familyInfos index">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i><?php echo __('Family Infos'); ?>                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
                <div class="actions">
                    <?php echo $this->Html->link(__('New Family Info'), array('action' => 'add'), array('class' => 'btn purple')); ?>                </div>                    
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1"> # </th>
                                                                <th class="col-md-2"> <?php  echo ('Ward No'); ?></th>
                                                                <th class="col-md-2"> <?php  echo ('Residential Code'); ?></th>
                                                                 <th class="col-md-2"> <?php echo ('Residential Name'); ?></th>
                                                                <th class="col-md-2"> <?php  echo ('House No'); ?></th>
                                                                <th class="col-md-2"> <?php echo  ('House Owner'); ?></th>
                                                                <th class="col-md-2"> <?php echo ('House Owner Type'); ?></th>
                                                                <th class="col-md-2"> <?php echo ('Caste'); ?></th>
                                                                <th class="col-md-2"> <?php echo ('Religion'); ?></th>
                                                                <th class="col-md-2"> <?php echo ('Language'); ?></th>
                                                                <th class="col-md-2"> <?php echo ('Source of Income'); ?></th>
                                                                <th class="col-md-2"> <?php echo ('Migration'); ?></th>
                                                                <th class="col-md-2"> <?php echo ('Organization Involvement'); ?></th>
                                                                <th class="col-md-1 actions"> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($familyInfos as $familyInfo): ?>
	<tr>
		<th></th>
		<td><?php echo h($familyInfo['FamilyInfo']['ward_no']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['residential_code']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['resident_name']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['house_no']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['house_owner']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['house_owner_type']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['caste']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['religion']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['language']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['source_of_income']); ?></td>
		<td><?php echo h($familyInfo['FamilyInfo']['migration']); ?></td>
		<td>
			<?php echo $this->Html->link($familyInfo['OrganizationInvolvement']['name'], array('controller' => 'organization_involvements', 'action' => 'view', $familyInfo['OrganizationInvolvement']['id'])); ?>
		</td>
		<th class="actions">
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-share')) . ' ' . __('View'), array('action' => 'view', $familyInfo['FamilyInfo']['id']), array('class' => 'btn default btn-xs green', 'escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . ' ' . __('Edit'), array('action' => 'edit', $familyInfo['FamilyInfo']['id']), array('class' => 'btn default btn-xs blue', 'escape' => false)); ?>
			<?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'fa fa-trash-o')) . ' ' . __('Delete'), array('action' => 'delete', $familyInfo['FamilyInfo']['id']), array('class' => 'btn default btn-xs grey', 'escape' => false), __('Are you sure you want to delete # %s?', $familyInfo['FamilyInfo']['id'])); ?>
		</th>
	</tr>
<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="dataTables_info" id="sample_1_info">
                            <?php echo $this->Paginator->counter(array(
                            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                            )); ?>                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="dataTables_paginate paging_bootstrap">
                            <ul class="pagination"><?php

                                echo $this -> Paginator -> prev(
                                            $this->Html->tag('i', '', array('class' => 'fa fa-angle-left')), 
                                            array('escape' => false, 'tag' => 'li'), 
                                            $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-angle-left')), '#', array('escape' => false)), 
                                            array('class' => 'prev disabled', 'escape' => false, 'tag' => 'li'));
                                            
                                echo $this -> Paginator -> numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
                                
                                echo $this -> Paginator -> next(
                                            $this->Html->tag('i', '', array('class' => 'fa fa-angle-right')), 
                                            array('escape' => false, 'tag' => 'li'), 
                                            $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-angle-right')), '#', array('escape' => false)), 
                                            array('class' => 'prev disabled', 'escape' => false, 'tag' => 'li'));
                                ?>
</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

