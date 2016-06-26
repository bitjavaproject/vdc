<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php if($title_for_layout == 'Holidays') $title_for_layout = 'Events and Holidays'; echo $title_for_layout; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<?php
	echo $this->Html->meta('icon');
	echo $this->fetch('meta');

	echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all');
    
    echo $this->Html->css(array('../plugins/font-awesome/css/font-awesome.min',
    							'../plugins/jquery-ui/jquery-ui-1.11.1.min',
                                '../plugins/simple-line-icons/simple-line-icons.min',
                                '../plugins/bootstrap/css/bootstrap.min',
                                '../plugins/uniform/css/uniform.default',
                                '../plugins/bootstrap-switch/css/bootstrap-switch.min',
                                '../plugins/select2/select2',
                                '../plugins/bootstrap-daterangepicker/daterangepicker-bs3',
								'../plugins/datatables/plugins/bootstrap/dataTables.bootstrap',
								'../plugins/fullcalendar/fullcalendar.min',
								'../plugins/bootstrap-datepicker/css/datepicker3'));

    echo $this->fetch('css');
    echo $this->Html->css(array('components', 'plugins', 'layout', 'default','AdminLTE.min' ));
    echo $this->Html->css(array('routes', 'custom'));

    /* START CORE PLUGINS */
    echo '<!--[if lt IE 9]>';
    echo $this->Html->script(array('../plugins/respond.min',
                                   '../plugins/excanvas.min'));
    echo '<![endif]-->';
    echo $this->Html->script(array('../plugins/jquery.min',
                                   '../plugins/jquery-migrate.min',
                                   '../plugins/jquery-ui/jquery-ui-1.10.3.custom.min',
                                   '../plugins/jquery-ui/jquery-ui-1.11.1.min',
                                   '../plugins/bootstrap/js/bootstrap.min',
                                   '../plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min',
                                   '../plugins/jquery-slimscroll/jquery.slimscroll.min',
                                   '../plugins/jquery.blockui.min',
                                   '../plugins/jquery.cokie.min',
                                   '../plugins/uniform/jquery.uniform.min',
                                   '../plugins/bootstrap-switch/js/bootstrap-switch.min',
                                   '../plugins/select2/select2.min',
								   '../plugins/bootstrap-daterangepicker/moment.min',
								   '../plugins/bootstrap-daterangepicker/daterangepicker',
								   '../plugins/datatables/media/js/jquery.dataTables.min',
								   '../plugins/datatables/plugins/bootstrap/dataTables.bootstrap',
								   '../plugins/fullcalendar/fullcalendar.min',
								   '../plugins/bootstrap-datepicker/js/bootstrap-datepicker'));
								   
    /* END CORE PLUGINS */
    /* BEGIN PAGE LEVEL SCRIPTS */
    echo $this->fetch('script');
    echo $this->Html->script(array('metronic', 'layout', 'quick-sidebar'));
    echo $this->Html->script(array( 'record'));
    
	?>
	<script type="text/javascript">var host_url =   '<?php echo Router::url('/', true); ?>';</script>
</head>
<body class="page-header-fixed">
    <?php echo $this->element('header'); ?>
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN SIDEBAR -->
			<?php echo $this->element('sidebar'); ?>
			<!-- END SIDEBAR -->
			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
			<?php 
				//Set Session Start Date and End Date in FullCalender.js
				 $st_date = strtotime($this->Session->read('CurrentStartDate')) * 1000;
				$en_date = strtotime($this->Session->read('CurrentEndDate')) * 1000;
				echo $this->Html->scriptBlock('StartDate = new Date('.$st_date.')');
				echo $this->Html->scriptBlock('EndDate = new Date('.$en_date.')'); 
				
				echo $this->Html->div('page-content', 
				$this->element('breadcrumb') .
				//$this->element('dashboard-stats') .
				$this->Html->div('clearfix', '') .
				$this->Session->flash() . 
				$this->fetch('content')
			);
			?>
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <?php echo $this->element('footer'); ?>
    <?php //echo $this->element('sql_dump'); ?>
    <!-- END FOOTER -->

<script>
jQuery(document).ready(function() {    
	Metronic.init(); // init metronic core componets
	Layout.init(); // init layout
	QuickSidebar.init(); // init quick sidebar
	//below function has been written because it needed to be called after above functions.
});
</script>
</body>
</html>
