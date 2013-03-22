<div class="sharedExpenses view">
<h2><?php  echo __('Shared Expense');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sharedExpense['SharedExpense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($sharedExpense['SharedExpense']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($sharedExpense['SharedExpense']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billingcycle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sharedExpense['Billingcycle']['name'], array('controller' => 'billingcycles', 'action' => 'view', $sharedExpense['Billingcycle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Household'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sharedExpense['Household']['id'], array('controller' => 'households', 'action' => 'view', $sharedExpense['Household']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bill Month'); ?></dt>
		<dd>
			<?php echo h($sharedExpense['SharedExpense']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid'); ?></dt>
		<dd>
			<?php echo h($sharedExpense['SharedExpense']['ispaid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($sharedExpense['SharedExpense']['duedate']); ?>
			&nbsp;
		</dd>
	</dl>
	
	<br><br>
	
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shared Expense'), array('action' => 'edit', $sharedExpense['SharedExpense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shared Expense'), array('action' => 'delete', $sharedExpense['SharedExpense']['id']), null, __('Are you sure you want to delete # %s?', $sharedExpense['SharedExpense']['id'])); ?> </li>
	</ul>
</div>
