
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('household_id');
		echo $this->Form->input('income_amt');
		echo $this->Form->input('payfreq_id');
//		echo $this->Form->input('role');
		if (isset($role) && ($role == 'admin'))  {
	        echo $this->Form->input('role', array(
             'options' => array('admin' => 'Admin', 'hoh' => 'Head of House', 'user' => 'resident')));
        } else {
	        echo $this->Form->input('role', array(
           	  'options' => array('hoh' => 'Head of House', 'user' => 'resident')));
		}
        
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?>
</div>