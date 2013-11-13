$("[name='email']").on('keypress',function(e){
	var email = $(this).val();
	var kc = e.keyCode?e.keyCode:e.which;
    var sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
	if(email.match(/[\u0E00-\u0E7F]/)){
		$("#email-error").hide().html("มีภาษาไทยประกอบอยู่ กรุณาตรวจสอบ").fadeIn();
		$("#login-error").hide().html("มีภาษาไทยประกอบอยู่ กรุณาตรวจสอบ").fadeIn();
	} else if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)) {
        $("#email-error").hide().html("คุณเปิดปุ่ม Caps Lock อยู่").fadeIn();
		$("#login-error").hide().html("คุณเปิดปุ่ม Caps Lock อยู่").fadeIn();
    }
	else {
		$("#email-error").fadeOut();
		$("#login-error").fadeOut();
	}
});

$("[name='password']").on('keypress',function(e){
	var password = $(this).val();
	var kc = e.keyCode?e.keyCode:e.which;
    var sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
	if(password.match(/[\u0E00-\u0E7F]/)){
		$("#password-error").hide().html("มีภาษาไทยประกอบอยู่ กรุณาตรวจสอบ").fadeIn();
		$("#login-error").hide().html("มีภาษาไทยประกอบอยู่ กรุณาตรวจสอบ").fadeIn();
	}else if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)) {
        $("#password-error").hide().html("คุณเปิดปุ่ม Caps Lock อยู่").fadeIn();
		$("#login-error").hide().html("คุณเปิดปุ่ม Caps Lock อยู่").fadeIn();
    }else{
		$("#password-error").fadeOut();
		$("#login-error").fadeOut();
	}
});


