$(document).ready(function () {
    $('.img-1').click(function () {
        $(this).addClass('active')
        $('.img-2').removeClass('active')
    })
    $('.img-2').click(function () {
        $(this).addClass('active')
        $('.img-1').removeClass('active')
    })
    $('.certificate-cards').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        navText: ["<img src='../img/nav-left.svg'>", "<img src='../img/nav-right.svg'>"],
        responsive: {
            1280: {
                items: 4
            },
            992: {
                items: 3
            },
            768: {
                items: 2
            },
            0: {
                items: 1
            }
        }
    });
    $('.team-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        navText: ["<img src='../img/nav-left.svg'>", "<img src='../img/nav-right.svg'>"],
        responsive: {
            1280: {
                items: 4
            },
            992: {
                items: 3
            },
            768: {
                items: 2
            },
            576: {
                items: 1
            }
        }
    });
    $('.comment-slider').owlCarousel({
        loop: true,
        margin: 30,
        center:true,
        nav: true,
        dots: false,
        navText: ["<img src='../img/nav-left.svg'>", "<img src='../img/nav-right.svg'>"],
        responsive: {
            1280: {
                items: 3
            },
            576: {
                items: 1
            }
            
        }
    });
    $('.home-slider').owlCarousel({
        loop: true,
        margin: 30,
        center:true,
        nav: true,
        dots: true,
        navText: ["<img src='../img/home-left.svg'> <p>əvvəlki</p>", "<p>sonrakı</p><img src='../img/home-right.svg'>"],
        responsive: {
            0: {
                items: 1
            }
        }
    });
    $(".comment-slider .owl-next").click(function(){
        $(".owl-stage").css("transition","all 0.5s ease 0s")
    })
    $(".comment-slider .owl-prev").click(function(){
        $(".owl-stage").css("transition","all 0.5s ease 0s")
    })
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $(".header-bottom").addClass("active");
        }else{
            $(".header-bottom").removeClass("active");
        }
    });
    $('.hr-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        navText: ["<img src='../img/nav-left.svg'>", "<img src='../img/nav-right.svg'>"],
        responsive: {
            1280: {
                items: 4
            },
            992: {
                items: 3
            },
            576: {
                items: 2
            },
            0: {
                items: 1
            }
        }
    });
    $('.partners-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        navText: ["<img src='../img/nav-left.svg'>", "<img src='../img/nav-right.svg'>"],
        responsive: {
            1280: {
                items: 5
            },
            992: {
                items: 4
            },
            768: {
                items: 3
            },
            576: {
                items: 2    
            },
            0: {
                items: 1
            }
        }
    });
    $("body").on('mouseenter', '.teaching-slider .swiper-slide', function () {
        $(this).addClass("hover_zoom");
        $(".teaching-slider .swiper-slide .teaching-card").addClass("card_effect")
    })
    $("body").on('mouseleave', '.teaching-slider .swiper-slide', function () {
        $(this).removeClass("hover_zoom");
        $(".teaching-slider .swiper-slide .teaching-card").removeClass("card_effect")
    })
    $("body").on('mouseenter', '.teaching-slider .swiper-slide-active',function(){
        $(".teaching-slider .swiper-slide .teaching-card").removeClass("card_effect")
    })
    $(".select-date a:last-child").click(function(){
        $(".select-date a").removeClass("active")
        $(this).addClass("active")
        $(".projects-all").css("display","none")
        $(".last-projects").css("display","block")
    })
    $(".select-date a:first-child").click(function(){
        $(".select-date a").removeClass("active")
        $(this).addClass("active")
        $(".projects-all").css("display","block")
        $(".last-projects").css("display","none")
    })
    const mediaQuery = window.matchMedia('(max-width: 1100px)')
    if (mediaQuery.matches) {
        $(".teaching-slider .swiper-slide").addClass("hover_zoom");
    }
    // if($(".img-1").hasClass("active")){
    //     setInterval(function(){ 
    //         $('.img-2').addClass("active")
    //         $('.img-1').removeClass("active")
    //     }, 5000);
    // }
    var swiper = new Swiper(".teaching-slider", {
        slidesPerView: 'auto',
        centeredSlides: false,
        // slidesPerView: 5,
        spaceBetween: 0,
        // slidesPerGroup: 1,
        // freeMode: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    function visible(partial) {
        var $t = partial,
            $w = jQuery(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));

    }
    $('[data-fancybox]').fancybox({
        transitionEffect: "slide",
        loop            : true,
        toolbar         : true,
        clickContent    : true
      });

    $(".text-input").keypress(function (e) {
        var s = new RegExp("^[a-zA-Z_]+$"),
            a = String.fromCharCode(e.charCode ? e.charCode : e.which);
        return !!s.test(a) || (e.preventDefault(), !1);
    }),
    $(".numper-input").keypress(function (e) {
        var s = new RegExp("^[0-9_]+$"),
            a = String.fromCharCode(e.charCode ? e.charCode : e.which);
        return !!s.test(a) || (e.preventDefault(), !1);
    }),
    $(".number-input").mask("(000)-000-00-00"),
    $("#hr-select").niceSelect();
    $(window).scroll(function () {
        if (visible($('.count-digit'))) {
            if ($('.count-digit').hasClass('counter-loaded')) return;
            $('.count-digit').addClass('counter-loaded');

            $('.count-digit').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
        }
    })
});