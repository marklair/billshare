
		<h2><?php echo __('Household Functions'); ?></h2>
		<ul data-role="listview" data-filter="false" data-inset="true" data-filter-theme="c" data-divider-theme="d">
			<li data-role="list-divider"><?php echo __('My Household'); ?></li>
			<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li data-role="list-divider"><?php echo __('Expense Functions'); ?></li>
			<li><?php echo $this->Html->link(__('List Personal Expenses'), array('controller' => 'personal_expenses', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Personal Expense'), array('controller' => 'personal_expenses', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Shared Expenses'), array('controller' => 'shared_expenses', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Shared Expense'), array('controller' => 'shared_expenses', 'action' => 'add')); ?> </li>
		</ul>

