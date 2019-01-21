var header_height = 60;

$(document).ready(function() {

    // deleay rotating homepage text appear
    setTimeout(function() {
      $('#home-hero .inner').animate({opacity: '1'});
    }, 1000);

    // Hamburger menu animations
    $('button.hamburger').on('click', function() {
        $(this).toggleClass('is-active');

        currentPosition = $('#nav-wrap nav').css('right');
        duration = 250;
        destPosition = '-100%';

        if(currentPosition != '0px') {
          destPosition = '0px';
        }

        $('#nav-wrap nav').stop().animate({
          right: destPosition
        }, duration);
    });

    // Footer input border animations
    $('footer input[type="text"], footer textarea').on('focus', function() {
        $(this).parent().addClass('focus');
    });
    $('footer input[type="text"], footer textarea').on('blur', function() {
        $(this).parent().removeClass('focus');
    });

    // Homepage scroll arrow
    $('.about-scroll').on('click', function() {
      //alert('test');
      $('html, body').animate({
          scrollTop: ($(".twelve-hours").offset().top - header_height)
      }, 1000);
    });

    // Capabilities scroll arrow
    $('.capabilities-scroll').on('click', function() {
      //alert('test');
      $('html, body').animate({
          scrollTop: ($("#capabilities").offset().top - header_height)
      }, 1000);
    });

    // Verticals arrow scroll
    $('#vertical .arrow').on('click', function() {
      //alert('test');
      $('html, body').animate({
          scrollTop: ($(".we-are").offset().top - header_height)
      }, 1000);
    });

    // Talk with us arrow scrolls
    $('.talk-with-us').on('click', function() {
      //alert('test');
      $('html, body').animate({
          scrollTop: ($("#contact-form").offset().top - header_height)
      }, 1000);
    });

    // Case Study arrow scroll
    $('.page-header.case-study').on('click', function() {
      //alert('test');
      $('html, body').animate({
          scrollTop: ($("#case-study").offset().top - header_height)
      }, 1000);
    });

    // Rotate Words on Homepage
    $('.words').rotateWords({
        fadeSpeed:500,
        pauseSpeed:3000}
    );

    // Generic, reusable lightbox close event
    $('.lightbox-close').on('click', function() {
        $.colorbox.close();
    });

    // Team Member lightbox
    $('.person-lightbox').colorbox({
        width: 'auto',
        height: 'auto',
        closeButton: false,
        onOpen: function() {
            $("#team-member").css("opacity", 0);
        },
        onComplete: function() {
            $.colorbox.resize();
            $("#team-member").css("opacity", 1);
        }
    });

    // About Video lightbox
    $('.about-video-btn').colorbox({
        inline: true,
        width: '90%',
        height: '90%',
        closeButton: false
    });

    // Preload home vertical background images
    $('#home-hero .bg-image').each(function() {
      var bg = $(this).css("background-image");
      if (bg != 'none') {
        bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
        img = new Image();
        img.src = bg;
        console.log('Preloading Image: ' + bg);
      }
    });

    // Home verticals hovers
    $('.home-verticals li a').hover(function() {
      var image = $(this).attr('data-image');
      $('#home-hero .bg-image:not(.'+image+')').animate({opacity: 0});
      $('#home-hero .'+image).animate({opacity: 1});
    }, function() {

    });

    window.sr = ScrollReveal();
    sr.reveal('.logos .row');

    $(window).on('scroll', function() {
        if($(window).scrollTop() > 300) {
            $('.blue-bar').addClass('scrolled');
            $('#logo').addClass('scrolled');
            $('#menu-toggle').addClass('scrolled');
        } else {
            $('.blue-bar').removeClass('scrolled');
            $('#logo').removeClass('scrolled');
            $('#menu-toggle').removeClass('scrolled');
        }
    });

    // Case Study Gallery lightbox
    $('.the-gallery a').colorbox({rel: 'gallery-img'});

});
