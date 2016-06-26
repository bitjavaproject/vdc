
<div class="row">
	<div class="col-md-12">
		
		<div class="portlet-title"><?php //debug($fields); debug($button); exit;
				if(isset($filter)){
				echo $this->Html->div('col-md-6 caption-title',
							$this->Html->tag('i', '', array('class' => '')) . __($filter['caption'])); }

				echo $this->Html->div('tools',
							$this->Html->link('', '#', array('class' 				=> 'collapse', 
															 'data-original-title' 	=> '', 
															 'title' 				=> '')) . 
							$this->Html->link('', '#portlet-config', array( 'class' 				=> 'config',
																			'data-toggle'			=> 'modal',
																			'data-original-title' 	=> '', 
																			'title' 				=> '')) . 
							$this->Html->link('', 'javascript:;', array('class' 				=> 'reload', 
																		'data-original-title' 	=> '', 
																		'title' 				=> '')) . 
							$this->Html->link('', 'javascript:;', array('class' 				=> 'remove', 
																		'data-original-title' 	=> '', 
																		'title' 				=> ''))); 
					if(isset($filter['action']['label'])){
				if($filter['action']['label'] != 'Off') {
					echo $this->Html->div('actions',
								$this->Html->link($this->Html->tag('i', '', 
																   array('class' => 'fa fa-plus')) . ' ' . __($filter['action']['label']), 
	                                           	  $filter['action']['action'], 
	                                           	  array('class' => 'btn new right ' .$filter['action']['class'], 'escape' => false))); 
	                                           	  }
				}
			?></div>
		<?php if(isset($fields)){ ?>
		<div class="portlet box">
			
			<div class="portlet-body form box">
				<!-- BEGIN FORM-->
					<?php 
						if(count($fields['table']) == 1){
								//this is the case specially created for index page of routes condroller
								echo $this->Form->create($fields['action'],
												array('class' => 'form-horizontal',
													'url' => Router::url(array('controller' => $this->request->controller, 'action' => $this->request->action, isset($fields['param'])?$fields['param']:''), true),
													  'inputDefaults' => array(
														'label'		=> false,
														'div'		=> array('class' => 'col-md-8'),
														'class'		=> 'form-control')));
						}else{
							echo $this->Form->create($fields['action'], 
												array('class' => 'form-horizontal',
												'url' => Router::url(array('controller' => $this->request->controller), true),
													  'inputDefaults' => array(
														'label'		=> false,
														'div'		=> array('class' => 'col-md-9'),
														'class'		=> 'form-control'))); 
						}
				 ?>
					<div class="form-body">
						<div class="row margin-top-10">
							<?php //debug($fields); exit;
							if(count($fields['table']) == 1){
								//this is the case specially created for index page of routes condroller
								foreach($fields['table'] as $table => $field) {
								echo $this->Html->div('col-md-5', $this->Html->div('form-group',
											$this->Form->label($table, $field['label-name'], array('class' => 'control-label col-md-4 select_grade_sections')) .
											$this->Form->input($table, $field['form-options'])));
							}
							}else if(count($fields['table']) == 4){
								foreach($fields['table'] as $table => $field) {
									if($field['label-name'] == 'Grade' || $field['label-name'] == 'Section'){
										echo $this->Html->div('col-md-2', $this->Html->div('form-group',
											$this->Form->label($table, $field['label-name'], array('class' => 'control-label col-md-3')) .
											$this->Form->input($table, $field['form-options'])));
									}else{
										echo $this->Html->div('col-md-3', $this->Html->div('form-group',
											$this->Form->label($table, $field['label-name'], array('class' => 'control-label col-md-3')) .
											$this->Form->input($table, $field['form-options'])));
									}
								
							}}else{ 
							foreach($fields['table'] as $table => $field) {
								if(!empty($field['label-name'])){
									echo $this->Html->div('col-md-3', $this->Html->div('',
											$this->Form->label($table, $field['label-name'], array('class' => 'control-label col-md-3')) .
											$this->Form->input($table, $field['form-options'])));
								}else{ // this is for the purpose of hidden fields. it has been used in bill collection
										echo $this->Html->div('col-md-1', $this->Html->div('form-group',
											$this->Form->input($table, $field['form-options'])));
								}
							}}
							?>
							
							
						<!--<div class="form-actions">-->
							<?php if(count($fields['table']) == 4){?>
								<div class="col-md-2 pull-right">
								<button class="sec-actions-btn search pull-right" name = "submit" type="submit" value = "filter" id = "btnsearch"><?php echo !empty($button)?$button['name']: 'Search';?></button>
							</div>
							<?php }else{ ?> 
								<div class="col-md-3 pull-right">
								<button class="sec-actions-btn search pull-right <?php echo isset($button['class'])?$button['class']:'';?>" name = "submit" type="submit" value = "filter" id = "btnsearch" <?php echo isset($button['attr'])?$button['attr']:'';?>><?php echo !empty($button)?$button['name']: 'Search';?></button>
							</div>
							<?php }?>
							<!--<div class="col-md-6"></div>-->
						
					<!--</div>-->
							
						</div>
						<!--/row-->
					</div>
					<!--<div class="form-actions">
						<div class="row">
							<div class="col-md-6 pull-right">
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn green pull-right" name = "submit" type="submit" value = "filter" id = "btnsearch">Search</button>
									</div>
								</div>
							</div>
							<div class="col-md-6"></div>
						</div>
					</div>-->
				<?php echo $this->Form->end(); ?>
				<!-- END FORM-->
			</div>
		</div>
		<?php }?>
	</div>
</div>
