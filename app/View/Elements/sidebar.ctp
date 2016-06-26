<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<!-- starting sidebar menu !-->
		<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			 <li class="sidebar-toggler-wrapper">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				<div class="sidebar-toggler"></div>
			<!-- END SIDEBAR TOGGLER BUTTON -->
			</li>
			<!-- Start dashboard -->
			<?php $selected = '';
       		$active = '';
			if ($this -> request -> controller == 'pages' && $this -> request -> action == 'display') {
	            $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
	            $active = 'active';
	        }
			?>
			<li class="start <?php echo $active; ?> ">
				<?php
	            	echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-home')) . $this -> Html -> tag('span', ' Dashboard', array('class' => 'title')) . $selected, array('controller' => 'pages', 'action' => 'display', 'home'), array('escape' => false));
				?>
			</li>
			<!-- end dashboard -->
			<?php if(in_array($this->Session->read('Auth.User.role_id'),array(1,3))){ ?>
			     <!-- Start Users -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
			if ($this -> request -> controller == 'users' ) {
			    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
			    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
			    $active = 'active';
			}
			?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' Users', array('class' => 'title')) . $selected, array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<?php } ?>
			<!-- End Users -->
			
			<?php if(in_array($this->Session->read('Auth.User.role_id'),array(2))){ ?>
			     <!-- Start BookReceive -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
			if ($this -> request -> controller == 'members' and $this-> request-> action== 'book_receive' ) {
			    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
			    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
			    $active = 'active';
			}
			?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' BookReceive', array('class' => 'title')) . $selected, array('controller' => 'members', 'action' => 'book_receive'), array('escape' => false)); ?>
			</li>
			<!-- End BookReceive -->
			
			
			 <!-- Start BookReturn-->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
			if ($this -> request -> controller == 'members' and $this-> request-> action== 'book_return' ) {
			    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
			    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
			    $active = 'active';
			}
			?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' BookReturn', array('class' => 'title')) . $selected, array('controller' => 'members', 'action' => 'book_return'), array('escape' => false)); ?>
			</li>
			<!-- End BookReturn -->
			<?php } ?>
			
			
			<!-- Start Family Infos -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
			if ($this -> request -> controller == 'family_infos' ) {
			    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
			    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
			    $active = 'active';
			}
			
			 ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-user')) . $this -> Html -> tag('span', ' Family Info', array('class' => 'title')) . $selected, array('controller' => 'family_infos', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Infos -->
			
			    
			     <!-- Start Family Member Info -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'family_member_infos'){
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				} ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'glyphicon glyphicon-user')) . $this -> Html -> tag('span', ' Family Members', array('class' => 'title')) . $selected, array('controller' => 'family_member_infos', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Member Info -->
			  <!-- Start Family Designation Info -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'family_desgnation_info' ){
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				} ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'glyphicon glyphicon-user')) . $this -> Html -> tag('span', ' Family Designation', array('class' => 'title')) . $selected, array('controller' => 'family_desgnation_infos', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Designation Info -->
			  <!-- Start Family Disaster Info -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'family_disaster_infos' ){
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				} ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'glyphicon glyphicon-user')) . $this -> Html -> tag('span', ' Family Disaster Info', array('class' => 'title')) . $selected, array('controller' => 'family_disaster_infos', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Disaster Info -->
			<?php if(in_array($this->Session->read('Auth.User.role_id'),array(1,3))){ ?>
			     <!-- Start Book Issue-->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
			if ($this -> request -> controller == 'bookIssues' ) {
			    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
			    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
			    $active = 'active';
			}
			?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' Book Issue', array('class' => 'title')) . $selected, array('controller' => 'bookIssues', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End book issue -->
			<?php } ?>
			<?php if(in_array($this->Session->read('Auth.User.role_id'),array(1,3))){ ?>
			     <!-- Start Book return-->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
			if ($this -> request -> controller == 'bookReturns' ) {
			    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
			    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
			    $active = 'active';
			}
			?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' Book Return', array('class' => 'title')) . $selected, array('controller' => 'bookReturns', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End book return-->
			<?php } ?>
			
			<?php if($this->Session->read('Auth.User.role_id')==3){ ?>
						 <!-- start SystemSetup -->
			 <?php
				$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'roles' || $this -> request -> controller == 'genders' || $this -> request -> controller == 'publishers' || $this -> request -> controller == 'languages' || $this -> request -> controller == 'categories') {
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				}
			?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cogs')) . 
				                                 $this -> Html -> tag('span', 'System Setup', array('class' => 'title')) . 
				                                 $selected . $arrow, 'javascript:;', array('escape' => false)); ?>
				                         
				                       <ul class="sub-menu">    
				      
				<!-- starting Roles menu -->
				                       
		 <?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
			if ($this -> request -> controller == 'roles' ) {
			    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
			    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
			    $active = 'active';
			}
			?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' Roles', array('class' => 'title')) . $selected, array('controller' => 'roles', 'action' => 'index'), array('escape' => false)); ?>
			</li>    
			<!-- ending Roles menu -->
			<!-- starting genders menu -->			        
						        
				<?php
					$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
					if ($this -> request -> controller == 'genders' ) {
					    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
					    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
					    $active = 'active';
					}
					?>
					<li class="<?php echo $active; ?>">
						<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' Gender', array('class' => 'title')) . $selected, array('controller' => 'genders', 'action' => 'index'), array('escape' => false)); ?>
					</li>    
			 <!-- ending genders menu -->
			 <!-- starting categories menu -->
				 			        
				<?php
					$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
					if ($this -> request -> controller == 'categories' ) {
					    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
					    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
					    $active = 'active';
					}
					?>
					<li class="<?php echo $active; ?>">
						<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' Category', array('class' => 'title')) . $selected, array('controller' => 'categories', 'action' => 'index'), array('escape' => false)); ?>
					</li>    
			 <!-- ending categories menu -->	
			 <!-- starting publishers menu -->
				 			        
				<?php
					$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
					if ($this -> request -> controller == 'publishers' ) {
					    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
					    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
					    $active = 'active';
					}
					?>
					<li class="<?php echo $active; ?>">
						<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' Publisher', array('class' => 'title')) . $selected, array('controller' => 'publishers', 'action' => 'index'), array('escape' => false)); ?>
					</li>    
			 <!-- ending publishers menu -->
			 <!-- starting language menu -->
				 			        
				<?php
					$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
					if ($this -> request -> controller == 'languages' ) {
					    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
					    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
					    $active = 'active';
					}
					?>
					<li class="<?php echo $active; ?>">
						<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-users')) . $this -> Html -> tag('span', ' Language', array('class' => 'title')) . $selected, array('controller' => 'languages', 'action' => 'index'), array('escape' => false)); ?>
					</li>    
			 <!-- ending language menu -->	            
				            
				        </ul> 
			</li>
			 <!-- End SystemSetup -->
			 
			 <?php } ?>
			</ul>
		<!-- ending sidebar menu !-->	
			</div>
			</div>