/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
        $('#password,#password_confirmation,#otpbtn,#registerbtn,#verifytxt').hide();
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with');
        $('')
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}


function shakeModal(value,data){
    if(value == 'login'){
        $('#loginModal .modal-dialog').addClass('shake');
        $('.error').addClass('alert alert-danger').html("Invalid Phone Number/password combination");
        $('input[type="password"]').val('');
        setTimeout( function(){ 
           $('#loginModal .modal-dialog').removeClass('shake'); 
}, 1000 ); 
    }
else{
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html(data);
    $('input[type="password"]').val('');
    setTimeout( function(){ 
       $('#loginModal .modal-dialog').removeClass('shake'); 
}, 1000 ); 
}
}

$('#loginnumber,#registernumber').focus(function(){
    if($(this).val().substring(0,3) !== '+91'){
        $(this).val("+91" + $(this).val());
    }
});


//REGISTRATION CODE

function RegisterAjax(){
      
    $('.error').removeClass('alert alert-danger').empty();
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var registernumber = $("#registernumber").val();
    var pattern = /^\+?([0-9]{2})\)?([0-9]{10})$/;

    if(registernumber.length > 1){

    if(pattern.test(registernumber)){
        if(fname == null || fname == undefined || fname.length == 0){
            shakeModal(value = null,data = "Enter First/Last Name");
         }
         else if(lname == null || lname == undefined || lname.length == 0){
            shakeModal(value = null,data = "Enter First/Last Name");

         }
    else{

        //Send Otp to user 
        const phoneNumber = registernumber;
        const appVerifier = window.recaptchaVerifier;
        firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
    .then((confirmationResult) => {
      // SMS sent. Prompt user to type the code from the message, then sign the
      // user in with confirmationResult.confirm(code).
      window.confirmationResult = confirmationResult;
      shakeModal(value = null,data = "Otp Code Sent Successfully");
    }).catch((error) => {
        alert(error);
      // ...
    });

        $("#fname,#lname,#createbtn").hide();
        $("#verifytxt,#otpbtn").show();
        $("#registernumber").prop('disabled',true);
    }
    }else{
        shakeModal(value = null,data = 'Please enter correct Phone Number');
    }
}else{
    shakeModal(value = null,data = 'Please enter details');
}
}

function VerifyOtp(){

    $('.error').removeClass('alert alert-danger').empty();
    var otp = $("#verifytxt").val();
    if(otp.length == 6){
    const code = otp;
confirmationResult.confirm(code).then((result) => {
  // User signed in successfully.
  var credential = firebase.auth.PhoneAuthProvider.credential(confirmationResult.verificationId, code);
  firebase.auth().signInWithCredential(credential);
  $("#verifytxt,#otpbtn").hide();
  $("#password,#password_confirmation,#registerbtn").show();
  shakeModal(data = null,data = "Otp Verified Successfully");
  // ...
}).catch((error) => {
  shakeModal(value  = null,data = error);
});
}else{
    shakeModal(value = null,data = 'Please Insert Valid Otp');
}
}

function CreateUser(){

    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var registernumber = $("#registernumber").val();
    var password = $("#password").val();
    var confirm_password = $("#password_confirmation").val();

    if(password !== confirm_password){
        shakeModal(value = null,data = "Password/Confirm Password does not match");
    }else{
         $.ajax({
            type: "POST",
            url: "/register",
            data: {'fname': fname,'lname':lname,'number':registernumber,'password':password},
            dataType: "json",
            success: function (response) {
                alert(response.msg);
            }
        });
    }
}

//LOGIN CODE

function loginAjax(){
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal(value = 'login',data = null);
}




