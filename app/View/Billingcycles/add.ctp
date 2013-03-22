<div class="billingcycles form">
<?php echo $this->Form->create('Billingcycle');?>
	<fieldset>
		<legend><?php echo __('Add Billingcycle'); ?></legend>
	<?php
		echo $this->Form->input('name', array('value placeholder'=>'Name The Billing Cycle i.e. Annually, Monthly, etc'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
