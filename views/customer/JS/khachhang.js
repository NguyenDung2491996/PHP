var check1,check2,check3,check4,check5,check6;
function checkMailKH(){
	var email= document.getElementById("email").value;
	if (!validateEmail(email)) {
		document.getElementById("error-mail").innerHTML="Nhập đúng định dạng mail";
		check2=false;
	}
	else{
		document.getElementById("error-mail").innerHTML="";
		check2=true;
	}
	enablekh(check1,check2,check3,check4,check5,check6);
}
// function checkPassword(str)
// {
//     // at least one number, one lowercase and one uppercase letter
//     // at least six characters
//     var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
//     return re.test(str);
// }
// function checkPass(){
// 	var password= document.getElementById("password").value;
// 	var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
// 	if (!checkPassword(password)) {
// 		document.getElementById("error-password").innerHTML="Phải có ít nhất 6 kí tự ít nhất 1 ký tự viết thường và 1 kí tự viết hoa";
// 		check3=false;
// 	}
// 	else{
// 		document.getElementById("error-password").innerHTML="";
// 		check3=true;
// 	}
// 	enable(check1,check2,check3,check4,check5,check6);
// }
function checkPhoneKH(){
	var phone =document.getElementById('phone').value;
	var phoneno = /^\(?(09)\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
	var phoneno1 = /^\(?(01)\)?[-. ]?([0-9]{5})[-. ]?([0-9]{4})$/;
	if (phone=='') {
		document.getElementById('error-phone').innerHTML="Yêu cầu nhập số điện thoại";
		check4= false;
	}
	else if(phone.match(phoneno)||phone.match(phoneno1)){
		document.getElementById('error-phone').innerHTML="";
		check4= true;
	}
	
	else{
		document.getElementById('error-phone').innerHTML="Số điện thoại không hợp lệ";
		check4= false;
	}
	enablekh(check1,check2,check3,check4,check5,check6);

}
function checkSexKH(a){
	var sex= document.getElementsByClassName("check");
	if (sex.checked=true) {
		check5=true;
	}
	else{
		check5=false;
	}
	enablekh(check1,check2,check3,check4,check5,check6);
}
function checkAddressKH(){
	var add=document.getElementById("address").value;
	if (add.length==0) {
		document.getElementById("error-add").innerHTML="Địa chỉ không được để trống";
		check6=false;
	}
	else{
		document.getElementById("error-add").innerHTML="";
		check6=true;
	}
	enablekh(check1,check2,check3,check4,check5,check6);

}
function checkIDKH(){
	var id=document.getElementById("ID").value;
	if (id.length==0) {
		document.getElementById("error-id").innerHTML="Mã khách hàng không được để trống";
		check3=false;
	}
	else{
		document.getElementById("error-id").innerHTML="";
		check3=true;
	}
	enablekh(check1,check2,check3,check4,check5,check6);

}
function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}

function checkNameKH(){
	var name= document.getElementById("name").value;
	var arr=name.split("");
	var name1 = name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
		return letter.toUpperCase();
	});//nguyen van dung -> Nguyen Van Dung
	for (var i = 0; i < name.length; i++) {
		if (isNaN(arr[i])&& name.length>10&& name1==name) {
			document.getElementById("error-name").innerHTML= "";
			check1=true;
		}
		else{

			document.getElementById("error-name").innerHTML= "Tên có độ dài lớn hơn 10 kí tự các chữ số đầu mỗi từ viết hoa,không chứa số";
			check1=false;
		}
	}
	enablekh(check1,check2,check3,check4,check5,check6);
}

function enablekh(a,b,c,d,e,f){
	if (a&&b&&c&&d&&e&&f) {
		document.getElementById("register-kh").disabled=false;
	}
	else{
		document.getElementById("register-kh").disabled=true;
	}

}
