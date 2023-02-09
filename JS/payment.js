$("input[name='expiry_data']").mask("00 / 00");

function validate() {
    var card_holder = document.payment_table.card_holder.value;
    var card_number = document.payment_table.card_number.value;
    var exp_date = document.payment_table.exp_date.value;
    var cvc = document.payment_table.cvc.value;

    if (card_holder == "") {
        document.getElementById('card_holder').innerHTML = "Enter card holder name";
        return (false);
    } else {
        document.getElementById('card_holder').innerHTML = " ";
    }

    if (card_number == "") {
        document.getElementById('card_number').innerHTML = "Enter Your card number"
        return (false)
    } else {
        document.getElementById('card_number').innerHTML = " "
    }

    if (exp_date == "") {
        document.getElementById('exp_date').innerHTML = "Enter card expiration date"
        return (false)
    } else {
        document.getElementById('exp_date').innerHTML = " "
    }

    if (cvc == "") {
        document.getElementById('cvc').innerHTML = "Enter Your card cvc"
        return (false)
    } else {
        document.getElementById('cvc').innerHTML = " "
    }

    return (true);
}