var globalEmailcheck;
var globalPasswordcheck;
var globalUsernamecheck;


function checkEmail() {
var email = document.getElementById('emailAddress');
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if (!filter.test(email.value)) {
email.nextSibling.nextSibling.style.display = 'block';
email.focus;
globalEmailcheck = false;
return false;
}
email.nextSibling.nextSibling.style.display = 'none';
globalEmailcheck = true;
}


function checkPassword() {
var passWord = document.getElementById('passWord');
if (passWord.value.length < 7 || passWord.value == 'Password' ) {
passWord.nextSibling.nextSibling.style.display = 'block';
passWord.focus;
globalPasswordcheck = false;
return false;
}
passWord.nextSibling.nextSibling.style.display = 'none';
globalPasswordcheck = true;
}


function checkUsername() {
var userName = document.getElementById('userName');
if (userName.value.length < 7 || userName.value == 'Username') {
userName.nextSibling.nextSibling.style.display = 'block';
userName.focus;
globalUsernamecheck = false;
return false;

}
userName.nextSibling.nextSibling.style.display = 'none';
globalUsernamecheck = true;
}