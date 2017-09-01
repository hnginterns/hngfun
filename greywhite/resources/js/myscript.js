$(document).ready(function() {
    
    /* Sticky Navigation */

    $('.js--section-about').waypoint(function(direction) {
        if (direction == 'down') {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    },{
        offset: '60px;'
    });
    
    
    
    /* SCROLL ON BUTTON */
    
    $('.js').click(function() {
        $('html, body').animate({scrollTop: $('.js--section-contact').offset().top},1000) 
    });
    
    
    /* Mobile Nav */
    $('.js--nav-icon').click(function() {
        var nav = $('.js--main-nav');
        
        var icon = $('.js--nav-icon i');
        nav.slideToggle(200);
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
        }
    });
    
    
    /* NAVIGATION SCROLLING EFFECT */
    
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 300);
            return false;
          }
        }
      });
    });
    
    
    /* ANIMATION ON SCROLL */
    
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn'); 
    }, {
        offset: '50%'
    });
    
    $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated fadeIn'); 
    }, {
        offset: '50%'
    });
    
     $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animated fadeIn'); 
    }, {
        offset: '50%'
    });
    
     $('.js--wp-4').waypoint(function(direction) {
        $('.js--wp-4').addClass('animated fadeIn'); 
    }, {
        offset: '50%'
    });
    
    
    
    
    /* PORTFOLIO EFFECT */
    
    
    
    
    
    
    /* CONTACT FORM MAP */

    
    
    
    
    
    
});