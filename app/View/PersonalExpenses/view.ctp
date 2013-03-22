<div class="personalExpenses view">
<h2><?php  echo __('Personal Expense');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personalExpense['PersonalExpense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalExpense['User']['id'], array('controller' => 'users', 'action' => 'view', $personalExpense['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($personalExpense['PersonalExpense']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($personalExpense['PersonalExpense']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billingcycle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalExpense['Billingcycle']['name'], array('controller' => 'billingcycles', 'action' => 'view', $personalExpense['Billingcycle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bill Month'); ?></dt>
		<dd>
			<?php echo h($personalExpense['PersonalExpense']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid'); ?></dt>
		<dd>
			<?php echo h($personalExpense['PersonalExpense']['ispaid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($personalExpense['PersonalExpense']['duedate']); ?>
			&nbsp;
		</dd>	</dl>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal Expense'), array('action' => 'edit', $personalExpense['PersonalExpense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal Expense'), array('action' => 'delete', $personalExpense['PersonalExpense']['id']), null, __('Are you sure you want to delete # %s?', $personalExpense['PersonalExpense']['id'])); ?> </li>
	</ul>
</div>

