<?php
	echo '<b>role: </b>'.$role; 
	echo '<br>';
	echo '<b>household: </b>'.$household_id;
	echo '<br>';
	echo '<b>user_ID: </b>'.$user_id;
	echo '<br>';
?>
<?php
	if($role == 'admin') {
		echo $this->element('post_edit', array('post' => $post));
	} elseif ($role == 'hoh') {
		if (($post['Household']['id']) == $household_id) {
			echo $this->element('post_edit', array('post' => $post));
		}
	} elseif ($role = 'user') {
		if (($post['User']['id']) == $user_id) {
			echo $this->element('post_edit', array('post' => $post));
		}
	} else {
		echo 'you are not authorized to access this page';
	}
	
?>
