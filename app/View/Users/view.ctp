<div>
<?php
	echo '<b>role: </b>'.$role; 
	echo '<br>';
	echo '<b>household: </b>'.$household_id;
	echo '<br>';
	echo '<b>user_ID: </b>'.$user_id;
	echo '<br>';
?>
<?php
	if ($role == 'admin') {
		echo $this->element('user_detail', array('user' => $user));
	} elseif ($role == 'hoh') {
		if (($user['User']['household_id']) == $household_id) {
			echo $this->element('user_detail', array('user' => $user));
		} else {
			echo 'you are trying to view a user that is not in your household';
		}
	
	} elseif ($role == 'user') {
		if (($user['User']['id']) == $user_id) {
			echo $this->element('user_detail', array('user' => $user));
		} else {
			echo 'You are not permitted to view details of a user other than yourself';
		}
	} else {
			echo 'You are Not a registered user';
	}
	
?>
</div>

<!-- admin only 

<div class="related">
	<h3><?php echo __('Related Comments');?></h3>
	<?php if (!empty($user['Comment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Household Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id'];?></td>
			<td><?php echo $comment['user_id'];?></td>
			<td><?php echo $comment['household_id'];?></td>
			<td><?php echo $comment['post_id'];?></td>
			<td><?php echo $comment['title'];?></td>
			<td><?php echo $comment['body'];?></td>
			<td><?php echo $comment['created'];?></td>
			<td><?php echo $comment['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Households');?></h3>
	<?php if (!empty($user['Household'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Household'] as $household): ?>
		<tr>
			<td><?php echo $household['id'];?></td>
			<td><?php echo $household['address'];?></td>
			<td><?php echo $household['user_id'];?></td>
			<td><?php echo $household['created'];?></td>
			<td><?php echo $household['modified'];?></td>
			<td><?php echo $household['city'];?></td>
			<td><?php echo $household['state'];?></td>
			<td><?php echo $household['zip'];?></td>
			<td><?php echo $household['country'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'households', 'action' => 'view', $household['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'households', 'action' => 'edit', $household['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'households', 'action' => 'delete', $household['id']), null, __('Are you sure you want to delete # %s?', $household['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Personal Expenses');?></h3>
	<?php if (!empty($user['PersonalExpense'])):?>
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
		foreach ($user['PersonalExpense'] as $personalExpense): ?>
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
	<h3><?php echo __('Related Posts');?></h3>
	<?php if (!empty($user['Post'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Household Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id'];?></td>
			<td><?php echo $post['household_id'];?></td>
			<td><?php echo $post['user_id'];?></td>
			<td><?php echo $post['created'];?></td>
			<td><?php echo $post['modified'];?></td>
			<td><?php echo $post['title'];?></td>
			<td><?php echo $post['body'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
-->