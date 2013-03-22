<div class="billingcycles form">
<?php echo $this->Form->create('Billingcycle');?>
	<fieldset>
		<legend><?php echo __('Edit Billingcycle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
