<?php 

	require_once('../../../wp-load.php');
	if(add_to_subcriber_group($_POST['subcriber_email'])){
		echo 'success';
	}
	else{
		echo 'forbidden';
	}
?>