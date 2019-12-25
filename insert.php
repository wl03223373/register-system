<?php
	if(empty($_POST['id']) or empty($_POST['pw']) or empty($_POST['name']) or empty($_POST['mobile'])){
		echo '資料未確實填寫.';
		exit;
	}
	if(!empty($_POST['year']) and !empty($_POST['month']) and !empty($_POST['day'])){
		if(!checkdate($_POST['month'],$_POST['day'],$_POST['year'])){
			echo '生日日期錯誤.';
			exit;
		}
	}
	if($_POST['pw'] != $_POST['repw']){
		echo '確認密碼輸入錯誤, 請再檢查一次';
		exit;
	}

	include 'db_config.php';
	 $str = "SELECT COUNT('id') FROM member where id = '".$_POST['id']."'";
	 $list = mysqli_query($link, $str);
	 list($row) = mysqli_fetch_array($list);

	if($row == 1 ){
		echo '此帳號註冊過.';
		exit;
	}

	$str = "INSERT INTO member (id,pw,name,gender,year,month,day,mobile,email,address,reg_date)
			VALUES ('".$_POST['id']."','".$_POST['pw']."','".$_POST['name']."','".$_POST['sex']."','".$_POST['year']."',
					'".$_POST['month']."','".$_POST['day']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['address']."',now())";

	// $str = "INSERT INTO member (id,pw,email)
	// 		VALUES ('".$_POST['id']."','".$_POST['pw']."','".$_POST['email']."')";

	mysqli_query($link,$str);
	header("Location:regist_ok.php");
?>