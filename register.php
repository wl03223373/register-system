<!DOCTYPE html>
<html>
<head>
	<meta charset='utf8'>
	<title>註冊頁面</title>
	<script type="text/javascript" src="formcheck.js" ></script>
</head>
<body　bgcolor=red>
	<form method="post" action="insert.php" name="regist" onsubmit="return formcheck();">
		<table border="0" align="center">
			<tr>
				<td colspan="2">加入會員請輸入以下資料（＊為）必填：</td>
			</tr>
			<tr>
				<td>＊帳號：</td>
				<td><input type="text" name="id" size="20"></td>
			</tr>
			<tr>
				<td>＊密碼：</td>
				<td><input type="password" name="pw" size="20"></td>
			</tr>
			<tr>
				<td>＊確認密碼：</td>
				<td><input type="password" name="repw" size="20"></td>
			</tr>
			<tr>
				<td>＊姓名：</td>
				<td><input type="text" name="name" size="20"></td>
			</tr>
			
			<tr>
				<td>出生日期：</td>
				<td>
					<select name="year">
						<option value="" selected>請選擇</option>
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
				<td>＊手機：</td>
				<td><input type="text" name="mobile" size="20"></td>
			</tr>
			<tr>
				<td>E-mail：</td>
				<td><input type="text" name="email" size="30"></td>
			</tr>
			<tr>
				<td>住址：</td>
				<td><input type="text" name="address" size="20"></td>
			</tr>
		</table>
		<p align="center"><input type="submit" value="送出"></p>
	</form>
</body>
</html>