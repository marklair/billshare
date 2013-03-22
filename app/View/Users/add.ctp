<div class="users form">

<?php echo $this->Form->create('User', array('data-ajax' => 'false'));?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		if (isset($household)) {
			echo $this->Form->hidden('household_id', array(
				'value' => $household,
				'type' => 'text',
				));
		}
		echo $this->Form->input('income_amt');
		echo $this->Form->input('payfreq_id');
		if (isset($role) && ($role == 'admin')) {
	        echo $this->Form->input('role', array(
             'options' => array('admin' => 'Admin', 'hoh' => 'Head of House', 'user' => 'resident')));
        } else {
        	if ($invite == '1') {
		        echo $this->Form->input('role', array(
    	       	  'options' => array('user' => 'resident')));
     		} elseif (isset($role) && ($role == 'hoh'))  {
		        echo $this->Form->input('role', array(
    	       	  'options' => array('hoh' => 'Head of House', 'user' => 'resident')));
    		} else {
		        echo $this->Form->input('role', array(
    	       	  'options' => array('hoh' => 'Head of House')));
    		}
		}
//		echo $this->Form->input('role');
	?>
	</fieldset>
	
<br><br>
<?php echo $this->Form->end(__('Submit'));?>
</div>
