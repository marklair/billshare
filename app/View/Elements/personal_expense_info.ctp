		<tr>
			<td><?php echo $this->Html->link($comment['Comment']['id'], array('controller' => 'comments', 'action' => 'view', $comment['Comment']['id']));?></td>
			<td><?php echo $this->Html->link($comment['Comment']['user_id'], array('controller' => 'users', 'action' => 'view', $comment['Comment']['user_id']));?></td>
			<td><?php echo $this->Html->link($comment['Comment']['household_id'], array('controller' => 'households', 'action' => 'view', $comment['Comment']['household_id']));?></td>
			<td><?php echo $this->Html->link($comment['Comment']['post_id'], array('controller' => 'posts', 'action' => 'view', $comment['Comment']['post_id']));?></td>
			<td><?php echo $comment['Comment']['title'];?></td>
			<td><?php echo $comment['Comment']['body'];?></td>
			<td><?php echo $comment['Comment']['created'];?></td>
			<td><?php echo $comment['Comment']['modified'];?></td>
			<td class="actions">
				<?php
						echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['Comment']['id']));
					if ($role == 'admin') {
						echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['Comment']['id']));
						echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['Comment']['id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['id']));
					} else if ($user_id == ($comment['Comment']['user_id'])){
						echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['Comment']['id']));
						echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['Comment']['id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['id']));						
					}
				?>
			</td>
		</tr>