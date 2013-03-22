<div class="personalExpenses form">
<?php echo $this->Form->create('PersonalExpense');?>
	<fieldset>
		<legend><?php echo __('Edit Personal Expense'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('amount');
		echo $this->Form->input('billingcycle_id');
		echo $this->Form->input('month');
		echo $this->Form->input('ispaid');
		echo $this->Form->input('duedate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonalExpense.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PersonalExpense.id'))); ?>
</div>


