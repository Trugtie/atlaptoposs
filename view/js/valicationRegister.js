const selectElement=function(element){
    return document.querySelector(element);
};
const inputPassword = selectElement('#inputPassword');
const inputConfirm = selectElement('#inputConfirmPassword');
const btnRegister = selectElement('#btnRegister');

inputConfirm.addEventListener('focusout',function(){
    password = inputPassword.value;
    confirmpass = inputConfirm.value;
    if(password != confirmpass){
        alert("Password không khớp!");
        btnRegister.setAttribute('disabled', '');
    }
    else{
        btnRegister.removeAttribute('disabled');
    }
})