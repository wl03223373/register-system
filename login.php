<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src='formcheck.js'></script>
	<title>會員登入</title>
	<meta charset='utf8'>
</head>
<body>
	<center><a href="register.php">註冊會員</a></center>
	<form method="post" action="login_check.php" name='regist' onsubmit='return formcheck();'>
		<table align="center">
			<tr>
				<td>帳號:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>密碼:</td>
				<td><input type="password" name="pw"></td>
			</tr>
		</table>
		<p align="center"><input type="submit" value="登入"></p>
	</form>
</body>
</html>