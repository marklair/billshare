<div class="posts form">
<?php
	echo '<b>role: </b>'.$role; 
	echo '<br>';
	echo '<b>household: </b>'.$household_id;
	echo '<br>';
	echo '<b>user_ID: </b>'.$user_id;
	echo '<br>';
?>
<?php echo $this->Form->create('Post');?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('household_id', array(
			//'options' => array($household_id),
			'type' => 'hidden',
			'value' => $household_id));
//		echo $this->Form->input('user_id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
