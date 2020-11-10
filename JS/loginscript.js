'use strict'

window.onload=()=>{
	//Disabled when page loads
	classes('signup-submit-button')[0].disabled=true;
	classes('submit-button')[0].disabled=true;
}

//ID and Classes
const ids=value=>document.getElementById(value);
const classes=value=>document.getElementsByClassName(value);

//Password Verification
const passwordVerify=(password)=>{
	const regEx=/^(?=.+[a-z])(?=.+[A-Z])(?=.+[0-9])(?=.+[\$\%\^\&\!@\#\*\(\)\+\=`~\?\>\<])/
	// console.log(`Verify ${regEx.test(password)} , Length:${password.length}`)
	return regEx.test(password) && password.length>=8 ? true : false;
}
//Text Verification
const textVerify=(text)=>{
	const regEx1=/^[a-zA-Z_$*]{2,15}$/
	//console.log(text)
	return regEx1.test(text);
}
//Verifies Login
const signinVerify=()=>{
	let pass=passwordVerify(ids('log-pass').value);
	if(pass){
		classes('login-password-error')[0].classList.add('hide');
		classes('submit-button')[0].disabled=false;
	}else{
		classes('login-password-error')[0].classList.remove('hide');
		classes('submit-button')[0].disabled=true;
	}
}
//Verifies SignUp
const signupverify=()=>{
	//Verifies Password
	let originalPass=ids('new-pass').value;
	let rePass=ids('re-pass').value;
	let password=passwordVerify(originalPass);
	//Password error generator
	if(!password && originalPass.length>0){
		classes('signup-password-error')[0].classList.remove('hide');
	}else{
		classes('signup-password-error')[0].classList.add('hide');
	}
	let rePassword=passwordVerify(rePass);
	//Re-enter Password error generator
	if((!rePassword || (originalPass !== rePass)) && rePass.length>0){
		classes('signup-repassword-error')[0].classList.remove('hide');
	}else{
		classes('signup-repassword-error')[0].classList.add('hide');
	}
	let pass= password && rePassword;

	//console.log(originalPass,rePass)
	//Verifies First Name and Last name  
	let first=textVerify(ids('fname').value);
	//First Name error generator
	if(!first){
		classes('signup-fname-error')[0].classList.remove('hide');
	}else{
		classes('signup-fname-error')[0].classList.add('hide');
	}	
	//Last Name Error generator
	let last=textVerify(ids('lname').value);
	if(!last && (ids('lname').value).length>0){
		classes('signup-lname-error')[0].classList.remove('hide');
	}else{
		classes('signup-lname-error')[0].classList.add('hide');
	}
	let name= first && last; 
	if(name && pass){
		classes('signup-password-error')[0].classList.add('hide');
		classes('signup-fname-error')[0].classList.add('hide');
		classes('signup-lname-error')[0].classList.add('hide');
		if(originalPass === rePass){
			classes('signup-submit-button')[0].disabled=false;
			classes('signup-repassword-error')[0].classList.add('hide')
		}else{
			//classes('signup-repassword-error')[0].classList.remove('hide');
			classes('signup-submit-button')[0].disabled=true;
		}
	}else{
		classes('signup-submit-button')[0].disabled=true;
	}
}
//Login and SignUp toggle
classes('already')[0].addEventListener('click',()=>{
	classes('login-area')[0].classList.toggle('hide');
	classes('signup-area')[0].classList.add('hide');
});
classes('new')[0].addEventListener('click',()=>{
	classes('login-area')[0].classList.toggle('hide');
	classes('signup-area')[0].classList.remove('hide');
});
//Optional input fields toggle
classes('optional-area')[0].addEventListener('click',()=>{
	classes('optional-fields')[0].classList.toggle('hide');
	classes('up-icon')[0].classList.toggle('hide');
	classes('down-icon')[0].classList.toggle('hide');
});

classes('eye-up')[0].addEventListener('click',()=>{
	classes('new-pass-hide')[0].classList.toggle('hide');
	classes('new-pass-show')[0].classList.toggle('hide');
	let passRef=ids('new-pass');
	if(passRef.type == 'password'){
		passRef.type = 'text';
	}else{
		passRef.type = 'password';
	}
});
classes('eye-re')[0].addEventListener('click',()=>{
	classes('re-pass-hide')[0].classList.toggle('hide');
	classes('re-pass-show')[0].classList.toggle('hide');
	let passRef=ids('re-pass');
	if(passRef.type == 'password'){
		passRef.type = 'text';
	}else{
		passRef.type = 'password';
	}
});
classes('eye-in')[0].addEventListener('click',()=>{
	classes('in-pass-hide')[0].classList.toggle('hide');
	classes('in-pass-show')[0].classList.toggle('hide');
	let passRef=ids('log-pass');
	if(passRef.type == 'password'){
		passRef.type = 'text';
	}else{
		passRef.type = 'password';
	}
});