<div class="comments form">
<?php
	echo 'role: '.$role; 
	echo '<br>';
	echo 'household: '.$household_id;
	echo '<br>';
	echo 'user: '.$user_id;
	echo '<br>';
//	echo 'post: '.$post_id;
	echo '<br>';
	//echo 'canComment: '.$canCommentData;
	
	echo $this->element('comment_edit');
?>

</div>
