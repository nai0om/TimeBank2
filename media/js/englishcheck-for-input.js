$("#caps-email-error").html("คุณเปิดปุ่ม Caps Lock อยู่");
$("#thai-email-error").html("มีภาษาไทยประกอบอยู่ กรุณาตรวจสอบ");
$("#caps-password-error").html("คุณเปิดปุ่ม Caps Lock อยู่");
$("#thai-password-error").html("มีภาษาไทยประกอบอยู่ กรุณาตรวจสอบ");

$("[name='email']").keypress(function(e){
	
	var kc = e.keyCode?e.keyCode:e.which;
    var sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
	 if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)) {
        $("#caps-email-error").fadeIn();
    }else {
		$("#caps-email-error").fadeOut();		
	}
	
});
$("[name='email']").keyup(function(e){
	var email = $(this).val();
	if(email.match(/[\u0E00-\u0E7F]/)){
		$("#thai-email-error").fadeIn();		
	}
	else if(!email.match(/[\u0E00-\u0E7F]/)){
		$("#thai-email-error").fadeOut();		
	}
});


$("[name='password']").keypress(function(e){
	
	var kc = e.keyCode?e.keyCode:e.which;
    var sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
	 if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)) {
        $("#caps-password-error").fadeIn();
    }else {
		$("#caps-password-error").fadeOut();		
	}
	
});
$("[name='password']").keyup(function(e){
	var password = $(this).val();
	if(password.match(/[\u0E00-\u0E7F]/)){
		$("#thai-password-error").fadeIn();		
	}
	else if(!password.match(/[\u0E00-\u0E7F]/)){
		$("#thai-password-error").fadeOut();		
	}
});
