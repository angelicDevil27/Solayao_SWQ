<?php
	include 'DAO/SystemDAO.php';
	
	$comment = $_POST['comment'];
	$Post_ID = $_POST['Post_Id'];
	
	
	 $action = new SystemDAO();
	 	$action->add_comment($comment,$Post_ID);

?>
