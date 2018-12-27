// $(document).ready(function () {
//     // header
//     $(window).on('scroll', function () {
//         var top = $(window).scrollTop();
//         console.log(top);
//         if (top > 20) {
//             $('.header').addClass('fixed');
//         }
//         else {
//             $('.header').removeClass('fixed');
//         }
//     })
//     var numberOfItem = $('#loop .list-group').length;
//     var limitPrePage = 4;
//     console.log(numberOfItem);
//     $("#loop .list-group:gt(" + (limitPrePage - 1) + ")").hide();
//     //    total of items/limit
//     var totalPages = Math.ceil(numberOfItem / limitPrePage);

//    $('.pagination').append(" <li id='prev-page'  class='page-item '><a class='page-link'  href='javascript:void(0)' aria-label='Previous'><span aria-hidden='true'>&laquo;</span> </a></li>");
//     $('.pagination').append("<li class='page-item current-page active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>");
//     for (var i = 2; i <= totalPages; i++) {
//         $(".pagination").append("<li class='page-item current-page'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
//     }
//     $('.pagination').append(" <li id='next-page'  class='page-item '><a class='page-link'  href='javascript:void(0)' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");

//     $('.pagination li.current-page').on("click", function () {

//         if ($(this).hasClass("active")) {
//             return false;
//         } else {
//             var currientPages = $(this).index();
//             // alert(currientPages);
//             $('.pagination li').removeClass('active');
//             $(this).addClass('active');
//             $('#loop .list-group').hide();
//             var grandTotal = limitPrePage * currientPages;
//             for (var i = grandTotal - limitPrePage; i < grandTotal; i++) {
//                 $("#loop .list-group:eq(" + i + ")").show();
//             }
//         }

//     });

//     $("#next-page").on("click",function(){
//        var currentPage = $(".pagination li.active").index();
//        console.log(currentPage);
//        if(currentPage === totalPages){
//            return false;
//        }
//        else{
//            currentPage ++;
//            console.log(currentPage);
//            $(".pagination li").removeClass('active');
//            $('#loop .list-group').hide();
//            var grandTotal = limitPrePage * currentPage;
//            for(var i= grandTotal - limitPrePage; i< grandTotal; i++){
//                $("#loop .list-group:eq("+ i +")").show();
//            }
//            $(".pagination li.current-page:eq("+(currentPage - 1)+")").addClass('active');
//        }
//     });


//     $("#prev-page").on("click",function(){
//         var currentPage = $(".pagination li.active").index();
//         if(currentPage === 1){
//             return false;
//         }
//         else{
//             currentPage --;
//             console.log(currentPage);
//             $(".pagination li").removeClass('active');
//             $('#loop .list-group').hide();
//             var grandTotal = limitPrePage * currentPage;
//             for(var i= grandTotal - limitPrePage; i< grandTotal; i++){
//                 $("#loop .list-group:eq("+ i +")").show();
//             }
//             $(".pagination li.current-page:eq("+(currentPage - 1)+")").addClass('active');
//         }
//      });


// })






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

    //all product
    var numberOfItem = $('#allCar .cardContent').length;
    var limitPrePage = 8;
    console.log(numberOfItem);
    $("#allCar .cardContent:gt(" + (limitPrePage - 1) + ")").hide();
    //    total of items/limit
    var totalPages = Math.ceil(numberOfItem / limitPrePage);

   $('.pagination').append(" <li id='prev-page'  class='page-item '><a class='page-link'  href='javascript:void(0)' aria-label='Previous'><span aria-hidden='true'>&laquo;</span> </a></li>");
    $('.pagination').append("<li class='page-item current-page active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>");
    for (var i = 2; i <= totalPages; i++) {
        $(".pagination").append("<li class='page-item current-page'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    }
    $('.pagination').append(" <li id='next-page'  class='page-item '><a class='page-link'  href='javascript:void(0)' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");

    $('.pagination li.current-page').on("click", function () {

        if ($(this).hasClass("active")) {
            return false;
        } else {
            var currientPages = $(this).index();
            // alert(currientPages);
            $('.pagination li').removeClass('active');
            $(this).addClass('active');
            $('#allCar .cardContent').hide();
            var grandTotal = limitPrePage * currientPages;
            for (var i = grandTotal - limitPrePage; i < grandTotal; i++) {
                $("#allCar .cardContent:eq(" + i + ")").show();
            }
        }

    });

    $("#next-page").on("click",function(){
       var currentPage = $(".pagination li.active").index();
       console.log(currentPage);
       if(currentPage === totalPages){
           return false;
       }
       else{
           currentPage ++;
           console.log(currentPage);
           $(".pagination li").removeClass('active');
           $('#allCar .cardContent').hide();
           var grandTotal = limitPrePage * currentPage;
           for(var i= grandTotal - limitPrePage; i< grandTotal; i++){
               $("#allCar .cardContent:eq("+ i +")").show();
           }
           $(".pagination li.current-page:eq("+(currentPage - 1)+")").addClass('active');
       }
    });


    $("#prev-page").on("click",function(){
        var currentPage = $(".pagination li.active").index();
        if(currentPage === 1){
            return false;
        }
        else{
            currentPage --;
            console.log(currentPage);
            $(".pagination li").removeClass('active');
            $('#allCar .cardContent').hide();
            var grandTotal = limitPrePage * currentPage;
            for(var i= grandTotal - limitPrePage; i< grandTotal; i++){
                $("#allCar .cardContent:eq("+ i +")").show();
            }
            $(".pagination li.current-page:eq("+(currentPage - 1)+")").addClass('active');
        }
     });


     //top cars
     $('#topCars').owlCarousel({
        stagePadding: 130,
        loop:true,
        autoplay:true,
        autoplayHoverPause:true,
        margin:10,
        // nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

})