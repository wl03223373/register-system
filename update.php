<?php
	session_start();
	$id = $_SESSION['id'];
	$pw = $_SESSION['pw'];
	include 'db_config.php';
	
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$mobile = $_POST['mobile'];
	$mail = $_POST['mail'];
	$address = $_POST['address'];

	$str = "UPDATE member SET name='$name',gender='$sex',year='$year',month='$month',
			day='$day',mobile='$mobile',email='$mail',address='$address' where id='$id' and pw='$pw'";
	mysqli_query($link,$str) or die('fail');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script language="javascript">
	alert('資料修改完成');
	location.href='view.php';
</script>
</body>
</html>