	<?php
	echo '<b>role: </b>'.$role; 
	echo '<br>';
	echo '<b>household: </b>'.$household_id;
	echo '<br>';
	echo '<b>user_ID: </b>'.$user_id;
	echo '<br>';
	?>
<?php
	if ($role == 'admin') {
		echo $this->element('user_edit', array('user' => $user));
	} elseif ($role == 'hoh') {
		if ($household == $household_id) {
			echo $this->element('user_edit', array('user' => $user));
		} else {
			echo 'you are not authorized to edit this profile'.$household;
		}
	} elseif ($role == 'user') {
		if ($user == $user_id) {
			echo $this->element('user_edit', array('user' => $user));
		} else {
			echo 'you are not authorized to edit this profile';
		}
	} else {
		echo 'you are not authorized to access this page';
	}
?>
