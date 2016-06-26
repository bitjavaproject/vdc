<!-- BEGIN USER LOGIN DROPDOWN -->
<li class="dropdown dropdown-user">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <img alt="" class="img-circle" src=""/> <span class="username">
		 <?php 
		 if($this->Session->read('Auth.User.role_id') == 2){
				echo $this->Session->read('Auth.User.username');
			}else if($this->Session->read('Auth.User.role_id') == 3){
				echo $this->Session->read('Auth.User.username');
			}else if($this->Session->read('Auth.User.role_id') == 1){
				echo $this->Session->read('Auth.User.username');
			} 
		 ?> 
		 </span> <i class="fa fa-angle-down"></i> </a>
	<ul class="dropdown-menu">
		<li>
			
			<?php
			if($this->Session->read('Auth.User.role_id') == 2){
				echo $this->Html->link('<i class="fa fa-lock"></i> My Profile ',array('controller' => 'users','action' => 'view', $this->Session->read('Auth.User.id')),array('escape' => false));
			}else if($this->Session->read('Auth.User.role_id') == 3){
				echo $this->Html->link('<i class="fa fa-lock"></i> My Profile ',array('controller' => 'users','action' => 'view', $this->Session->read('Auth.User.id')),array('escape' => false));
			}else if($this->Session->read('Auth.User.role_id') == 1){
				echo $this->Html->link('<i class="fa fa-lock"></i> My Profile ',array('controller' => 'users','action' => 'view', $this->Session->read('Auth.User.id')),array('escape' => false));
			} 
			 ?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="fa fa-lock"></i> Change Password ',array('controller' => 'users','action' => 'changePass'),array('escape' => false));?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="fa fa-key"></i> Log Out ',array('controller' => 'users','action' => 'logout'),array('escape' => false));?>
		</li>
		
	</ul>
</li>
<!-- END USER LOGIN DROPDOWN -->
