function validateForm() {

    var validCredit_card_number = 0;
    var valid = false;
    var Full_name = $('#fname').val();
    var Email = $('#email').val();
    var Address = $('#adress').val();
    var City = $('#city').val();
    var State = $('#stat').val();
    var Zip_code = $('#zip_code').val();
    var Name_on_card = $('#name_on_card').val()
    var credit_card_number = $('#credit_card_number').val();
    var Exp_month = $('#exp_month').val();
    var Exp_year = $('#exp_year').val();
    var cvv = $('#cvv').val();
    var validateFull_name = /^[a-z ,.'-]+$/i;
    var validateEmail = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var validateExp_month = /^January|February|March|April|May|June|July|August|September|October|November|December/;
    var validateExp_year = /^2017|2018|2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031/;
    var cvv = /^[0-9]{3,3}/;

    $('#credit_card_number').validateCreditCard(function(result) {
        if (result.valid) {
            $('#credit_card_number').removeClass('require');
            $('#errorCardNumber').text('');
            validCard = 1;
        } else {
            $('#credit_card_number').addClass('require');
            $('#errorCardNumber').text('Invalid Card Number');
            validCard = 0;
        }
    });

    if (!validateName.test(Full_name)) {
        $('#fname').addClass('require');
        $('#errorFullName').text('Invalid Name');
        valid = false;
    } else {
        $('#fname').removeClass('require');
        $('#errorFullName').text('');
        valid = true;
    }

    if (!validateEmail.test(Email)) {
        $('#email').addClass('require');
        $('#erroremail').text('Invalid Email Address');
        valid = false;
    } else {
        $('#email').removeClass('require');
        $('#erroremail').text('');
        valid = true;
    }

    if (Address == '') {
        $('#adress').addClass('require');
        $('#errorAddress').text('Enter Address Detail');
        valid = false;
    } else {
        $('#adress').removeClass('require');
        $('#errorAddress').text('');
        valid = true;
    }

    if (City == '') {
        $('#city').addClass('require');
        $('#errorCity').text('Enter City');
        valid = false;
    } else {
        $('#city').removeClass('require');
        $('#errorCity').text('');
        valid = true;
    }

    if (State == '') {
        $('#stat').addClass('require');
        $('#errorState').text('Enter Country');
        valid = false;
    } else {
        $('#stat').removeClass('require');
        $('#errorState').text('');
        valid = true;
    }

    if (Zip_code == '') {
        $('#zip_code').addClass('require');
        $('#errorCustomerZipCode').text('Enter Zip code');
        valid = false;
    } else {
        $('#zip_code').removeClass('require');
        $('#errorZipCode').text('');
        valid = true;
    }

    if (Name_on_card == '') {
        $('#name_on_card').addClass('require');
        $('errorNameOnCard').text('Enter Name On Card');
        valid = false;
    } else {
        $('#name_on_card').removeClass('require');
        $('#errorNameOnCard').text('');
        valid = true;
    }


    if (validCard == 1) {
        if (!validateMonth.test(Exp_month)) {
            $('#exp_month').addClass('require');
            $('#errorExpMonth').text('Invalid Data');
            valid = false;
        } else {
            $('#ExpMonth').removeClass('require');
            $('#errorExpMonth').text('');
            valid = true;
        }

        if (!validateYear.test(Exp_year)) {
            $('#exp_year').addClass('require');
            $('#errorExpYear').error('Invalid Data');
            valid = false;
        } else {
            $('#exp_year').removeClass('require');
            $('#errorExpYear').error('');
            valid = true;
        }

        if (!cvv_expression.test(CVV)) {
            $('#cvv').addClass('require');
            $('#errorCardCvv').text('Invalid Data');
            valid = false;
        } else {
            $('#CVV').removeClass('require');
            $('#errorCardCvc').text('');
            valid = true;
        }

        function validate() {
            var Credit_card_number = document.getElementById("require");
            var length = document.getElementById("length");
            if (credit_card_number.length = 16) {
                alert("Payment Successful");
                window.location.replace("index.html");
                return false;
            } else {
                alert("Payment Failed");
            }
        }
    }

}