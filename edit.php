<?php
	session_start();
$id = $_SESSION['id'];
$pw = $_SESSION['pw'];
include 'db_config.php';
include 'check.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>修改會員資料</title>
	<meta charset='utf8'>
</head>
<body>
	<form method="post" action="update.php">
	<p align="center">
		<a href="view.php">瀏覽會員基本資料</a>|
		<a href="edit.php">修改會員資料</a>|
		<a href="editpw.php">修改會員密碼</a>|
		<a href="logout.php">登出</a>
	</p>

	<table border="1" align="center">
		<tr>
			<td colspan="2">修改會員資料</td>
		</tr>
		<tr>
			<td align="right">姓名:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td align="right">性別:</td>
			<td>
				<input type="radio"  value='male' name="sex">male
				<input type="radio" value="female" name="sex">female
			</td>
		</tr>
		<tr>
			<td align="right">出生日期:</td>
			<td>
				<select name="year">
						<option value="">請選擇</option>
						<?php
							for($year=1950;$year<=2000;$year++){
								echo "<option value=\"$year\">$year</option>";
							}
						?>
					</select>年
					<select name="month">
						<option value="">請選擇</option>
						<?php
							for($month=1;$month<=12;$month++){
								echo "<option value=\"$month\">$month</option>";
							}
						?>
					</select>月
					<select name="day">
						<option value="">請選擇</option>
						<?php
							for($day=1;$day<=31;$day++){
								echo "<option value=\"$day\">$day</option>";
							}
						?>
					</select>日
			</td>
		</tr>
		<tr>
			<td align="right">電話:</td>
			<td><input type="text" name="mobile"></td>
		</tr>
		<tr>
			<td align="right">E-mail:</td>
			<td><input type="text" name="mail"></td>
		</tr>
		<tr>
			<td align="right">住址:</td>
			<td><input type="text" name="address"></td>
		</tr>
	</table>
		<p align="center"><input type="submit" value="送出修改"></p>
	</form>
</body>
</html>