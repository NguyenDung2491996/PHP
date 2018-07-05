var check1, check2 ,check3 ,check4;
function checkID(){
	var id=document.getElementById("ID").value;
	if (id.length==0) {
		document.getElementById("error-id").innerHTML="Mã sản phẩm không được để trống";
		check1=false;
	}
	else{
		document.getElementById("error-id").innerHTML="";
		check1=true;
	}
	enable(check1,check2,check3,check4);
}
function checkName(){
	var name=document.getElementById("name").value;
	if (name.length==0) {
		document.getElementById("error-name").innerHTML="Tên sản phẩm không được để trống";
		check2=false;
	}
	else{
		document.getElementById("error-name").innerHTML="";
		check2=true;
	}
	enable(check1,check2,check3,check4);
}
function checkCount(){
	var count=document.getElementById("count").value;
	if (count.length==0) {
		document.getElementById("error-count").innerHTML="Số lượng sản phẩm không được để trống";
		check3=false;
	}
	else{
		document.getElementById("error-count").innerHTML="";
		check3=true;
	}
	enable(check1,check2,check3,check4);
}
function checkPrice(){
	var price=document.getElementById("price").value;
	if (price.length==0) {
		document.getElementById("error-price").innerHTML="Giá sản phẩm không được để trống";
		check4=false;
	}
	else{
		document.getElementById("error-price").innerHTML="";
		check4=true;
	}
	enable(check1,check2,check3,check4);
}
function enable(a,b,c,d){
	if (a&&b&&d&&d) {
		document.getElementById("register-sp").disabled=false;
	}
	else{

		document.getElementById("register-sp").disabled=true;
	}
}