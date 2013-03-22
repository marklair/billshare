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
		echo $this->element('post_detail', array('post' => $post));
	} elseif (($role == 'hoh') || ($role == 'user')) {
		if ((($post['Post']['household_id']) == $household_id) || (($post['User']['role']) == 'admin')) {
			echo $this->element('post_detail', array('post' => $post));
		} else {
			echo 'you are trying to view a post that is not in your household';
		}
	
//	} elseif ($role == 'user') {
//		if (($user['User']['id']) == $user_id) {
//			echo $this->element('user_detail', array('user' => $user));
//		} else {
//			echo 'You are not permitted to view details of a user other than yourself';
//		}
	} else {
			echo 'You are Not a registered user';
	}
	
?>



<div class="related">
	<h3><?php echo __('Related Comments');?></h3>
	<?php if (!empty($post['Comment'])):?>
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
		foreach ($post['Comment'] as $comment): ?>
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id']));
				if ($role == 'admin') {
					echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id']));
					echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id']));
				} else if ($user_id == ($comment['user_id'])) {
					echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id']));
					echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id']));				
				}
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add', 'post', $post['Post']['id']));?> </li>
		</ul>
	</div>
</div>
