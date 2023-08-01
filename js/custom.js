function fadeshow() {
    $.fn.visible = function (partial) {
        var $t = $(this),
            $w = $(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;
        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
    };
    var win = $(window);
    var allMods = $("section .container > *:not(ul), section .container > ul > li");

    allMods.each(function (i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    win.scroll(function (event) {
        allMods.each(function (i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("show-div");
            }
        });
    });
}




jQuery(document).ajaxComplete(function () {
    fadeshow();
})


jQuery(document).ready(function () {

    fadeshow();

    // lazy Load
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
    // lazy Load    

    // menu toggle         
    jQuery('.mmenu').click(function () {
        jQuery('body').toggleClass('show-menu');
    });
    jQuery('.close-button').click(function () {
        jQuery('body').removeClass('show-menu');
    });
    jQuery(window).scroll(function () {
        var sticky = jQuery('#header'),
            scroll = jQuery(window).scrollTop();

        if (scroll >= 70) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });

    //Menu active class script
    var url = window.location.pathname;
    if (url == "/") {
        url = "/index.php";
    }

    var urlRegExp = new RegExp(url.replace(/\/$/, '') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there

    // now grab every link from the navigation
    $('.navigation a, .f-menu a').each(function () {
        // and test its normalized href against the url pathname regexp
        if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
            $(this).parent('li').addClass('active');
        }
    });

    //fixed header
    $(window).scroll(function () {
        var header = $('.header');
        var scroll = $(window).scrollTop();
        var homeScroll = 80;
        if (scroll > homeScroll) {
            header.addClass('fixed');
        } else {
            header.removeClass('fixed');
        }
    });

    // Bottom-top
    jQuery("#myBtn").hide();
    jQuery(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('#myBtn').fadeIn();
            } else {
                jQuery('#myBtn').fadeOut();
            }
        });

        // scroll body to 0px on click
        jQuery('#myBtn').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    });

    //search open
    jQuery(document).on("click", ".search-click", function () {
        jQuery(this).parents('.search').addClass('search-open');
    });
    jQuery(document).on("click", ".search .close", function () {
        jQuery('.search').removeClass('search-open');
    });

    //loading page
    // if (jQuery("#loading-page").length > 0) {
    //     jQuery('body').addClass('pageloader');
    //       setTimeout(function() {
    //         jQuery('body').addClass('pageloaded');
    //         jQuery('body').removeClass('pageloader');
    //         jQuery('#loading-page').fadeOut('slow');
    //   }, 2000);
    // }


    //owl rtl and ltr
    mydir = jQuery("html").attr("dir");
    mylang = jQuery("html").attr("lang");
    if (mydir == 'rtl' || mylang == 'ar') {
        rtlVal = true
    }
    else {
        rtlVal = false
    }


    //home page banner close remove iframe
    jQuery(document).on('click', '.close-video', function () {
        jQuery(".banner-owl .item").removeClass("hide-caption");
        var iframe = jQuery(".banner-owl .slider-img").find("iframe");
        player.on('ready', function () {
            iframe[0].contentWindow.postMessage({
                "_method": "get_muted",
                "player": "mango_player",
                "parameter": "",
            }, '*');
        });
        iframe.remove();
    });

    var iframe = "";
    //Add click event on mute button.
    $(".slider-img").find('.mute').click(function (e) {
        var t = jQuery(this);
        var mute = t.attr('data-mute');
        if (mute == '1') {
            iframe[0].contentWindow.postMessage({
                "_method": "mute",
                "player": "mango_player",
                "parameter": "",
            }, '*');
            //player.mute();
            t.attr('data-mute', 0);
            console.log("mute is" + mute);
            t.addClass("unmute");
        } else {
            iframe[0].contentWindow.postMessage({
                "_method": "unmute",
                "player": "mango_player",
                "parameter": "",
            }, '*');
            //player.unmute();
            console.log("mute is" + mute);

            t.attr('data-mute', 1);
            t.removeClass("unmute");
        }
    });

    function moveSlider(e) {
        jQuery('.banner-owl .item').removeClass('hide-caption');
        var playerObj = "";
                jQuery('iframe[src*="player.mgmlcdn.com"]').each(function () {
                    var player = new playerjs.Player(jQuery(this)[0]);
                    var playerIframe = document.getElementById('video_trailer');

                    playerObj = jQuery(this);

                    //we need to detect if the player by default is muted.
                    player.on('ready', function () {
                        oldiframe[0].contentWindow.postMessage({
                            "_method": "mute",
                            "player": "mango_player",
                            "parameter": "",
                        }, '*');
                    });
                });
        jQuery('.slider-img').find( '.mute' ).attr( 'data-mute', 0 );
        jQuery('.slider-img').find('iframe').remove();
        var current = e.item.index;
        setTimeout(function () {
            jQuery('.banner-owl .item').removeClass('hide-caption');
            jQuery('.slider-img').find('iframe').remove();
            iframe_src = jQuery(e.target).find(".owl-item").eq(current).find('.slider-img').attr('data-embed-url');

            if (iframe_src != "" && typeof iframe_src != "undefined") {
                console.log(iframe_src);
                jQuery(e.target).find(".owl-item").eq(current).find('.slider-img').append('<iframe id="video_trailer" src="' + iframe_src + '" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe>');
                jQuery(e.target).find(".owl-item").eq(current).find('.item').addClass('hide-caption');

                iframe = jQuery(".banner-owl .slider-img").find("iframe");
                var playerObj = "";
                jQuery('iframe[src*="player.mgmlcdn.com"]').each(function () {
                    var player = new playerjs.Player(jQuery(this)[0]);
                    var playerIframe = document.getElementById('video_trailer');

                    playerObj = jQuery(this);

                    //we need to detect if the player by default is muted.
                    player.on('ready', function () {
                        iframe[0].contentWindow.postMessage({
                            "_method": "mute",
                            "player": "mango_player",
                            "parameter": "",
                        }, '*');
                    });
                    player.on('ended', function () {
                        console.log('ended');
                        jQuery(".banner-owl .item").removeClass("hide-caption");
                        iframe.remove();
                        //jQuery('.banner-owl').trigger('play.owl.autoplay',[5000]);
                    });
                });
            }
        },10);
    }

    // Banner SLider Js
    jQuery('.banner-owl').on('initialized.owl.carousel', function (e) {
        var elm = "";
        var elm = jQuery(e.target).find(".owl-item").eq(e.item.index).find('.slider-img').attr('data-embed-url');
        moveSlider(e);
        console.log(elm);
        if (elm != "") {
            
            jQuery('.banner-owl').trigger('stop.owl.autoplay');
            setTimeout(function () { jQuery('.banner-owl').trigger('play.owl.autoplay'); jQuery('.banner-owl').trigger('play.owl.autoplayHoverPause',true)
                jQuery('.banner-owl .item').removeClass('hide-caption');
                jQuery('.slider-img').find('iframe').remove();
            }, 20100);
        }
        else {
            jQuery('.banner-owl').trigger('play.owl.autoplay', 7100);
            jQuery('.banner-owl').trigger('play.owl.autoplayHoverPause',true);
        }
    })

    //home page banner
    jQuery('.banner-owl').owlCarousel({
        rtl: rtlVal,
        loop: true,
        margin: 0,
        nav: true,
        autoHeight: true,
        autoplayHoverPause:true,
        // autoplay:true,
        // autoplayTimeout:7000,
        items: 1,
        dots: false,
    });

    jQuery('.banner-owl').on('changed.owl.carousel', function (e) {
        var elm = "";
        var elm = jQuery(e.target).find(".owl-item").eq(e.item.index).find('.slider-img').attr('data-embed-url');
        // console.log(elm);
        moveSlider(e);
        if (elm != "") {

            jQuery('.banner-owl').trigger('stop.owl.autoplay');
            setTimeout(function () { jQuery('.banner-owl').trigger('play.owl.autoplay'); jQuery('.banner-owl').trigger('play.owl.autoplayHoverPause',true)
                jQuery('.banner-owl .item').removeClass('hide-caption');
                jQuery('.slider-img').find('iframe').remove();
            }, 20100);
        }
        else {
            jQuery('.banner-owl').trigger('play.owl.autoplay', 7100);
            jQuery('.banner-owl').trigger('play.owl.autoplayHoverPause',true);
        }

    })

    //show-filter
    jQuery(".filter-button").click(function () {
        var value = jQuery(this).attr('data-filter');
        if (value == "all") {
            jQuery('.filter').show('1000');
        } else {
            jQuery(".filter").not('.' + value).hide('3000');
            jQuery('.filter').filter('.' + value).show('3000');

        }
        jQuery(".filter-button").removeClass("active")
        jQuery(this).addClass("active");
    });


    //articalslider
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 3; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        rtl: rtlVal,
        items: 1,
        margin: 15,
        slideSpeed: 2000,
        nav: true,
        autoplay: false,
        dots: false,
        loop: false,
        responsiveRefreshRate: 200,
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            rtl: rtlVal,
            items: slidesPerPage,
            dots: false,
            nav: false,
            margin: 15,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        var current = el.item.index;

        //if you disable loop you have to comment this block
        //var count = el.item.count-1;
        //var current = Math.round(el.item.index - (el.item.count/2) - .5);

        // if(current < 0) {
        //   current = count;
        //  }
        //  if(current > count) {
        // current = 0;
        //}

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });


    // tabbed content
    jQuery(".tab_container .tab_content").hide();
    jQuery(".tab_container .tab_content:first").show();

    /* if in tab mode */
    jQuery(".tab ul.tabs li").click(function () {

        jQuery(".tab_container .tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery("#" + activeTab + ".tab ul.inner-tabs li:first").trigger('click');

        jQuery(".tab ul.tabs li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery(".tab .tab_drawer_heading").removeClass("active");
        jQuery(".tab .tab_drawer_heading[rel^='" + activeTab + "']").addClass("active");

    });

    // tabbed content
    jQuery(".option-tab").hide();
    jQuery(".option-tab:first").show();

    jQuery(".selection ul.tabs li").click(function () {

        jQuery(".selection .option-tab").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery("#" + activeTab + ".selection ul.inner-tab li:first").trigger('click');

        jQuery(".selection ul.tabs li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery(".selection .tab_drawer_heading").removeClass("active");
        jQuery(".selection .tab_drawer_heading[rel^='" + activeTab + "']").addClass("active");

    });

    //popup
    jQuery(document).on("click", "[data-media-popup]", function () {
        console.log("Triggering...");
        let popup_id = jQuery(this).data("media-popup");
        if (jQuery(`#${popup_id}`).length) {
            jQuery(".media-kit-popup").addClass("show");
            jQuery(`.popupwrap`).removeClass("show-popup");
            jQuery(`#${popup_id}`).addClass("show-popup");
        }
    });

    jQuery(document).on("click", ".popupwrap .close", function () {
        jQuery(".media-kit-popup").removeClass("show");
        jQuery(`.popupwrap`).removeClass("show-popup");
    });


    //career popup
    jQuery(document).on("click", ".caree-popup-click", function () {
        jQuery('body').addClass("show-popup");
    });
    jQuery(document).on("click", ".career-popup .close", function () {
        jQuery('body').removeClass("show-popup");
    });

    //violation popup
    jQuery(document).on("click", ".violation-popup .close", function () {
        jQuery('body').addClass("hide-popup");
    });



    // tabbed content
    // jQuery(".bouble_tab_container .b_tab_content").hide();
    // jQuery(".bouble_tab_container .b_tab_content:first").show();

    // /* if in tab mode */
    // jQuery(".bouble-bribe-tab .tab ul.tabs li").click(function() {

    //     jQuery(".bouble_tab_container .tab_content").hide();
    //     var activeTab = jQuery(this).attr("rel");
    //     jQuery("#" + activeTab).fadeIn();


    //     jQuery("#" + activeTab + "ul.inner-tabs li:first").trigger('click');

    //     jQuery(".bouble-bribe-tab .tab ul.tabs li").removeClass("active");
    //     jQuery(this).addClass("active");

    //     jQuery(".bouble-bribe-tab .tab .tab_drawer_heading").removeClass("active");
    //     jQuery(".bouble-bribe-tab .tab .tab_drawer_heading[rel^='" + activeTab + "']").addClass("active");

    // });    


    // Brand Channel Page Js Start 
    //inner tabbed content
    // jQuery(".inner_tab_content").hide();
    // jQuery(".inner_tab_content:first").show();

    // /* if in tab mode */
    // jQuery("ul.inner-tabs li").click(function() {

    //     jQuery(".inner_tab_content").hide();
    //     jQuery(".bouble_tab_container .tab_content:first").show();
    //     var inneractiveTab = jQuery(this).attr("rel");
    //     jQuery("#" + inneractiveTab).fadeIn();

    //     jQuery("ul.inner-tabs li").removeClass("inner-active");
    //     jQuery(this).addClass("inner-active");

    //     jQuery(".tab_drawer_heading").removeClass("inner_d_active");
    //     jQuery(".tab_drawer_heading[rel^='" + inneractiveTab + "']").addClass("inner_d_active");

    // });

    // tabbed content
    jQuery(".godown_tab_container > .tab_content").hide();
    jQuery(".godown_tab_container > .tab_content:first").show();

    // if in tab mode 
    jQuery(".godown-tab > .tab ul.tabs li").click(function () {

        jQuery(".godown_tab_container > .tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery("#" + activeTab + ".godown-tab > .tab ul.inner-tabs li:first").trigger('click');

        jQuery(".godown-tab > .tab ul.tabs li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery(".godown-tab .tab .tab_drawer_heading").removeClass("active");
        jQuery(".godown-tab .tab .tab_drawer_heading[rel^='" + activeTab + "']").addClass("active");

    });

    // tabbed content
    jQuery(".bouble_tab_container > .tab_content").hide();
    jQuery(".bouble_tab_container > .tab_content:first").show();

    // if in tab mode 
    jQuery(".bouble-bribe-tab > .tab ul.tabs li").click(function () {

        jQuery(".bouble_tab_container > .tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();


        jQuery("#" + activeTab + ".bouble-bribe-tab > .tab ul.inner-tabs li:first").trigger('click');

        jQuery(".bouble-bribe-tab > .tab ul.tabs li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery(".bouble-bribe-tab > .tab .tab_drawer_heading").removeClass("active");
        jQuery(".bouble-bribe-tab > .tab .tab_drawer_heading[rel^='" + activeTab + "']").addClass("active");

    });


    jQuery('.godown-tab > .tab ul.tabs li:first').addClass('in_tab_active');
    jQuery('.godown-tab > .tab ul.tabs li').click(function () {
        jQuery(".tab ul.tabs li").removeClass("in_tab_active");
        jQuery(this).addClass("in_tab_active");
    });

    jQuery('.bouble-bribe-tab > .tab ul.tabs li:first').addClass('out_tab_active');
    jQuery('.bouble-bribe-tab > .tab ul.tabs li').click(function () {
        jQuery(".tab ul.tabs li").removeClass("out_tab_active");
        jQuery(this).addClass("out_tab_active");
    });

    jQuery('.sport-btn-type > ul > li').click(function () {
        jQuery(".sport-btn-type > ul > li").removeClass("active");
        jQuery(this).addClass("active");
    });

    // Brank Channel Page Js End 

    //Brand Photos Slidr
    jQuery('.brand-photos-slidr').owlCarousel({
        loop: false,
        rtl: rtlVal,
        margin: 0,
        nav: true,
        items: 1,
        dots: false,
        navText: ["<img src='/Content/Admedia/images/right-arrow.png'/>", "<img src='/Content/Admedia/images/left-arrow.png'/>"],
    });



    //Tv Achala Slider
    var tv_achala_sc_slider = $("#tv_achala_sc_slider");
    var tv_achala_sc_nav = $("#tv_achala_sc_nav");
    var slidesPerPage = 8; //globaly define number of elements per page
    var syncedSecondary = true;

    tv_achala_sc_slider.owlCarousel({
        rtl: rtlVal,
        items: 1,
        margin: 24,
        slideSpeed: 2000,
        nav: true,
        autoplay: false,
        dots: false,
        loop: false,
        responsiveRefreshRate: 200,
        navText: ["<img src='/Content/Admedia/images/right-arrow.png'/>", "<img src='/Content/Admedia/images/left-arrow.png'/>"],
    }).on('changed.owl.carousel', syncPosition_tv_achala);

    tv_achala_sc_nav.on('initialized.owl.carousel', function () {
        tv_achala_sc_nav.find(".owl-item").eq(0).addClass("current");
    })
        .owlCarousel({
            rtl: rtlVal,
            items: slidesPerPage,
            dots: false,
            nav: false,
            margin: 15,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100,
            responsive: {
                0: {
                    items: 4,
                },
                1024: {
                    items: 6,
                },
                1000: {
                    items: slidesPerPage,
                }
            }
        }).on('changed.owl.carousel', syncPosition_tv_achala2);

    function syncPosition_tv_achala(el) {
        //if you set loop to false, you have to restore this next line
        var current = el.item.index;

        //if you disable loop you have to comment this block
        //var count = el.item.count-1;
        //var current = Math.round(el.item.index - (el.item.count/2) - .5);

        // if(current < 0) {
        //   current = count;
        //  }
        //  if(current > count) {
        // current = 0;
        //}

        //end block

        tv_achala_sc_nav
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = tv_achala_sc_nav.find('.owl-item.active').length - 1;
        var start = tv_achala_sc_nav.find('.owl-item.active').first().index();
        var end = tv_achala_sc_nav.find('.owl-item.active').last().index();

        if (current > end) {
            tv_achala_sc_nav.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            tv_achala_sc_nav.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition_tv_achala2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            tv_achala_sc_slider.data('owl.carousel').to(number, 100, true);
        }
    }

    tv_achala_sc_nav.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        tv_achala_sc_slider.data('owl.carousel').to(number, 300, true);
    });

    // Accordion JS
    (function ($) {

        var allPanels = $('.accordion > .accordion-content').hide();
        $('.accordion.active > .accordion-content').show();

        $('.accordion > a').click(function () {
            allPanels.slideUp();
            $('.accordion > a').parents('.accordion').removeClass('active');
            $(this).next().slideDown();
            $(this).parents('.accordion').addClass('active');
            return false;
        });
    })(jQuery);


    jQuery('.happeness-metter input[type="radio"]').click(function () {
        jQuery('.happeness').removeClass('sad-select');
        jQuery('.happeness').removeClass('medium-select');

        if (jQuery("#sad").is(":checked")) {
            jQuery(this).parents('.happeness').addClass('sad-select');

        } else if (jQuery("#medium").is(":checked")) {
            jQuery(this).parents('.happeness').addClass('medium-select');
        }
    });


    jQuery('.feedback-close').click(function () {
        jQuery('.feedback-happeness').removeClass('show-feedbox');
        setTimeout(function(){
           jQuery('.happeness-metter').removeClass('show-thank');
        },500);
    });

    jQuery('.happeness-click').click(function (e) {
        if (jQuery(this).parents(".feedback-happeness").hasClass(".show-feedbox")) {
            jQuery('.feedback-happeness').removeClass('show-feedbox');
            jQuery('.happeness-metter').removeClass('show-thank');
        } else {
            jQuery(this).parents('.feedback-happeness').toggleClass('show-feedbox');
        }
    });

    jQuery('.feedback-submit').click(function () {
        jQuery(this).parents('.happeness-metter').addClass('show-thank');
    });

    jQuery(document).on('click', '.happy #happy', function (e) {
        setTimeout(function () {
            e.preventDefault();
            jQuery('.happeness-metter').addClass('show-thank happyface-thank');
        }, 800);
    });

    jQuery(document).on('click', function (e) {
        if (!jQuery(e.target).parents(".feedback-happeness").length && !jQuery(e.target).hasClass(".show-feedbox")) {
            jQuery('.feedback-happeness').removeClass('show-feedbox');
            setTimeout(function(){
               jQuery('.happeness-metter').removeClass('show-thank');
            },500);
        }
    });



    jQuery('.chat-click').click(function (e) {
        if (jQuery('.chat').hasClass(".show-chat")) {
            jQuery('.chat').removeClass('show-chat');
            jQuery('html').removeClass('no-scroll');
        } else {
            jQuery(this).parents('.chat').toggleClass('show-chat');
            jQuery('html').addClass('no-scroll');
        }
    });
    jQuery(document).on('click', function (e) {
        if (!jQuery(e.target).parents(".show-chat").length && !jQuery(e.target).hasClass(".show-chat")) {
            jQuery('.chat').removeClass('show-chat');
            jQuery('html').removeClass('no-scroll');
        }
    });

    jQuery(document).on("click", ".next-final-click", function () {
        jQuery(this).parents('.content-hub-form').addClass('final-step-done showSubmit-popup');
    });
    jQuery(document).on("click", ".SubmitPopupClose", function () {
        jQuery('.content-hub-form').removeClass('showSubmit-popup');
    });

    

    // our-bran parallex
    var initScrollTop = $(window).scrollTop();

    // Set the image's vertical background position based on the scroll top when the page is loaded.
    $('#our-brand').css({ 'background-position-y': (initScrollTop / 18) + '%' });

    // When the user scrolls...
    $(window).scroll(function () {

        // Find the new scroll top.
        var scrollTop = $(window).scrollTop();

        // Set the new background position.
        $('#our-brand').css({ 'background-position-y': (scrollTop / 18) + '%' });

    });

    //jQuery(document).on("click", ".Content-form .submit .btn ", function () {
    //    jQuery(this).parents('.submit').addClass('show-loader');
    //});  

    var checkWidth = $(document).width();
    if (checkWidth <= 767) {
    jQuery('.brand-listing a, .brand-filter-list a')
        .live('touchstart', function () {
            isScrolling = false;
        })
        .live('touchmove', function (e) {
            isScrolling = true;
        })
        .live('touchend', function (e) {
            if (!isScrolling) {
                window.location = $(this).attr('href');
            }
        });
    }
});
