$("#caps-error").html("คุณเปิดปุ่ม Caps Lock อยู่");
$("#thai-error").html("มีภาษาไทยประกอบอยู่ กรุณาตรวจสอบ");

thaiOn = false;
caplockOn = false;
englishPattern = new RegExp(/^[a-zA-Z0-9._@-]*$/i);

function showThaiError(show){
	if(show){
		if(!thaiOn){
			$("#thai-error").fadeIn();
			thaiOn = true;
		}
	}
	else{
		$("#thai-error").fadeOut();
		thaiOn = false;
	}
}
function showCaplockError(show){
	if(show){
		if(!caplockOn){
			$("#caps-error").fadeIn();
			caplockOn = true;
		}
	}
	else{
		$("#caps-error").fadeOut();
		caplockOn = false;
	}
}

function checkThaiKey(text){
	if(englishPattern.test(text)){
		showThaiError(false); // All is well, no error needed
	}
	else{
		showThaiError(true);
	}
}

function checkCaplockKey(e){
	var kc = e.keyCode?e.keyCode:e.which;
	var sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
	if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)) {
		console.log("CAP ON");
		showCaplockError(true);
	} else {
		console.log("CAP OFF");
		showCaplockError(false);
	}
}

$("[name='email']").on('input', function(){
	text = $(this).val();
	checkThaiKey(text);
});

$("[name='password']").on('input', function(e){
	text = $(this).val();
	checkThaiKey(text);
});

$("[name='email']").keypress(function(e){
	checkCaplockKey(e);
});

$("[name='password']").keypress(function(e){
	checkCaplockKey(e);
});