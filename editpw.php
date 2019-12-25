<?php session_start();
$id = $_SESSION['id'];
$pw = $_SESSION['pw'];
include 'db_config.php';
include 'check.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>修改登入密碼</title>
	<meta charset='utf8'>
</head>

<script language="javascript">
	function formcheck(){
		if(regist.newpw.value == ''){
			alert('請輸入新密碼');
			regist.newpw.focus();
			return false;
		}
		if(regist.newpw2.value == ''){
			alert('請重複新密碼');
			regist.newpw2.focus();
			return false;
		}
		if(regist.newpw.value != regist.newpw2.value){
			alert('新密碼不相符,請重新輸入');
			regist.newpw.value='';
			regist.newpw2.value='';
			regist.newpw2.focus();
			return false;
		}
		return true;
	}
</script>

<body>
	<form method="post" action="updatepw.php" name="regist" onsubmit="return formcheck();">
	<p align="center">
		<a href="view.php">瀏覽會員基本資料</a>|
		<a href="edit.php">修改會員資料</a>|
		<a href="editpw.php">修改會員密碼</a>|
		<a href="logout.php">登出</a>
	</p>

	<table border="1" align="center">
		<tr>
			<td colspan="2">修改登入密碼</td>
		</tr>
		<tr>
			<td align="right">新密碼:</td>
			<td><input type="password" name="newpw"></td>
		</tr>
		<tr>
			<td align="right">請重複一次:</td>
			<td><input type="password" name="newpw2"></td>
		</tr>
	</table>
		<p align="center"><input type="submit" value="送出修改"></p>
	</form>
</body>
</html>