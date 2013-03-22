	<tr>
	<!--	<td><?php echo h($user['User']['id']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['username']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['password']); ?>&nbsp;</td> -->
		<td><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
	<!--	<td><?php echo h($user['User']['phone']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['email']); ?>&nbsp;</td> -->
	<!--	<td>
			<?php echo $this->Html->link($user['Household']['id'], array('controller' => 'households', 'action' => 'view', $user['Household']['id'])); ?>
		</td> -->
	<!--	<td><?php echo h($user['User']['income_amt']); ?>&nbsp;</td> -->
	<!--	<td>
			<?php echo $this->Html->link($user['Payfreq']['name'], array('controller' => 'payfreqs', 'action' => 'view', $user['Payfreq']['id'])); ?>
		</td> -->
	<!--	<td><?php echo h($user['User']['created']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['modified']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['role']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']));
			if ($role == 'admin') {
				echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']));
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id']));
			} elseif ($role == 'hoh') {
				if (($user['Household']['id']) == ($household_id)) {
					echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']));
					echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id']));
				}
			} elseif ($role == 'user') {
				if (($user['User']['id']) == ($user_id)) {
					echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']));
					echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id']));
				}
			}
			?>
		</td>
	</tr>