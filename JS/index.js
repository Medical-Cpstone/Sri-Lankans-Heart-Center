$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {
        $('nav').addClass('nav-fixed');
    } else {
        $('nav').removeClass('nav-fixed');
    }
});


let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}


$(document).ready(function() {
    $(".toggle-btn").click(function() {
        $(".nav").toggleClass("nav-active");
        $(".toggle-btn i").toggleClass("nav-active");
    });
});


//top to scroll button

/*scroll to top*/
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $("#arrow i").fadeIn();
        } else {
            $("#arrow i").fadeOut();
        }

    });
    $("#arrow i").on('click', function() {
        $("html,body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});