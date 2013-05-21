<?php
	include 'DAO/SystemDAO.php';
	
	$id = $_POST['id'];
	
	$action = new SystemDAO();
		$action->delete_Quotes($id);
?>
