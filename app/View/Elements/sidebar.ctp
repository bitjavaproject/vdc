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
            
            
            	  <!-- Start Family Expenses Info -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'family_activity_infos' ){
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				} ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'glyphicon glyphicon-user')) . $this -> Html -> tag('span', ' Family Activity Info', array('class' => 'title')) . $selected, array('controller' => 'family_activity_infos', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Disaster Info -->
            
             
            	  <!-- Start Family Agriculture Info -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'family_agriculture_infos' ){
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				} ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'glyphicon glyphicon-user')) . $this -> Html -> tag('span', ' Family Agriculture Info', array('class' => 'title')) . $selected, array('controller' => 'family_agriculture_infos', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Agriculture Info -->
            
            
            
            	  <!-- Start Family Foreign Info -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'family_foreign_infos' ){
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				} ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'glyphicon glyphicon-user')) . $this -> Html -> tag('span', ' Family Foreign Info', array('class' => 'title')) . $selected, array('controller' => 'family_foreign_infos', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Foreign Info -->
            
             
            	  <!-- Start Family Loan Info -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'family_loan_infos' ){
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				} ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'glyphicon glyphicon-user')) . $this -> Html -> tag('span', ' Family Loan Info', array('class' => 'title')) . $selected, array('controller' => 'family_loan_infos', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Loan Info -->
			
			 
            	  <!-- Start Family Expenses Info -->
			<?php
			$selected = '';$active = '';$arrow = $this -> Html -> tag('span', '', array('class' => 'arrow'));
				if ($this -> request -> controller == 'family_expenses' ){
				    $selected = $this -> Html -> tag('span', '', array('class' => 'selected'));
				    $arrow = $this -> Html -> tag('span', '', array('class' => 'arrow open'));
				    $active = 'active';
				} ?>
			<li class="<?php echo $active; ?>">
				<?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'glyphicon glyphicon-user')) . $this -> Html -> tag('span', ' Family Expenses Info', array('class' => 'title')) . $selected, array('controller' => 'family_expenses', 'action' => 'index'), array('escape' => false)); ?>
			</li>
			<!-- End Family Expenses Info -->
			
			
			 
			 			</ul>
		<!-- ending sidebar menu !-->	
			</div>
			</div>