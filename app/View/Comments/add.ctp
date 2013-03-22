<?php
	echo 'role: '.$role; 
	echo '<br>';
	echo 'household: '.$household_id;
	echo '<br>';
	echo 'user: '.$user_id;
	echo '<br>';
	echo 'post: '.$post_id;
	echo '<br>';
	//echo 'canComment: '.$canCommentData;
?>
<?php
	if ($CommentHouseholdID == $household_id) {
?>
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
<?php
	} else {	
	
	echo '<div class="comments view"><p>You are Not Authorized to comment on this post!</p></div>';

	}
?>
