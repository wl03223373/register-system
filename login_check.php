<?php
	session_start();
	include 'db_config.php';
	$str = "SELECT COUNT(*) FROM member where id = '".$_POST['id']."' and pw = '".$_POST['pw']."'";
	$list = mysqli_query($link,$str);
	list($count) = mysqli_fetch_array($list);

	if($count != 0){
		$_SESSION['id'] = $_POST['id'];
		$_SESSION['pw'] = $_POST['pw'];
		header('location:view.php');
	}
	else{
?>
		<script language='javascript'>
		alert('帳號或密碼錯誤');
		history.go(-1);
		</script>

<?php

	}
?>