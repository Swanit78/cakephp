<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css(array('style.css','bootstrap.min','bootstrap-theme.min'));
		echo $this->Html->script(array('docs.min','jquery.min','bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

<?php echo $this->element('menu'); ?>



<div class="container theme-showcase" role="main"  style="margin-top: 70px;">

      
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>


	
		
</div>
</body>
</html>
