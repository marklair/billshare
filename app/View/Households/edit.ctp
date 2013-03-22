<?php
	echo $role; 
	echo '<br>';
	echo $household_id;
	echo '<br>';
	echo $user_id;
	echo '<br>';
	//echo $last_id;
?>
<?php
	if (($role == 'hoh') && ($household_id == $household)) {
		echo $this->element('household_edit', array('household' => $household));
	} elseif ($role == 'admin') {
		echo $this->element('household_edit', array('household' => $household));
	} else {
	echo 'you are not permitted to edit this household.';
	}
?>	
