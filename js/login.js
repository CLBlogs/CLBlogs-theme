 function onMouseOver() {
    lo.style.cursor = 'pointer';
    re.style.cursor = 'pointer';
}
    

    function checkPassword() {
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("rePassword").value;
    if(password == repassword) {
    document.getElementById("notice").innerHTML="<br><font color='green'>两次密码输入一致</font>";
    document.getElementById("submitButton").disabled = false;
}else {
    document.getElementById("notice").innerHTML="<br><font color='red'>两次输入密码不一致!</font>";
    document.getElementById("submitButton").disabled = true;
}
}

