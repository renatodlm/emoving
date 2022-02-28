jQuery(document).ready(function ($) {

    //	window.addEventListener("resize", function() {
    //		"use strict"; window.location.reload(); 
    //	});


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
        // var $videoPlayer = $videoContainer.children();
        // $videoPlayer.attr('src', $videoPlayer.attr('data-src'));
        $videoThumb.fadeOut("slow", function () {
            $videoContainer.fadeIn();
            //$videoPlayer[0].src += "&autoplay=1";
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


    // const easeBoxes = []

    // // Create an animation for each ease box. Each with a different timing.
    // document.querySelectorAll('.easeBox').forEach((elem, i) => {

    //     // Get the timing from the data attribute.
    //     // You can also hard-code the timing, but for the demo it's easier this way.
    //     const timing = elem.getAttribute('data-timing')

    //     // Crate an instance for the current element and store the instance in an array.
    //     // We start the animation later using the instances from the array.
    //     easeBoxes.push(basicScroll.create({
    //         elem: elem,
    //         from: 'middle-bottom',
    //         to: 'bottom-top',
    //         direct: true,
    //         props: {
    //             '--ty': {
    //                 from: '0',
    //                 to: '100px',
    //                 timing: timing
    //             }
    //         }
    //     }))

    // })

    // easeBoxes.forEach((easeBox) => easeBox.start())
    $(function () { AOS.init({ offset: 100, duration: 300, easing: "ease-out-quad", once: !0 }); window.addEventListener('load', AOS.refresh); });
    var rellax = new Rellax('.rellax', {
        center: true
    });
});