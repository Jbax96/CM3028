/**
 * Created by 1408721 on 30/11/2016.
 */

function confirmPassword(){

    var password = document.getElementById("password");
    var password2 = document.getElementById("password2");

    if(password.value != password2.value){
        document.getElementById("pass2").style.borderColor = "#FF0000";
        return false;
    }
    return true;
}