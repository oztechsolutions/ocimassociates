new WOW().init();
var $ = jQuery.noConflict();

$(document).ready(function($) {
    if ($('.banner-slider').length > 0) {
        $('.banner-slider').slick({
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 5000,
            adaptiveHeight: true
        });
    }

    $('.testimonialSlider').slick({
        dots: true,
        infinite: false,
        speed: 600,
        adaptiveHeight: true,
        arrows: false,
        autoplay: false
    });

    if ($('.brandSlider').length > 0) {
        $('.brandSlider').slick({
            dots: true,
            infinite: false,
            arrows: false,
            speed: 600,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 841,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }
})


//FAQ accordion
$(document).ready(function() {
    $('.testimonialBlock .question').on('click', function() {
        var ansBlock = $(this).parent('.blockwrapper').children('.answer');
        var questionBlock = $(this).parent('.blockwrapper').children('.question');
        $('.answer').not(ansBlock).slideUp();
        $('.question').not(questionBlock).removeClass('active');
        $(this).toggleClass('active');
        ansBlock.slideToggle();
    })

    $('.fullWidth-twoCol .row>div').matchHeight({ property: 'min-height' });

});


var dateToday = new Date();
$(".datepicker").datepicker({
    //dateFormat: 'dd-mm-yy',
    //dayNamesMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
    //minDate: dateToday,
    //beforeShowDay: $.datepicker.noWeekends
}).keyup(function(e) {
    if (e.keyCode == 8 || e.keyCode == 46) {
        $.datepicker._clearDate(this);
    }
});

/*FIXED STICKY FOOTER SOLUTION*/
$(document).ready(function() {
    $(document.body).css("padding-bottom", $("div.stickyFooter").innerHeight());
});
$(window).resize(function() {
    $(document.body).css("padding-bottom", $("div.stickyFooter").innerHeight());
}).resize();