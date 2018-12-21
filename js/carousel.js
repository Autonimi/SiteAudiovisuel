(function($) {



$(document).ready(function(){
    $("#myBigCarousel").owlCarousel(
        {
            
            dots : false,
            nav:true,
            touchDrag  : true,
            mouseDrag  : true,
            loop: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:3,
                    nav:false,
                },
                600:{
                    items:5,
                },
                1000:{
                    items:7,
                }
            }
        }
    );
});

})(jQuery);