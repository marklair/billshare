	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($post['Household']['id'], array('controller' => 'households', 'action' => 'view', $post['Household']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['User']['fullname'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
		</td>
		<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['body']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id']));
				if ($role == 'admin') {
					echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id']));
					echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id']));
				} elseif ($role == 'hoh') {
					if (($post['Household']['id']) == $household_id) {
						echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id']));
						echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id']));
					}
				} else {
					if (($post['User']['id']) == $user_id) {
						echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id']));
						echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id']));
					}
				}
			?>
	</td>
	</tr>