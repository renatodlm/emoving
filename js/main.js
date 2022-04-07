jQuery(document).ready(function ($) {



    // Mobile Navigation
    if ($('#nav-menu-container').length) {
        var $mobile_nav = $('#nav-menu-container').clone().prop({
            id: 'mobile-nav'
        });
        $mobile_nav.find('> ul').attr({
            'class': '',
            'id': ''
        });
        $('body').append($mobile_nav);
        $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="menu__mobile--bars"></i></button>');
        $('body').append('<div id="mobile-body-overly"></div>');
        $('#mobile-nav').find('.menu-item-has-children').prepend('<i class="fa-chevron-down"></i>');

        $(document).on('click', '.menu-item-has-children > a', function (e) {
            if ($(this).attr('href') == '#') {
                if (!$(this).next().hasClass('menu-item-active')) {
                    $(this).next().addClass('menu-item-active');
                } else {
                    $(this).next().toggleClass('menu-item-active');
                }

                $(this).nextAll('ul').eq(0).slideToggle();
                if (!$(this).nextAll('ul').eq(0).hasClass('.ul__sub-menu--active')) {
                    $(this).nextAll('ul').eq(0).addClass('ul__sub-menu--active');
                } else {
                    $(this).nextAll('ul').eq(0).toggleClass('ul__sub-menu--active');
                }
                $(this).prevAll('i').toggleClass("fa-chevron-up fa-chevron-down");
            }
        });

        $(document).on('click', '.menu-item-has-children i', function (e) {
            if (!$(this).next().hasClass('menu-item-active')) {
                $(this).next().addClass('menu-item-active');
            } else {
                $(this).next().toggleClass('menu-item-active');
            }

            $(this).nextAll('ul').eq(0).slideToggle();
            if (!$(this).nextAll('ul').eq(0).hasClass('.ul__sub-menu--active')) {
                $(this).nextAll('ul').eq(0).addClass('ul__sub-menu--active');
            } else {
                $(this).nextAll('ul').eq(0).toggleClass('ul__sub-menu--active');
            }
            $(this).toggleClass("fa-chevron-up fa-chevron-down");
        });

        $(document).on('click', '#mobile-nav-toggle', function (e) {
            $('body').toggleClass('mobile-nav-active');
            $('.main-body').toggleClass('body-blur');
            $('#mobile-nav-toggle i').toggleClass('menu__mobile--bars');
            $('#mobile-body-overly').toggle();
        });

        $(document).click(function (e) {
            var container = $("#mobile-nav, #mobile-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.main-body').removeClass('body-blur');
                    $('#mobile-nav-toggle i').toggleClass('menu__mobile--bars');
                    $('#mobile-body-overly').fadeOut();
                }
            }
        });
    } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
    }

    //	window.addEventListener("resize", function() {
    //		"use strict"; window.location.reload(); 
    //	});

    // $(window).scroll(function () {
    //     $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    //     return !1;
    // });

    if ($('#wpadminbar').length > 0) {
        $('.header').css('margin-top', '32px');
    }

    document.addEventListener("DOMContentLoaded", function () {


        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function (element) {
            element.addEventListener('click', function (e) {
                e.stopPropagation();
            });
        })



        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function () {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function (everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
                element.addEventListener('click', function (e) {

                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        console.log(nextEl);
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });

            })

        }
        // end if innerWidth

    });
    // DOMContentLoaded  end

    $(".nav-item.dropdown").mouseover(function () {
        $(this).find('a').addClass('show')
        $(this).find('.dropdown-menu').addClass('show');
    });

    $(".nav-item.dropdown").mouseout(function () {
        $(this).find('a').removeClass('show')
        $(this).find('.dropdown-menu').removeClass('show');
    });



    $(".videos-thumb").on("click", function () {
        var $videoThumb = $(this);
        var $videoContainer = $videoThumb.next();
        var $videoPlayer = $videoContainer.children();
        $videoPlayer.attr('src', $videoPlayer.attr('data-src'));
        $videoThumb.fadeOut("slow", function () {
            $videoContainer.fadeIn();
            $videoPlayer[0].src += "&autoplay=1";
        });
    });

    const blog_swiper = new Swiper('.blog-swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const services_slider_1 = new Swiper('.services_slider_1', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const services_slider_2 = new Swiper('.services_slider_2', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const services_slider_3 = new Swiper('.services_slider_3', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


    const services_slider_4 = new Swiper('.services_slider_4', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const related_posts_swiper = new Swiper('.related-posts-swiper', {
        loop: false,
        spaceBetween: 30,
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    $(function () { AOS.init({ offset: 100, duration: 300, easing: "ease-out-quad", once: !0 }); window.addEventListener('load', AOS.refresh); });

    var rellax = new Rellax('.rellax', {
        center: true,
        horizontal: true,
    });
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.navbar').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        if (st > lastScrollTop && st > navbarHeight) {
            $('#header').removeClass('nav-down').addClass('nav-up');
            jQuery('#mobile-nav-toggle').css('margin-top', '-200px');
        } else {
            if (st + $(window).height() < $(document).height()) {
                $('#header').removeClass('nav-up').addClass('nav-down');
                jQuery('#mobile-nav-toggle').css('margin-top', '0px');
            }
            if (st < 200) {
                jQuery('#mobile-nav-toggle').css('margin-top', '0px');
            }
        }
        lastScrollTop = st;
    }

    var vheightPass = false;
    jQuery(window).scroll(function () {
        var pdsize = jQuery('#header').not('.home-top').height() + 40;
        var vheight = jQuery(window).height() - 10;
        if (jQuery(this).scrollTop() >= 200 && !vheightPass) {
            if (!jQuery('#header').hasClass('transparent')) {
                // jQuery('body').css('padding-top', pdsize + 'px');
            }
            jQuery('#header').hide();
            jQuery('#header').addClass('fixed-top').fadeIn('fast');
            jQuery('#mobile-nav-toggle').addClass('position-fixed');

            vheightPass = true;
        }
        if (jQuery(this).scrollTop() <= 100 && vheightPass) {
            if (!jQuery('#header').hasClass('transparent')) {
                // jQuery('body').css('padding-top', '0');
            }
            jQuery('#header').removeClass('fixed-top').css("display", "");
            jQuery('#mobile-nav-toggle').removeClass('position-fixed');
            vheightPass = false;
        }
    });

    var pdsize = jQuery('#header').not('.home-top').height() + 40;
    var vheight = jQuery(window).height() - 10;
    if (jQuery(this).scrollTop() >= 200 && !vheightPass) {
        if (!jQuery('#header').hasClass('transparent')) {
            //jQuery('body').css('padding-top', pdsize + 'px');
        }
        jQuery('#header').hide();
        jQuery('#header').addClass('fixed-top').fadeIn('fast');
        jQuery('#mobile-nav-toggle').addClass('position-fixed');
        vheightPass = true;
    }
    if (jQuery(this).scrollTop() <= 100 && vheightPass) {
        if (!jQuery('#header').hasClass('transparent')) {
            //jQuery('body').css('padding-top', '0');
        }
        jQuery('#header').removeClass('fixed-top').css("display", "");
        jQuery('#mobile-nav-toggle').removeClass('position-fixed');
        vheightPass = false;
    }


    $('.filtro-blog-title').click(function (e) {
        $('.filtro-blog').toggleClass('open');
    });

});