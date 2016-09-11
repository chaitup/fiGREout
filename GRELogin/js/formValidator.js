var globalEmailcheck;
var globalPasswordcheck;
var globalUsernamecheck;
var globalHumancheck ;

function checkEmail() {
var email = document.getElementById('truemail');
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if (!filter.test(email.value)) {

console.log(email.nextSibling);
$(email).next().css({'display':'block',"padding-top":"5px"});
email.focus;
globalEmailcheck = false;
return false;
}
email.nextSibling.style.display = 'none';
globalEmailcheck = true;
}


function checkPassword() {
var passWord = document.getElementById('truepass');
if (passWord.value.length < 6 || passWord.value == 'Password' ) {
$(passWord).next().css({'display':'block',"padding-top":"5px"});
passWord.focus;
globalPasswordcheck = false;
return false;
}
passWord.nextSibling.style.display = 'none';
globalPasswordcheck = true;
}


function checkUsername() {
var userName = document.getElementById('truename');
if (userName.value.length < 6 || userName.value == 'Username') {
$(userName).next().css({'display':'block',"padding-top":"5px"});
userName.focus;
globalUsernamecheck = false;
return false;

}
userName.nextSibling.style.display = 'none';
globalUsernamecheck = true;
}

function checkHuman() 

{

var hiddenUserbot = document.getElementById('username');
if (hiddenUserbot.value !== '' || hiddenUserbot.value.length > 1 ) {
globalHumancheck = false;
return false;
}

globalHumancheck = true;

}