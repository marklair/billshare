<div data-role="collapsible-set" data-theme="b" data-content-theme="d">
	<div data-role="collapsible">
		<h2><?php echo __('Pages'); ?></h2>
		<ul data-role="listview" data-filter="true" data-filter-theme="c" data-divider-theme="d">
			<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		</ul>
	</div>
	<div data-role="collapsible">
		<h2><?php echo __('Account Functions'); ?></h2>
		<ul data-role="listview" data-filter="true" data-filter-theme="c" data-divider-theme="d">
	<?php
		if ((isset($myself)) && ($myself['role'] != '')) {
			echo '<li>'. $this->Html->link(__('View My Account'), array('controller' => 'users', 'action' => 'view', $myself['id'])).'</li>';
			echo '<li>'. $this->Html->link(__('Edit My Account'), array('controller' => 'users', 'action' => 'edit', $myself['id'])).'</li>';
			echo '<li>'. $this->Html->link(__('Log Out'), array('controller' => 'users', 'action' => 'logout')).'</li>';
			echo '</ul>';

		} elseif ((isset($role)) && ($role != '')) {

			echo '<li>'. $this->Html->link(__('View My Account'), array('controller' => 'users', 'action' => 'view', $user_id)).'</li>';
			echo '<li>'. $this->Html->link(__('Edit My Account'), array('controller' => 'users', 'action' => 'edit', $user_id)).'</li>';
			echo '<li>'. $this->Html->link(__('Log Out'), array('controller' => 'users', 'action' => 'logout')).'</li>';
			echo '</ul>';

		} else {

			echo '<li>'. $this->Html->link(__('Log In'), array('controller' => 'users', 'action' => 'login')).'</li>';
			echo '<li>'. $this->Html->link(__('Register New Account'), array('controller' => 'users', 'action' => 'add')).'</li>';
			echo '</ul>';

		}
	?>
		</ul>
	</div>
	<div data-role="collapsible">
		<h2><?php echo __('Household Functions'); ?></h2>
		<ul data-role="listview" data-filter="true" data-filter-theme="c" data-divider-theme="d">
			<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('List Personal Expenses'), array('controller' => 'personal_expenses', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Personal Expense'), array('controller' => 'personal_expenses', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Shared Expenses'), array('controller' => 'shared_expenses', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Shared Expense'), array('controller' => 'shared_expenses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<div data-role="collapsible">
		<h2><?php echo __('Social Functions'); ?></h2>
		<ul data-role="listview" data-filter="true" data-filter-theme="c" data-divider-theme="d">
			<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		</ul>
	</div>
<?php 
	if (isset($role)) {
		if ($role == 'admin') {
?>
	<div data-role="collapsible">
		<h2><?php echo __('Admin Functions'); ?></h2>
		<ul data-role="listview" data-filter="true" data-filter-theme="c" data-divider-theme="d">
			<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Payfreqs'), array('controller' => 'payfreqs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Payfreq'), array('controller' => 'payfreqs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Payfreqs'), array('controller' => 'payfreqs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Payfreq'), array('controller' => 'payfreqs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Billingcycles'), array('controller' => 'billingcycles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Billingcycle'), array('controller' => 'billingcycles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		</ul>
	</div>
<?php 
		}
	} else {
		if (($myself['role']) == 'admin') {
?>
	<div data-role="collapsible">
		<h2><?php echo __('Admin Functions'); ?></h2>
		<ul data-role="listview" data-filter="true" data-filter-theme="c" data-divider-theme="d">
			<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Payfreqs'), array('controller' => 'payfreqs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Payfreq'), array('controller' => 'payfreqs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Payfreqs'), array('controller' => 'payfreqs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Payfreq'), array('controller' => 'payfreqs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Billingcycles'), array('controller' => 'billingcycles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Billingcycle'), array('controller' => 'billingcycles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		</ul>
	</div>
<?php
		}
	}

//echo($myself['role']);
?>
</div>