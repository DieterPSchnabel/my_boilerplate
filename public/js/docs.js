/*
 * Documentation JS script
 */
$(function () {
  var slideToTop = $("<div />");
  slideToTop.html('<i class="fa fa-chevron-up"></i>');
  slideToTop.css({
    position: 'fixed',
    bottom: '20px',
    right: '25px',
    width: '40px',
    height: '40px',
    color: '#eee',
    'font-size': '',
    'line-height': '40px',
    'text-align': 'center',
    'background-color': '#222d32',
    cursor: 'pointer',
    'border-radius': '5px',
    'z-index': '99999',
    opacity: '.4',
    'display': 'none',
    'transition' : 'opacity .4s ease-in-out'
  });
  slideToTop.on('mouseover', function () {
    $(this).css('opacity', '.7');
  });
  slideToTop.on('mouseout', function () {
    $(this).css('opacity', '.4');
  });
  $('.wrapper').append(slideToTop);
  $(window).scroll(function () {
    if ($(window).scrollTop() >= 100) {
      if (!$(slideToTop).is(':visible')) {
        $(slideToTop).fadeIn(500);
      }
    } else {
      $(slideToTop).fadeOut(500);
    }
  });
  $(slideToTop).click(function () {
    $("body").animate({
      scrollTop: 0
    }, 500);
  });
  $(".sidebar-menu li:not(.treeview) a").click(function () {
    var $this = $(this);
    var target = $this.attr("href");
    if (typeof target === 'string') {
      $("body").animate({
        scrollTop: ($(target).offset().top) + "px"
      }, 500);
    }
  });
  //Skin switcher
  var current_skin = "skin-blue";
  $('#layout-skins-list [data-skin]').click(function(e) {
    e.preventDefault();
    var skinName = $(this).data('skin');
    $('body').removeClass(current_skin);
    $('body').addClass(skinName);
    current_skin = skinName;
  });
});
