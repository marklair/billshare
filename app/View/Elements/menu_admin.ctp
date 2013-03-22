<?php 
	if (isset($role)) {
		if ($role == 'admin') {
?>

		<h2><?php echo __('Admin Functions'); ?></h2>
		<ul data-role="listview" data-inset="true" data-filter="false" data-filter-theme="c" data-divider-theme="d">
			<li data-role="list-divider"><?php echo __('Household Functions'); ?></li>
			<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
			<li data-role="list-divider"><?php echo __('Global Functions'); ?></li>
			<li><?php echo $this->Html->link(__('List Payfreqs'), array('controller' => 'payfreqs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Payfreq'), array('controller' => 'payfreqs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Billingcycles'), array('controller' => 'billingcycles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Billingcycle'), array('controller' => 'billingcycles', 'action' => 'add')); ?> </li>

		</ul>

<?php 
		}
	} else {
		if (($myself['role']) == 'admin') {
?>

		<h2><?php echo __('Admin Functions'); ?></h2>
		<ul data-role="listview" data-inset="true" data-filter="false" data-filter-theme="c" data-divider-theme="d">
			<li data-role="list-divider"><?php echo __('Household Functions'); ?></li>
			<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
			<li data-role="list-divider"><?php echo __('Global Functions'); ?></li>
			<li><?php echo $this->Html->link(__('List Payfreqs'), array('controller' => 'payfreqs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Payfreq'), array('controller' => 'payfreqs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Billingcycles'), array('controller' => 'billingcycles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Billingcycle'), array('controller' => 'billingcycles', 'action' => 'add')); ?> </li>
		</ul>

<?php
		} else {
			echo ('You are not logged in');
		}
	}

//echo($myself['role']);
?>
