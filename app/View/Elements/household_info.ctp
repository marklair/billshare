	<tr>
		<td><?php echo h($household['Household']['id']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['address']); ?>&nbsp;</td>

		<td><?php echo h($household['Household']['created']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['modified']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['city']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['state']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['zip']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['country']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $household['Household']['id'])); ?>
			<?php
				if(($role == 'admin') || ($role == 'hoh')) {
					 echo $this->Html->link(__('Edit'), array('action' => 'edit', $household['Household']['id']));
					 echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $household['Household']['id']), null, __('Are you sure you want to delete # %s?', $household['Household']['id']));
				}
			?>				
		</td>
	</tr>