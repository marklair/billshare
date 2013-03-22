<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility', 'UsersController', 'AppController', 'Controller');
//App::uses('Debugger', 'Utility');
?>

	
		<?php
			echo $myself['role']; 
			echo '<br>';
			echo $myself['household_id'];
			echo '<br>';
			echo $myself['id'];
			echo '<br>';
			//echo $last_id;
		?>

		<?php
			if ($myself['role']) {
		?>
		
			<p>Welcome Back, <?php echo $myself['firstname'] ?></p>
			<?php
				echo $this->Html->link(__('Log Out'), array('controller' => 'users', 'action' => 'logout'), array('data-role' => 'button'));
			?>
		<?php
		} else {
		?>
		
			<p>Welcome to Bill Share.... The progressive way to collectively keep track of bills, income and expenses and organize your own personal and household budgets.... Register or login to get started now!</p>
		
			<?php
				echo $this->Html->link(__('Log In'), array('controller' => 'users', 'action' => 'login'), array('data-role' => 'button'));
				echo $this->Html->link(__('Register New Account'), array('controller' => 'users', 'action' => 'add'), array('data-role' => 'button'));
			?>
		
		
		<?php	
		}
		?>

		


