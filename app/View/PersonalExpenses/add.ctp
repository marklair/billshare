<div class="personalExpenses form">
<?php
	echo '<b>role: </b>'.$role; 
	echo '<br>';
	echo '<b>household: </b>'.$household_id;
	echo '<br>';
	echo '<b>user_ID: </b>'.$user_id;
	echo '<br>';
?>
<?php echo $this->Form->create('PersonalExpense');?>
	<fieldset>
		<legend><?php echo __('Add Personal Expense'); ?></legend>
	<?php
		//echo $this->Form->input('user_id');
		echo $this->Form->input('user_id', array(
			'type' => 'hidden',
			'value' => $user_id));
		echo $this->Form->input('name', array(
			'label' => 'Expense Name'));
		echo $this->Form->input('amount', array(
			'label' => 'Expense Amount'));
		echo $this->Form->input('billingcycle_id', array(
			'label' => 'Billing Cycle'));
		echo $this->Form->input('month', array(
			'label' => 'Bill Month'));
		echo $this->Form->input('ispaid', array(
			'label' => 'Paid'));
		echo $this->Form->input('duedate', array(
			'label' => 'Due Date'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>


