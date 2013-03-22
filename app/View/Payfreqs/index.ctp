<div class="payfreqs index">
	<h2><?php echo __('Payfreqs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('multiplier');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($payfreqs as $payfreq): ?>
	<tr>
		<td><?php echo h($payfreq['Payfreq']['id']); ?>&nbsp;</td>
		<td><?php echo h($payfreq['Payfreq']['name']); ?>&nbsp;</td>
		<td><?php echo h($payfreq['Payfreq']['multiplier']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $payfreq['Payfreq']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $payfreq['Payfreq']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $payfreq['Payfreq']['id']), null, __('Are you sure you want to delete # %s?', $payfreq['Payfreq']['id'])); ?>
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