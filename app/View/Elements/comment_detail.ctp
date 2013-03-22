<div class="comments form">
<?php echo $this->Form->create('Comment');?>
	<fieldset>
		<legend><?php echo __('Add Comment'); ?></legend>
	<?php
		echo $this->Form->input('user_id', array(
			'type' => 'hidden',
			'value' => $user_id));
		echo $this->Form->input('household_id', array(
			//'options' => array($household_id),
			'type' => 'hidden',
			'value' => $household_id));
		//echo $this->Post;
		echo $this->Form->input('post_id', array(
			'type' => 'hidden',
			'value' => $post_id));
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
