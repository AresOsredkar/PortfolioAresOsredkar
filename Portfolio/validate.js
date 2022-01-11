$(document).ready(function(){

    $("nameError").hide();
    var name = $("nameInput").val();
    function nameValid(){
        if(name==''){
            $("nameError").show();
            return false;
        }
        return true;
    }

    $("emailError").hide();
    var regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,4}$/;
    var email = $("email").val();
    $("email").blur(function(){emailValid();})
    function emailValid(){
        if(regex.test(email)){
            $("emailError").show();
            return false;
        }
        return true;
    }

    $("telError").hide();
    var tel = $("tel").val();
    function telValid(){
        if(name==''){
            $("nameError").show();
            return false;
        }
        return true;
    }
    
});