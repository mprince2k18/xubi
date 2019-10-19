(function($) {
	"use strict";

  // ______________ PAGE LOADING
  	$(window).on("load", function(e) {
  		$("#global-loader").fadeOut("fast");
  	});

// Swiper

    var swiper = new Swiper('.blog-slider', {
        spaceBetween: 30
        , effect: 'fade'
        , loop: false
        , mousewheel: {
            invert: false
        , }
        , // autoHeight: true,
        pagination: {
            el: '.blog-slider__pagination'
            , clickable: true
        , }
    });


// scroll

    $(function() {
      var header = $(".start-style");
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 10) {
          header.removeClass('start-style').addClass("scroll-on");
        } else {
          header.removeClass("scroll-on").addClass('start-style');
        }
      });
    });

    //Animation

    $(document).ready(function() {
      $('body.hero-anime').removeClass('hero-anime');
    });

    //Menu On Hover

    $('body').on('mouseenter mouseleave','.nav-item',function(e){
        if ($(window).width() > 750) {
          var _d=$(e.target).closest('.nav-item');_d.addClass('show');
          setTimeout(function(){
          _d[_d.is(':hover')?'addClass':'removeClass']('show');
          },1);
        }
    });



    class Menu {
      constructor(settings) {
        this.menuNode = settings.menuNode;
      }

      toggleMenuState(className) {
        if (typeof className !== 'string' || className.length === 0) {
          return console.log('you did not give the class for toggleState function');
        }
        return  this.menuNode.classList.toggle(className);
      }
    }

    const jsMenuNode = document.querySelector('.mobile-menu');
    const demoMenu = new Menu ({
      menuNode: jsMenuNode
    });

    function callMenuToggle(event) {
      demoMenu.toggleMenuState('menu_activated');
    }

    jsMenuNode.querySelector('.menu__hamburger').addEventListener('click', callMenuToggle);


})(jQuery);
