
<!--<h3 class="page-title"> Dashboard <small>reports &amp; statistics</small></h3>-->
<div class="page-bar">
	<div class="col-md-12">
		 <h1></h1>
	</div>
	<div class="top-menu">
	
	<!--<div class="page-toolbar pull-left">
		<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
			<i class="icon-calendar"></i>&nbsp; 
			<span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp; 
			<i class="fa fa-angle-down"></i>
		</div>
	</div>-->
	
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
                <?php echo $this->element('header-login'); ?>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
		</div>

	<!--<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<?php if($title_for_layout == 'Holidays') $title_for_layout = 'Events and Holidays';?>
			<a href="#"><?php echo ($title_for_layout == 'Home')? 'Dashboard': $title_for_layout; ?> </a>
		</li>
	</ul>-->
	
	<?php 
		if($this->Session->read('Auth.User.role_id') == 3){
			if(!empty($students)){?>
	<div class="col-md-3 pull-right">
	</div>
	<?php }}?>
</div>
