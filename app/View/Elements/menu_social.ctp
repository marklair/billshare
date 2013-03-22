	<h2><?php echo __('Social Functions'); ?></h2>
	
	<ul data-role="listview" data-inset="true" data-filter="false" data-filter-theme="c" data-divider-theme="d">
		<li data-role="list-divider"><?php echo __('Household Posts'); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
	</ul>
<br><br><br><br><br>