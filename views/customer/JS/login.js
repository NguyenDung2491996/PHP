
var check1,check2;
function checkMail(){
	var ID= document.getElementById("mail").value;
	if (!validateEmail(ID)) {
		document.getElementById("error_mail").innerHTML="Nhập đúng định dạng mail";
		check1=false;
	}
	else{
		document.getElementById("error_mail").innerHTML="";
		check1=true;
	}
	enable(check1,check2);
}
function checkPass(){
	var Name= document.getElementById("pass").value;
	if (Name.length==0) {
		document.getElementById("error_pass").innerHTML="Mật khẩu không được để trống";
		check2=false;
	}
	else{
		document.getElementById("error_pass").innerHTML="";
		check2=true;
	}
	enable(check1,check2);
}
function enable(a,b){
	if (a&&b) {
		document.getElementById("register").disabled=false;
	}
	else{
		document.getElementById("register").disabled=true;
	}
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}