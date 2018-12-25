$(document).ready(function () {
    // header
    $(window).on('scroll', function () {
        var top = $(window).scrollTop();
        console.log(top);
        if (top > 20) {
            $('.header').addClass('fixed');
        }
        else {
            $('.header').removeClass('fixed');
        }
    })
   
   
})