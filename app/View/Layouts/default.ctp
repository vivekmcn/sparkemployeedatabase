<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('Sparksupport', 'Sparksupport | Employee Database');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
                    <img src="<?php echo Router::url('/',true)?>app/webroot/img/logo_main.png" width ="150px" height="40px"/>
                    <div style="float: right;width: auto">
                    <?php echo $this->Html->link('Logout',array('controller' => 'Users','action' => 'logout'))?>
                    <?php echo $this->Html->link('DASHBOARD',array('controller' => 'Users','action' => 'dashboard'))?>
                    </div>
                    
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
                    <p>copyright @ <a href="http://www.sparksupport.com">Spark Support</a></p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
