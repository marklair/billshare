<div class="sharedExpenses form">
<?php echo $this->Form->create('SharedExpense');?>
	<fieldset>
		<legend><?php echo __('Edit Shared Expense'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('amount');
		echo $this->Form->input('billingcycle_id');
		echo $this->Form->input('household_id');
		echo $this->Form->input('month');
		echo $this->Form->input('ispaid');
		echo $this->Form->input('duedate');
	?>
	</fieldset>
	<br><br>
<?php echo $this->Form->end(__('Submit'));?>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SharedExpense.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SharedExpense.id'))); ?>
</div>
