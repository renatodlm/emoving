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

    const swiper = new Swiper('.swiper', {
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

});