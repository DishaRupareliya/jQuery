<?php
	$errors=[];
	$data=[];

	if(empty($_POST['email'])){
		$errors['email']='email is required';
	}
	if(empty($_POST['password'])){
		$errors['password']="6 digits required";
	}
	if(!empty($errors)){
		$data['success']=false;
		$data['errors']=$errors;
	}else{
		$data['success']=true;
		$data['message']='Success!';
	}
	echo json_encode($data);
?>