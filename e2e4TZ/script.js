$("#log_in-form").submit(function(e){
    e.preventDefault(e);
    var data = $("#log_in-form").serialize();
    $.ajax({
        url:'requests_files/log_in.php',
        type: 'POST',
        data: data,
        success: function(data){
            if(data){
                $("#password").css({'border':'2px solid green'});
                window.location.href = "/";
            } 
            else {
                $("#password").val('');
                $("#password").attr('placeholder', 'Неверный пароль!');
                $("#password").css({'border':'2px solid red'});
            }
        }
    });
});

$("#add-user-form").submit(function(e){
    e.preventDefault(e);
    var data = $("#add-user-form").serialize();
    $.ajax({
        url:'requests_files/add_user.php',
        type: 'POST',
        data: data,
        success: function(data){
            if(data){
                $("#login").css({'border':'2px solid green'});
                window.location.href = "/";
            } 
            else {
                $("#login").val('');
                $("#login").attr('placeholder', 'Логин занят!');
                $("#login").css({'border':'2px solid red'});
            }
        }
    });
});



window.onload = function () {
    document.getElementById("login").onchange = validateLogin;
    document.getElementById("password").onchange = validatePassword;
    document.getElementById("confirm-password").onchange = validatePassword;
}
function validateLogin(){
    var login=document.getElementById("login").value;
    var reg = /^[a-zA-Z0-9@_]+$/;
    if(reg.test(login)) document.getElementById("login").setCustomValidity("");
    else
    document.getElementById("login").setCustomValidity("Логин должен состоять из латинских букв, цифр и специальных знаков");
}
function validatePassword(){
    var pass1=document.getElementById("password").value;
    var pass2=document.getElementById("confirm-password").value;
    var reg = /^[a-zA-Z0-9@_]+$/;
    if (reg.test(pass1))document.getElementById("password").setCustomValidity("");
    else 
    document.getElementById("password").setCustomValidity("Пароль должен состоять из латинских букв, цифр и специальных знаков");
    if(pass2!=pass1)
        document.getElementById("confirm-password").setCustomValidity("Пароли не совпадают");
    else
document.getElementById("confirm-password").setCustomValidity('');
}