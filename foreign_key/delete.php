<?php 
	require_once('connection.php');
	if(isset($_GET['deleteid']) && $_GET['table']){
		$table=$_GET['table'];
		$where['id']=$_GET['deleteid'];
		if($DB->delete($table,$where)){
			header('location:navbar.php');
		}
	}
?>