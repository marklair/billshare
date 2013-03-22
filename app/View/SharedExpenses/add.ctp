<div class="sharedExpenses form">
<?php echo $this->Form->create('SharedExpense');?>
	<fieldset>
		<legend><?php echo __('Add Shared Expense'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('amount');
		echo $this->Form->input('billingcycle_id');
		echo $this->Form->input('household_id');
		echo $this->Form->input('month');
		echo $this->Form->input('ispaid');
		echo $this->Form->input('duedate');
	?>
	</fieldset>
	
	<br>
	<br>
<?php echo $this->Form->end(__('Submit'));?>
</div>
