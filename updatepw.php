<?php
	session_start();
	$id = $_SESSION['id'];
	include 'db_config.php';

	$newpw = $_POST['newpw'];

	$str = "UPDATE member set pw='$newpw' where id='$id'";
	mysqli_query($link,$str) or die('fail');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">密碼修改完成</h1>
	<p align="center"><a href="view.php">點我返回會員資料</a></p>
</body>
</html>