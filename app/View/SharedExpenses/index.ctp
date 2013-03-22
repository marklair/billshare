<div class="sharedExpenses index">
	<h2><?php echo __('Shared Expenses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('billingcycle_id');?></th>
			<th><?php echo $this->Paginator->sort('household_id');?></th>
			<th><?php echo $this->Paginator->sort('month');?></th>
			<th><?php echo $this->Paginator->sort('ispaid');?></th>
			<th><?php echo $this->Paginator->sort('duedate');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($sharedExpenses as $sharedExpense): ?>
	<tr>
		<td><?php echo h($sharedExpense['SharedExpense']['id']); ?>&nbsp;</td>
		<td><?php echo h($sharedExpense['SharedExpense']['name']); ?>&nbsp;</td>
		<td><?php echo h($sharedExpense['SharedExpense']['amount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sharedExpense['Billingcycle']['name'], array('controller' => 'billingcycles', 'action' => 'view', $sharedExpense['Billingcycle']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sharedExpense['Household']['id'], array('controller' => 'households', 'action' => 'view', $sharedExpense['Household']['id'])); ?>
		</td>
		<td><?php echo h($sharedExpense['SharedExpense']['month']); ?>&nbsp;</td>
		<td><?php echo h($sharedExpense['SharedExpense']['ispaid']); ?>&nbsp;</td>
		<td><?php echo h($sharedExpense['SharedExpense']['duedate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sharedExpense['SharedExpense']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sharedExpense['SharedExpense']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sharedExpense['SharedExpense']['id']), null, __('Are you sure you want to delete # %s?', $sharedExpense['SharedExpense']['id'])); ?>
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

