
<div class="row familyAgricultureInfos index">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i><?php echo __('Family Agriculture Infos'); ?>                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;"> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config"> </a>
                    <a class="reload" href="javascript:;"> </a>
                    <a class="remove" href="javascript:;"> </a>
                </div>
                <div class="actions">
                    <?php echo $this->Html->link(__('New Family Agriculture Info'), array('action' => 'add'), array('class' => 'btn purple')); ?>                </div>                    
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1"> # </th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('id'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('product_id'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('economic_year'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('area'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('quatity'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('family_info_id'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('created'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('modified_by'); ?></th>
                                                                <th class="col-md-2"> <?php echo $this->Paginator->sort('updated'); ?></th>
                                                                <th class="col-md-1 actions"> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($familyAgricultureInfos as $familyAgricultureInfo): ?>
	<tr>
		<th></th>
		<td><?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familyAgricultureInfo['Product']['name'], array('controller' => 'products', 'action' => 'view', $familyAgricultureInfo['Product']['id'])); ?>
		</td>
		<td><?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['economic_year']); ?>&nbsp;</td>
		<td><?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['area']); ?>&nbsp;</td>
		<td><?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['quatity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familyAgricultureInfo['FamilyInfo']['house_no'], array('controller' => 'family_infos', 'action' => 'view', $familyAgricultureInfo['FamilyInfo']['id'])); ?>
		</td>
		<td><?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['created']); ?>&nbsp;</td>
		<td><?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($familyAgricultureInfo['FamilyAgricultureInfo']['updated']); ?>&nbsp;</td>
		<th class="actions">
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-share')) . ' ' . __('View'), array('action' => 'view', $familyAgricultureInfo['FamilyAgricultureInfo']['id']), array('class' => 'btn default btn-xs green', 'escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . ' ' . __('Edit'), array('action' => 'edit', $familyAgricultureInfo['FamilyAgricultureInfo']['id']), array('class' => 'btn default btn-xs blue', 'escape' => false)); ?>
			<?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'fa fa-trash-o')) . ' ' . __('Delete'), array('action' => 'delete', $familyAgricultureInfo['FamilyAgricultureInfo']['id']), array('class' => 'btn default btn-xs grey', 'escape' => false), __('Are you sure you want to delete # %s?', $familyAgricultureInfo['FamilyAgricultureInfo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Family Agriculture Info'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Infos'), array('controller' => 'family_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Info'), array('controller' => 'family_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
