<div class="users index">
	<?php
	echo 'role: '.$role; 
	echo '<br>';
	echo 'household: '.$household_id;
	echo '<br>';
	echo 'user_ID: '.$user_id;
	echo '<br>';
	?>
	<h2><?php echo __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<!--	<th><?php echo $this->Paginator->sort('id');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('username');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('password');?></th> -->
			<th><?php echo $this->Paginator->sort('firstname');?></th>
			<th><?php echo $this->Paginator->sort('lastname');?></th>
		<!--	<th><?php echo $this->Paginator->sort('phone');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('email');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('household_id');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('income_amt');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('payfreq_id');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('created');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('modified');?></th> -->
		<!--	<th><?php echo $this->Paginator->sort('role');?></th> -->
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($users as $user): 
		//debug($user);
/*
		if ($role == 'admin') {
			echo $this->element('user_info', array('user' => $user));
		} elseif ($role == 'hoh') {
			if (($user['Household']['id']) == ($household_id)) {
				echo $this->element('user_info', array('user' => $user));
			}
		} elseif ($role == 'user') {
			if (($user['Household']['id']) == ($household_id)) {
			//if (($user['User']['id']) == ($user_id)) {
				echo $this->element('user_info', array('user' => $user));
			}
		}
*/
		echo $this->element('user_info', array('user' => $user));			
	?>	

<!--
	<?php 
		if ($role != 'admin') {
			if (($user['Household']['id']) == ($household_id)) {
	?>
	<?php echo $this->element('book_info', array('book' => $book)); ?>	
	


	<?php
			}
		}
	?>	
-->		
	
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