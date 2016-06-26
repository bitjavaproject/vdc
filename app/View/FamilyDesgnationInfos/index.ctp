
<div class="row familyDesgnationInfos index">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i><?php echo __('Family Desgnation Infos'); ?>                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
                <div class="actions">
                    <?php echo $this->Html->link(__('New Family Desgnation Info'), array('action' => 'add'), array('class' => 'btn purple')); ?>                </div>                    
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1"> # </th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('desgnation_type_id'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('male'); ?></th>
                                                                 <th class="col-md-2"> <?php echo $this->Paginator->sort('female'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('family_info_id'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('created'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('modified_by'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('updated'); ?></th>
                                                                <th class="col-md-1 actions"> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $cnt=0;foreach ($familyDesgnationInfos as $familyDesgnationInfo): ?>
	<tr>
		<td><?php echo ++$cnt; ?></td>
		<td>
			<?php echo $this->Html->link($familyDesgnationInfo['DesgnationType']['name'], array('controller' => 'desgnation_types', 'action' => 'view', $familyDesgnationInfo['DesgnationType']['id'])); ?>
		</td>
		<td><?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['male']); ?></td>
		<td>
			<?php echo $this->Html->link($familyDesgnationInfo['FamilyDesgnationInfo']['female'], array('controller' => 'genders', 'action' => 'view', $familyDesgnationInfo['Gender']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($familyDesgnationInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyDesgnationInfo['FamilyInfo']['id'])); ?>
		</td>
		<td><?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['created']); ?></td>
		<td><?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['modified_by']); ?></td>
		<td><?php echo h($familyDesgnationInfo['FamilyDesgnationInfo']['updated']); ?></td>
		<th class="actions">
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-share')) . ' ' . __('View'), array('action' => 'view', $familyDesgnationInfo['FamilyDesgnationInfo']['id']), array('class' => 'btn default btn-xs green', 'escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . ' ' . __('Edit'), array('action' => 'edit', $familyDesgnationInfo['FamilyDesgnationInfo']['id']), array('class' => 'btn default btn-xs blue', 'escape' => false)); ?>
			<?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'fa fa-trash-o')) . ' ' . __('Delete'), array('action' => 'delete', $familyDesgnationInfo['FamilyDesgnationInfo']['id']), array('class' => 'btn default btn-xs grey', 'escape' => false), __('Are you sure you want to delete # %s?', $familyDesgnationInfo['FamilyDesgnationInfo']['id'])); ?>
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

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Family Desgnation Info'), array('action' => 'add')); ?></li>
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
