function validateR(){

var name= document.getElementById("name").value;
var email= document.getElementById("email").value;
var password= document.getElementById("password").value;

if(name.length<4){
	alert("Name must be Greater than 4 char");
	return false;	
}

if(email.indexOf("@")==-1){
	alert("Please Enter @");
	return false;
}

if(email.indexOf("com")==-1){
	alert("Please Enter Correct email");
	return false;
}

if(password.length<4){
	alert("Password must be Greater than 4 char");
	return false;
}
}

function validateL(){

var email= document.getElementById("email").value;
var password= document.getElementById("password").value;


if(email.indexOf("@")==-1){
	alert("Please Enter @");
	return false;
}

if(email.indexOf("com")==-1){
	alert("Please Enter Correct email");
	return false;
}

}