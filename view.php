<?php
session_start();
$id = $_SESSION['id'];
$pw = $_SESSION['pw'];
include 'db_config.php';
include 'check.php';
$str = "SELECT name,gender,year,month,day,mobile,email,address,reg_date FROM member where id='".$id."' and pw='".$pw."'";
$list = mysqli_query($link,$str);
list($name,$sex,$year,$month,$day,$mobile,$mail,$address,$reg_date) = mysqli_fetch_array($list);
?>

<!DOCTYPE html>
<html>
<head>
	<title>會員資料</title>
	<meta charset='utf8'>
</head>
<body>
	<p align="center">
		<a href="view.php">瀏覽會員基本資料</a>|
		<a href="edit.php">修改會員資料</a>|
		<a href="editpw.php">修改會員密碼</a>|
		<a href="logout.php">登出</a>
	</p>

	<table border="1" align="center">
		<tr>
			<td align="right">姓名:</td>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<td align="right">性別:</td>
			<td><?php echo $sex; ?></td>
		</tr>
		<tr>
			<td align="right">出生日期:</td>
			<td><?php echo $year.'年'.$month.'月'.$day.'日'; ?></td>
		</tr>
		<tr>
			<td align="right">電話:</td>
			<td><?php echo $mobile; ?></td>
		</tr>
		<tr>
			<td align="right">E-mail:</td>
			<td><?php echo $mail; ?></td>
		</tr>
		<tr>
			<td align="right">住址:</td>
			<td><?php echo $address; ?></td>
		</tr>
		<tr>
			<td align="right">註冊日期:</td>
			<td><?php echo $reg_date; ?></td>
		</tr>
	</table>
</body>
</html>