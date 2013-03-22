<div class="personalExpenses index">
	<h2><?php echo __('Personal Expenses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('billingcycle_id');?></th>
			<th><?php echo $this->Paginator->sort('month');?></th>
			<th><?php echo $this->Paginator->sort('ispaid');?></th>
			<th><?php echo $this->Paginator->sort('duedate');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($personalExpenses as $personalExpense): ?>
	<tr>
		<td><?php echo h($personalExpense['PersonalExpense']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personalExpense['User']['id'], array('controller' => 'users', 'action' => 'view', $personalExpense['User']['id'])); ?>
		</td>
		<td><?php echo h($personalExpense['PersonalExpense']['name']); ?>&nbsp;</td>
		<td><?php echo h($personalExpense['PersonalExpense']['amount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personalExpense['Billingcycle']['name'], array('controller' => 'billingcycles', 'action' => 'view', $personalExpense['Billingcycle']['id'])); ?>
		</td>
		<td><?php echo h($personalExpense['PersonalExpense']['month']); ?>&nbsp;</td>
		<td><?php echo h($personalExpense['PersonalExpense']['ispaid']); ?>&nbsp;</td>
		<td><?php echo h($personalExpense['PersonalExpense']['duedate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personalExpense['PersonalExpense']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personalExpense['PersonalExpense']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personalExpense['PersonalExpense']['id']), null, __('Are you sure you want to delete # %s?', $personalExpense['PersonalExpense']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

