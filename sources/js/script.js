(function() {
  var calculateLayout, delay, end, setBG;

  delay = function(ms, func) {
    return setTimeout(func, ms);
  };

  end = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd';

  calculateLayout = function() {
    var $blockPromo, $blockScroll, $pageContent, heightPromo;
    $('body').removeClass('open');
    $blockPromo = $('.page').elem('block').byMod('promo');
    heightPromo = $(window).height() - parseInt($blockPromo.css('padding-top')) - parseInt($blockPromo.css('padding-bottom'));
    if ($blockPromo.height < heightPromo) {
      $blockPromo.height(heightPromo);
    }
    if (!Modernizr.csscalc) {
      $('.page').width($('body').width() - 240);
    }
    $('.article').elem('image').css({
      height: function() {
        return $(this).width() * 0.87837837837;
      }
    });
    if (!Modernizr.csstransforms) {
      $pageContent = $('.page').elem('block').byMod('promo').find('.page__content');
      $pageContent.css({
        'margin-top': -$pageContent.height() / 2
      }, 'min-height', $(window).height() - parseInt($pageContent.css('padding-top')) - parseInt($pageContent.css('padding-bottom')));
      $('.toolbar').hide();
      $('.promo').find('img').each(function() {
        return $(this).css({
          'margin-left': -$(this).width() / 2 - 60
        });
      });
    }
    if ($(window).width() >= 1024) {
      $('.promos, .promo').height($(window).height());
    } else {
      $('.promos').removeAttr('style');
      $('.promo').each(function() {
        var image;
        image = $(this).css('background-image');
        return $(this).removeAttr('style').css('background-image', image);
      });
    }
    $blockScroll = $('.sidebar');
    if ($(window).width() >= 980) {
      if ($blockScroll.data('perfect-scrollbar')) {
        return $blockScroll.perfectScrollbar('update');
      } else {
        return $blockScroll.perfectScrollbar({
          suppressScrollX: true,
          includePadding: true
        });
      }
    } else {
      return $blockScroll.perfectScrollbar('destroy');
    }
  };

  setBG = function($el) {
    $('#reviews').css('background-color', $el.data('bg'));
    $('.quote__frame').css('border-color', $el.data('border'));
    $('.quote__arrow').find('path#bg').attr('fill', $el.data('bg'));
    return $('.quote__arrow').find('path#arrow').attr('fill', $el.data('border'));
  };

  $(document).ready(function() {
    $('.sidebar .close').click(function(e) {
      return $('body').toggleClass('open');
    });
    $('.quotes').on('init', function(e) {
      return setBG($(e.target).find('.slick-current'));
    }).on('afterChange', function(e) {
      console.log(e.target);
      return setBG($(e.target).find('.slick-current'));
    }).slick({
      infinite: true,
      adaptiveHeight: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<button type="button" class="slick-prev"><img src="/layout/images/left.png"></button>',
      nextArrow: '<button type="button" class="slick-next"><img src="/layout/images/right.png"></button>'
    });
    $('.nav-trigger').click(function(e) {
      $('body').toggleClass('open');
      delay(300, function() {
        if ($('body').hasClass('open')) {
          return $(document).one('click tap touchstart touchmove', function(e) {
            if ($('body').hasClass('open') && $(e.target).parents('.sidebar').length === 0) {
              $('body').removeClass('open');
              return e.preventDefault();
            }
          });
        }
      });
      return e.preventDefault();
    });
    $(window).on('resize', _.debounce(calculateLayout, 300));
    $(window).on('mousewheel', function(e) {
      if ($('body').hasClass('open') && $(e.target).parents('.sidebar').length === 0) {
        e.preventDefault();
        e.stopPropagation();
        return false;
      }
    });
    $('iframe').on('ready', _.debounce(calculateLayout, 300));
    $('a').on('mouseover', function() {
      var href;
      href = $(this).attr('href');
      if (!$(this).hasClass('promo')) {
        return $(this).parent().find("a[href='" + href + "']").addClass("hover");
      }
    }).on('mouseleave', function() {
      var href;
      href = $(this).attr('href');
      return $(this).parent().find("a[href^='" + href + "']").removeClass("hover");
    });
    $('a.button').click(function(e) {
      var $el, top;
      $el = $($(this).attr('href'));
      if ($el.length > 0) {
        top = $el.offset().top;
        if ($(window).width() < 1024) {
          top -= $('.toolbar').height();
        }
        $("html, body").animate({
          scrollTop: top
        }, 300);
        return e.preventDefault();
      }
    });
    $('.promo').hoverIntent({
      sensitivity: 1,
      interval: 10,
      over: function() {
        $(this).parents('.promos').mod('hover', true);
        return $(this).mod('hover', true);
      },
      out: function() {
        $(this).mod('hover', false);
        return $(this).parents('.promos').mod('hover', false);
      }
    });
    return delay(300, function() {
      return calculateLayout();
    });
  });

}).call(this);
