function stripePay(event) {
    event.preventDefault(); 
    if(validateForm() == true) {
     $('#payNow').attr('disabled', 'disabled');
     $('#payNow').val('Payment Processing....');
     Stripe.createToken({
      number:$('#cardNumber').val(),
      cvv:$('#CVV').val(),
      exp_month : $('#ExpMonth').val(),
      exp_year : $('#ExpYear').val()
     }, stripeResponseHandler);
     return false;
    }
}

function stripeResponseHandler(status, response) {
 if(response.error) {
  $('#payNow').attr('disabled', false);
  $('#message').html(response.error.message).show();
 } else {
  var stripeToken = response['id'];
  $('#paymentForm').append("<input type='hidden' name='stripeToken' value='" + stripeToken + "' />");

  $('#paymentForm').submit();
 }
}

function validateForm() {
 var validCard = 0;
 var valid = false;
 var CVV = $('#CVV').val();
 var ExpMonth = $('#ExpMonth').val();
 var ExpYear = $('#ExpYear').val();
 var cardNumber = $('#cardNumber').val();
 var email = $('#email').val();
 var fullName = $('#fullName').val();
 var Address = $('#Address').val();
 var City = $('#City').val();
 var State = $('#State').val();
 var Zipcode = $('#Zipcode').val();
 var validateName = /^[a-z ,.'-]+$/i;
 var validateEmail = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
 var validateMonth = /^01|02|03|04|05|06|07|08|09|10|11|12/;
 var validateYear = /^2017|2018|2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031/;
 var cvv_expression = /^[0-9]{3,3}/;

 $('#cardNumber').validateCreditCard(function(result){
  if(result.valid) {
   $('#cardNumber').removeClass('require');
   $('#errorCardNumber').text('');
   validCard = 1;
  } else {
   $('#cardNumber').addClass('require');
   $('#errorCardNumber').text('Invalid Card Number');
   validCard = 0;
  }
 });

 if(validCard == 1) {
  if(!validateMonth.test(ExpMonth)){
   $('#ExpMonth').addClass('require');
   $('#errorExpMonth').text('Invalid Data');
   valid = false;
  } else { 
   $('#ExpMonth').removeClass('require');
   $('#errorExpMonth').text('');
   valid = true;
  }

  if(!validateYear.test(ExpYear)){
   $('#ExpYear').addClass('require');
   $('#errorExpYear').error('Invalid Data');
   valid = false;
  } else {
   $('#ExpYear').removeClass('require');
   $('#errorExpYear').error('');
   valid = true;
  }

  if(!cvv_expression.test(CVV)) {
   $('#CVV').addClass('require');
   $('#errorCardCvc').text('Invalid Data');
   valid = false;
  } else {
   $('#CVV').removeClass('require');
   $('#errorCardCvc').text('');
   valid = true;
  }
  
  if(!validateName.test(fullName)) {
   $('#fullName').addClass('require');
   $('#errorfullName').text('Invalid Name');
   valid = false;
  } else {
   $('#fullName').removeClass('require');
   $('#errorfullName').text('');
   valid = true;
  }

  if(!validateEmail.test(email)) {
   $('#email').addClass('require');
   $('#erroremail').text('Invalid Email Address');
   valid = false;
  } else {
   $('#email').removeClass('require');
   $('#erroremail').text('');
   valid = true;
  }

  if(Address == '') {
   $('#Address').addClass('require');
   $('#errorAddress').text('Enter Address Detail');
   valid = false;
  } else {
   $('#Address').removeClass('require');
   $('#errorAddress').text('');
   valid = true;
  }

  if(City == ''){
   $('#City').addClass('require');
   $('#errorCity').text('Enter City');
   valid = false;
  } else {
   $('#City').removeClass('require');
   $('#errorCity').text('');
   valid = true;
   }
   
  if(State == '') {
    $('#State').addClass('require');
    $('#errorState').text('Enter Country Detail');
    valid = false;
   } else {
    $('#State').removeClass('require');
    $('#errorState').text('');
    valid = true;
   }  

  if(Zipcode == ''){
   $('#customerZipcode').addClass('require');
   $('#errorCustomerZipcode').text('Enter Zip code');
   valid = false;
  } else {
   $('#customerZipcode').removeClass('require');
   $('#errorCustomerZipcode').text('');
   valid = true;
  }

 }
 return valid;
}

function validateNumber(event) {
 var charCode = (event.which) ? event.which : event.keyCode;
 if (charCode != 32 && charCode > 31 && (charCode < 48 || charCode > 57)){
  return false;
 }
 return true;
}