<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all');
        
        echo $this->Html->css(array('../plugins/login/css/style'));
        
        echo $this->Html->css('default', array('id' => 'style_color'));
        

        /* START CORE PLUGINS */
        echo '<!--[if lt IE 9]>';
        echo $this->Html->script(array('../plugins/respond.min',
                                       '../plugins/excanvas.min'));
        echo '<![endif]-->';
        echo $this->Html->script(array('../plugins/login/js/index',
                                       '../plugins/jquery.min',
                                       
                                       ));
        /* END CORE PLUGINS */
        /* BEGIN PAGE LEVEL PLUGINS */
        echo $this->Html->script(array( ));
        /* END PAGE LEVEL PLUGINS */
        /* BEGIN PAGE LEVEL SCRIPTS */
        echo $this->Html->script(array('metronic', 'layout', 'login'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

   <div class="content">
    <?php echo $this->Session->flash();?>
    <?php echo $this->fetch('content'); ?>
</div>
</body>
</html>
