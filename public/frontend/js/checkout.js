$(document).ready(function(){
    $('.razorpay_btn').click(function (e) {
        var Firstname = $('.Firstname').val();
        var Lastname = $('.Lasttname').val();
        var email = $('.email').val();
        var phone = $('.phone').val();
        var address1 = $('.address1').val();
        var address2 = $('.address2').val();
        var city = $('.city').val();
        var state = $('.state').val();
        var country = $('.country').val();
        var pincode = $('.pincode').val();
    if(!Firstname){
        fname_error = "First Name is required";
        $('#fname_error').html('');
        $('#fname_error').html(fname_error);

    }
    else{
        fname_error = "";
        $('#fname_error').html('');

   
    }
  

  
   
    if(!email){
        email_error = "Email is required";
        $('#email_error').html('');
        $('#email_error').html(email_error);

    }
    else{
        email_error = "";
        $('#email_error').html('');

   
    }
    if(!phone){
        phone_error = "Phone is required";
        $('#phone_error').html('');
        $('#phone_error').html(phone_error);

    }
    else{
        phone_error = "";
        $('#phone_error').html('');

   
    }
    if(!address1){
        address1_error = "Address1 is required";
        $('#address1_error').html('');
        $('#address1_error').html(address1_error);

    }
    else{
        address1_error = "";
        $('#address1_error').html('');

   
    }
    if(!address2){
        address2_error = "Address2 Name is required";
        $('#address2_error').html('');
        $('#address2_error').html(address2_error);

    }
    else{
        address2_error = "";
        $('#address2_error').html('');

   
    }
    if(!city){
        city_error = "City is required";
        $('#city_error').html('');
        $('#city_error').html(city_error);

    }
    else{
        city_error = "";
        $('#city_error').html('');

   
    }
    if(!state){
        state_error = "State Name is required";
        $('#state_error').html('');
        $('#state_error').html(state_error);

    }
    else{
        state_error = "";
        $('#state_error').html('');

   
    }
    if(!country){
        country_error = "Country is required";
        $('#country_error').html('');
        $('#country_error').html(country_error);

    }
    else{
        country_error = "";
        $('#country_error').html('');

   
    }
    if(!pincode){
        pincode_error = "Pin code is required";
        $('#pincode_error').html('');
        $('#pincode_error').html(pincode_error);

    }
    else{
        state_error = "";
        $('#pincode_error').html('');

   
    }
    });
});