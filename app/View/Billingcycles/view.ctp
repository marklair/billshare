<div class="billingcycles view">
<h2><?php  echo __('Billingcycle');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($billingcycle['Billingcycle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($billingcycle['Billingcycle']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>


<!-- admin only
<div class="related">
	<h3><?php echo __('Related Personal Expenses');?></h3>
	<?php if (!empty($billingcycle['PersonalExpense'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Billingcycle Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($billingcycle['PersonalExpense'] as $personalExpense): ?>
		<tr>
			<td><?php echo $personalExpense['id'];?></td>
			<td><?php echo $personalExpense['user_id'];?></td>
			<td><?php echo $personalExpense['name'];?></td>
			<td><?php echo $personalExpense['amount'];?></td>
			<td><?php echo $personalExpense['billingcycle_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personal_expenses', 'action' => 'view', $personalExpense['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personal_expenses', 'action' => 'edit', $personalExpense['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personal_expenses', 'action' => 'delete', $personalExpense['id']), null, __('Are you sure you want to delete # %s?', $personalExpense['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personal Expense'), array('controller' => 'personal_expenses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Shared Expenses');?></h3>
	<?php if (!empty($billingcycle['SharedExpense'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Billingcycle Id'); ?></th>
		<th><?php echo __('Household Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($billingcycle['SharedExpense'] as $sharedExpense): ?>
		<tr>
			<td><?php echo $sharedExpense['id'];?></td>
			<td><?php echo $sharedExpense['name'];?></td>
			<td><?php echo $sharedExpense['amount'];?></td>
			<td><?php echo $sharedExpense['billingcycle_id'];?></td>
			<td><?php echo $sharedExpense['household_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shared_expenses', 'action' => 'view', $sharedExpense['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shared_expenses', 'action' => 'edit', $sharedExpense['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shared_expenses', 'action' => 'delete', $sharedExpense['id']), null, __('Are you sure you want to delete # %s?', $sharedExpense['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shared Expense'), array('controller' => 'shared_expenses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
-->