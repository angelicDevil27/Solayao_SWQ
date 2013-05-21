<?php
	include 'DAO/SystemDAO.php';
	
	$quotesText = $_POST['quotes'];
	
	$action = new SystemDAO();
		$action->post_Quotes($quotesText);

?>
