$(document).ready(function(){
//////////////////////////////////////////////////////////////Counters to turn functions on/off
    
checkUsername = 0;
checkEmail = 0;   
checkPassword = 0;
checkRepeatPassword = 0;
checkSamePassword = 0;
checkBirthdate = 0;
checkGender = 0;
checkOther = 0;
 
///////////////////////////////////////////////////////////////Username Verification   
$("#username").blur(function(){
  if ($(this).val().length < 8 && checkUsername == 0){
    $(this).after("<p id='usernameWarning' class='warnings'>Username is not long enough</p>");
    checkUsername = 1;
      
}
if ($(this).val().length >= 8 && checkUsername == 1) {
    $("#usernameWarning").remove();
    checkUsername = 0;
    
}


  })
////////////////////////////////////////////////////////////////Email Verification
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/;
  return ($email.length > 0 && emailReg.test($email))
}    
    
$("#email").blur(function(){
    
if(!validateEmail($(this).val()) && checkEmail == 0) { 
    $(this).after("<p id='emailWarning' class='warnings'>Invalid email address</p>");
    checkEmail = 1;
}
if(validateEmail($(this).val()) && checkEmail == 1) { 
    $("#emailWarning").remove();
    checkEmail = 0;
}
    
    
   }) 

//////////////////////////////////////////////////////////////Password Length Verification
   
 $("#password").blur(function(){
  if ($(this).val().length < 7 && checkPassword == 0){
    $(this).after("<p id='passwordWarning' class='warnings'>Password not long enough</p>");
    checkPassword = 1;
}
   
if ($(this).val().length >= 7 && checkPassword == 1) {
    $("#passwordWarning").remove();
    checkPassword = 0;
}

  })   
 ////////////////Repeat Password length verification   
 $("#repeatpassword").blur(function(){
  if ($(this).val().length < 7 && checkRepeatPassword == 0){
    $(this).after("<p id='repeatPasswordWarning' class='warnings'>Password not long enough</p>");
    checkRepeatPassword = 1;
}
   
if ($(this).val().length >= 7 && checkRepeatPassword == 1) {
    $("#repeatPasswordWarning").remove();
    checkRepeatPassword = 0;
}

  })   

    
/////////////////////////////////////////////////////////////Password equality verification
  
$("#password").blur(function(){
  if ($(this).val() != $("#repeatpassword").val() && checkSamePassword == 0){
    $("#revealPasswordLabel").before("<div id='samePasswordWarning' class='warnings'>Passwords do not match</div>");
    checkSamePassword = 1;
}
    
if ($(this).val() == $("#repeatpassword").val() && checkSamePassword == 1) {
    $("#samePasswordWarning").remove();
    checkSamePassword = 0;
}

})
    
 $("#repeatpassword").blur(function(){
  if ($(this).val() != $("#password").val() && checkSamePassword == 0){
    $("#revealPasswordLabel").before("<div id='samePasswordWarning'>Passwords do not match</div>");
    checkSamePassword = 1;
}
     
if ($(this).val() == $("#password").val() && checkSamePassword == 1) {
    $("#samePasswordWarning").remove();
    checkSamePassword = 0;
}

})
    
///////////////////////////////////////////////////////////////////Show password
    
    
$("#revealPasswordCheckbox").change(function(){
    if( $(this).is(":checked") ) {
        $("#password").attr("type","text");
        $("#repeatpassword").attr("type","text");
    }
    else {
        $("#password").attr("type","password");
        $("#repeatpassword").attr("type","password");
    }
    
    
})
    
    
///////////////////////////////////////////////////////////////////Birthdate verification

 $("#birthdate").blur(function(){
  if ($(this).val() == "" && checkBirthdate == 0){
    $(this).after("<p id='birthdateWarning' class='warnings'>Birthdate cannot be left blank</p>");
    checkBirthdate = 1;
}
if ($(this).val().length >= 8 && checkBirthdate == 1) {
    $("#birthdateWarning").remove();
    checkBirthdate = 0;
}


  })  
    

///////////////////////////////////////////////////////////////////Biography verification
 
$("#biography").on("keyup keypress keydown", function(){
    $("#charCounter").text((300 - ($(this).val().length)));
})    
/*$("#biography").on("blur", function{
    $("#charCounter").hide();
  })*/
$("#biography").blur(function(){
    $("#charCounter").hide();
})
    
$("#biography").focus(function(){
    $("#charCounter").show();
  })
    
////////////////////////////////////////////////////////////////radio button verification
    
$("#submitButton").hover(function(){
    
    if ($('input[name="gender"]:checked').val() == undefined && checkGender == 0) {
        $("#submitButton").prop("disabled", true);
        $("#genderMessage").after("<p id='genderWarning' class='warnings'>Please select a choice</p>");
    checkGender = 1;
    } 
    
})
    $("#genderContainer").hover(function(){
    if ($('input[name="gender"]:checked').val() != undefined && checkGender == 1) {
        $("#submitButton").prop("disabled", false);
        $("#genderWarning").remove();
    checkGender = 0;
    }
})
    
/////////////////////////////////////////////////////////////////////Other button textbox verification
    otherButton
    
$("#submitButton").hover(function(){
    
    if ($("#otherButton").is(":checked") && checkOther == 0 && $("#otherText").val() == "") {
        $("#submitButton").prop("disabled", true);
        $("#genderMessage").after("<p id='genderWarningOther' class='warnings'>Please write in an answer</p>");
    checkOther = 1;
    } 
 })   

    /*$("#otherText").blur(function(){*/
    $("#otherText").on("keyup keypress keydown", function(){
    if ($("#otherButton").is(":checked") && checkOther == 1 && $("#otherText").val() != "") {
        $("#submitButton").prop("disabled", false);
        $("#genderWarningOther").remove();
    checkOther = 0;
    }
})
    
 
}) /*document ready closing brackets*/  