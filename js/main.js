jQuery(document).ready(function ($) {

    //	window.addEventListener("resize", function() {
    //		"use strict"; window.location.reload(); 
    //	});
    $('[href="^#*"').click(function (e) {
        alert('foi')
    });

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
        // Optional parameters
        //direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // And if we need scrollbar
        // scrollbar: {
        //   el: '.swiper-scrollbar',
        // },
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
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        // scrollbar: {
        //   el: '.swiper-scrollbar',
        // },
    });

    // easeBoxes.forEach((easeBox) => easeBox.start())
    $(function () { AOS.init({ offset: 100, duration: 300, easing: "ease-out-quad", once: !0 }); window.addEventListener('load', AOS.refresh); });

    var rellax = new Rellax('.rellax', {
        center: true,
        horizontal: true,
    });


    // Hide Header on on scroll down
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

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('#header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('#header').removeClass('nav-up').addClass('nav-down');
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
            vheightPass = true;
        }
        if (jQuery(this).scrollTop() <= 100 && vheightPass) {
            if (!jQuery('#header').hasClass('transparent')) {
                // jQuery('body').css('padding-top', '0');
            }
            jQuery('#header').removeClass('fixed-top').css("display", "");
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
        vheightPass = true;
    }
    if (jQuery(this).scrollTop() <= 100 && vheightPass) {
        if (!jQuery('#header').hasClass('transparent')) {
            //jQuery('body').css('padding-top', '0');
        }
        jQuery('#header').removeClass('fixed-top').css("display", "");
        vheightPass = false;
    }
});