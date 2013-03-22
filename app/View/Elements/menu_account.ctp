
	<h2><?php echo __('Account Functions'); ?></h2>
	<ul data-role="listview" data-inset="true" data-filter="false" data-filter-theme="c" data-divider-theme="d">
	<?php
		if ((isset($myself)) && ($myself['role'] != '')) {
			echo '<li data-role="list-divider">';
				echo __('My Account');
			echo '</li>';
			echo '<li>'. $this->Html->link(__('View My Account'), array('controller' => 'users', 'action' => 'view', $myself['id'])).'</li>';
			echo '<li>'. $this->Html->link(__('Edit My Account'), array('controller' => 'users', 'action' => 'edit', $myself['id'])).'</li>';
			echo '<li>'. $this->Html->link(__('Log Out'), array('controller' => 'users', 'action' => 'logout')).'</li>';


		} elseif ((isset($role)) && ($role != '')) {
			echo '<li data-role="list-divider">';
				echo __('My Account');
			echo '</li>';
			echo '<li>'. $this->Html->link(__('View My Account'), array('controller' => 'users', 'action' => 'view', $user_id)).'</li>';
			echo '<li>'. $this->Html->link(__('Edit My Account'), array('controller' => 'users', 'action' => 'edit', $user_id)).'</li>';
			echo '<li>'. $this->Html->link(__('Log Out'), array('controller' => 'users', 'action' => 'logout')).'</li>';
	

		} else {
			echo '<li data-role="list-divider">';
				echo __('My Account');
			echo '</li>';
			echo '<li>'. $this->Html->link(__('Log In'), array('controller' => 'users', 'action' => 'login')).'</li>';
			echo '<li>'. $this->Html->link(__('Register New Account'), array('controller' => 'users', 'action' => 'add')).'</li>';


		}
	?>
	</ul>
