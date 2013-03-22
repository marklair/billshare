<div class="payfreqs form">
<?php echo $this->Form->create('Payfreq');?>
	<fieldset>
		<legend><?php echo __('Add Payfreq'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('multiplier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
