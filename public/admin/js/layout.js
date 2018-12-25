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
    $('.myOwl1').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        // nav:true,
        center: true,
        autoplay: true,
        // autoplayTimeout:1000,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // var User = document.getElementsByClassName("user")[0];
    // User.addEventListener('change',change1)
    // function change1(e){

    //     e.preventDefault();
    //      if(User.value){
    //          console.log(User.value);
    //         document.getElementById('l1').style.display = "none";
    //     }
    //     else{
    //         document.getElementById('l1').style.display = "block";
    //         console.log("sai rồi");
    //     }
    // }
    $('.message').on('change', function () {
        if ($('.message').value) {
            $('#l3').hide();
        }
        else {
            $('#l3').show();
        }
    });
    $('.user').on('change', function () {
        if ($('.user').value) {
            $('#l1').hide();
        }
        else {
            $('#l1').show();
        }
    });
    $('.email').on('change', function () {
        if ($('.phone').value) {
            $('#l2').hide();
        }
        else {
            $('#l2').show();
        }
    });
    $('.phone').on('change', function () {
        if ($('.phone').value) {
            $('#l4').hide();
        }
        else {
            $('#l4').show();
        }
    });
    // var Phone = document.getElementsByClassName("phone")[0];
    // Phone.addEventListener('change',change4)
    // function change4(e){

    //     e.preventDefault();
    //      if(Phone.value){
    //          console.log(Phone.value);
    //         document.getElementById('l4').style.display = "none";
    //     }
    //     else{
    //         console.log("sai rồi");
    //     }
    // }
    // var Email = document.getElementsByClassName("email")[0];
    // Email.addEventListener('change',change2)
    // function change2(e){

    //     e.preventDefault();
    //      if(Email.value){
    //         document.getElementById('l2').style.display = "none";
    //     }
    // }
    // var Message = document.getElementsByClassName("message")[0];
    // Message.addEventListener('change',change3)
    // function change3(e){

    //     e.preventDefault();
    //      if(Message.value){
    //         document.getElementById('l3').style.display = "none";
    //     }
    // }

})