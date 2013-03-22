<div class="payfreqs form">
<?php echo $this->Form->create('Payfreq');?>
	<fieldset>
		<legend><?php echo __('Edit Payfreq'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('multiplier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Payfreq.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Payfreq.id'))); ?>
</div>


