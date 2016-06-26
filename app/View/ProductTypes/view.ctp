
<div class="row productTypes">
	<div class="col-md-12">
		<!-- BEGIN PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i><?php echo __('Product Type'); ?>				</div>
				<div class="tools">
					<a class="collapse" href="javascript:;"> </a>
					<a class="reload" href="javascript:;"> </a>
				</div>
                <div class="actions">
                    <?php echo $this->Html->link(__('Edit Product Type'), array('action' => 'edit', $productType['ProductType']['id']), array('class' => 'btn purple')); ?>                </div>                    
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-striped table-bordered">
					<tbody>
                    	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($productType['ProductType']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($productType['ProductType']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($productType['ProductType']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified By'); ?></td>
		<td>
			<?php echo h($productType['ProductType']['modified_by']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Updated'); ?></td>
		<td>
			<?php echo h($productType['ProductType']['updated']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Product Type'), array('action' => 'edit', $productType['ProductType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Type'), array('action' => 'delete', $productType['ProductType']['id']), null, __('Are you sure you want to delete # %s?', $productType['ProductType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
	
<div class="row productTypes related">
    <div class="col-md-12">
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i><?php echo __('Related Products'); ?>                </div>
                <div class="actions">			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil')) . ' ' . __('New Product'), 
                                                              array('controller' => 'products', 'action' => 'add'), 
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
                    <?php if (!empty($productType['Product'])): ?>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1"> # </th>
                                                                <th class="col-md-2"> <?php echo __('Id'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Name'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Product Type Id'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Created'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Modified By'); ?></th>
                                                                <th class="col-md-2"> <?php echo __('Updated'); ?></th>
                                                                <th class="col-md-1 actions"> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            	<?php foreach ($productType['Product'] as $product): ?>
		<tr>
		<th></th>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['product_type_id']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified_by']; ?></td>
			<td><?php echo $product['updated']; ?></td>
		<th class="actions">
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-share')) . ' ' . __('View'), array('controller' => 'products', 'action' => 'view', $product['id']), array('class' => 'btn default btn-xs green', 'escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . ' ' . __('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id']), array('class' => 'btn default btn-xs blue', 'escape' => false)); ?>
			<?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'fa fa-trash-o')) . ' ' . __('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array('class' => 'btn default btn-xs grey', 'escape' => false), __('Are you sure you want to delete # %s?', $product['id'])); ?>
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
