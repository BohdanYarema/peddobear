var windowHeight,
    windowWidth,
    scrollTop,
    screenHeight;

// basic events

$(document).ready(function() {
    onDocumentready();
});

$(window).load(function() {
    onWindowLoad();
});

$(window).resize(function() {
    onWindowResize();
});

$(window).scroll(function() {
    onWindowScroll();
});


// other events

$('.header-inner .menu-icon').click(function(e) {
    e.stopPropagation();
    adaptMenuActive(this);
});

$('body').on('click', '.header-inner .header-nav', function (e) {
    e.stopPropagation();
});


// basic functions

function onDocumentready() {
    windowHeight = $(window).height();
    windowWidth = $(window).width();
}

function onWindowLoad() {
}

function onWindowResize() {
    windowHeight = $(window).height();
    windowWidth = $(window).width();
}

function onWindowScroll() {
}


// mobilemenu

function adaptMenuActive(el) {
    if(!$('.header-inner .menu-icon').hasClass('active')) {
        $(el).addClass('active');
        $('.header-lang').css({
            'display': 'flex'
        });
        $('.header-inner .header-nav').slideDown(300);

    }
    else {
        $(el).removeClass('active');
        $('.header-lang').removeClass('active');        
        $('.header-inner .header-nav').slideUp(300);
        $('.header-lang').removeAttr('style');
    }
}

window.addEventListener('resize', function() {
    var isDesktop = window.innerWidth >= 1024;

    if (isDesktop) {
        $('.header-inner .menu-icon').removeClass('active active-menu');
        $('.header-inner .header-nav, body, html').removeAttr('style');
    }
});


//index page slider
/*
$('.main-slider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    speed: 500,
    fade: true,
    pauseOnHover: false,
    responsive: true,
    pauseOnFocus: false,
    cssEase: 'linear'
});
*/

//loader

window.onload = function() {
    $('.preloader').delay(400).fadeOut(300, 'linear', function() {
            $('main').removeClass('loading');
        });
};


// plus and minus btns

$(".plus-btn").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      newVal = 0;
    }
    $button.parent().find("input").val(newVal);
});

$(".minus-btn").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if (oldValue > 0) {
      var newVal = parseFloat(oldValue) - 1;
    } else {
      newVal = 0;
    }
    $button.parent().find("input").val(newVal);
});


//shop slider

$('[data-slider-logos]').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '[data-slider-logos-text]',
    centerMode: true,
    focusOnSelect: true,
    prevArrow: '[data-slider-logos-prev]',
    nextArrow: '[data-slider-logos-next]',
    responsive: [
    {
        breakpoint: 1022,
        settings: {
            slidesToShow: 3
        }
    },
    {
        breakpoint: 765,
        settings: {
            slidesToShow: false, 
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">next</button>'
        }
    }
    ]
});

$('[data-slider-logos-text]').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: false,
    asNavFor: '[data-slider-logos]',
    adaptiveHeight: false,
    arrows: false
});


// mobile sliders

function initSlider(element, slide) {
    element.slick({
                speed: 400,
                fade: false,
                cssEase: 'linear',
                slide: slide,
                centerPadding: '40px',
                variableWidth: false,
                slidesToShow: 1,
                // dots: true,
                arrows: true,
                swipe: true,
                touchMove: true,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 765,
                        settings: "unslick"
                    }
                ]
            });
}

function destroySlider(element) {
    element.slick('unslick');
}


// mobile slider data

var sliders = [
    {
        element: $('.left-part__icon-text'),
        slideClass: 'div.order-text-row'
    },
    {
        element: $('.right-part__icon-text'),
        slideClass: 'div.text-icon-column'
    }
];


// mobile sliders init

sliders.forEach(function(obj) {
    initSlider(obj.element, obj.slideClass);
});

$(window).on('resize', function() {

    sliders.forEach(function(obj) {
        if (obj.element.hasClass('slick-initialized')) {
            destroySlider(obj.element);
        }
        
        initSlider(obj.element, obj.slideClass);
    });

});

$('#catapultCookie').click(function(){
    $('.cookies-bar').fadeOut(500);
    $('.cookies-bar').css('display', 'none');
});

var isMobile = false;
$(document).ready( function() {
    if ($('body').width() <= 767) {
        isMobile = true;
        console.log('<= 767')
    }
    if (isMobile) {
        $('#revealator').remove();
        $('#revealatorCss').remove();
    }
});
