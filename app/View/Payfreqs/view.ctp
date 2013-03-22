<div class="payfreqs view">
<h2><?php  echo __('Payfreq');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($payfreq['Payfreq']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($payfreq['Payfreq']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multiplier'); ?></dt>
		<dd>
			<?php echo h($payfreq['Payfreq']['multiplier']); ?>
			&nbsp;
		</dd>
	</dl>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payfreq'), array('action' => 'edit', $payfreq['Payfreq']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payfreq'), array('action' => 'delete', $payfreq['Payfreq']['id']), null, __('Are you sure you want to delete # %s?', $payfreq['Payfreq']['id'])); ?> </li>
	</ul>
</div>



<!-- admin only
<div class="related">
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($payfreq['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Household Id'); ?></th>
		<th><?php echo __('Income Amt'); ?></th>
		<th><?php echo __('Payfreq Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($payfreq['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['firstname'];?></td>
			<td><?php echo $user['lastname'];?></td>
			<td><?php echo $user['phone'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['household_id'];?></td>
			<td><?php echo $user['income_amt'];?></td>
			<td><?php echo $user['payfreq_id'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td><?php echo $user['role'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
-->