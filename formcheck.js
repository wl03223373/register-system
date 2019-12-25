function formcheck(){
	if(regist.id.value == ''){
		alert('請輸入帳號!!!');
		regist.id.focus();
		return false;
	}
	if(regist.pw.value == ''){
		alert('請輸入密碼!!!');
		regist.pw.focus();
		return false;
	}
	if(regist.repw.value != regist.pw.value){
		alert('確認密碼輸入錯誤，請再檢查一次')
		regist.repw.focus();
		return false;
	}
	if(regist.name.value == ''){
		alert('請輸入姓名!!!');
		regist.name.focus();
		return false;
	}
	if(regist.mobile.value == ''){
		alert('請輸入手機');
		regist.mobile.focus();
		return false;
	}
	return true;
}