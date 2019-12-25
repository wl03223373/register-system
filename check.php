<?php
	
	$id = $_SESSION['id'];
	$pw = $_SESSION['pw'];

	if(empty($id) or empty($pw)){
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<meta charset='utf8'>
		</head>
		<body>
			<script language='javascript'>
				alert('尚未登入,請重新登入謝謝');
				location.href='login.php';
			</script>
		</body>
		</html>

		<?php
	exit;
	}
?>
