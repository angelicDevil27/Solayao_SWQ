<?php
	include 'DAO/SystemDAO.php';
		
	$action = new SystemDAO();
	
	$comment_id = $_POST['comment_id'];
	
		$action->view_comment($comment_id);

?>
