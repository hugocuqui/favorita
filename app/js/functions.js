
$(function(){
  'use strict';

  //---------------------------[ Banner Top ]---------------------------

  $('#carousel').carousel({
    interval: 5000
  });

  //---------------------------[ Menu Top ]---------------------------

  var lastId,
      topMenu = $("#js-navbar-collapse"),
      topMenuHeight = topMenu.outerHeight()+15,
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("data-target"));
        if (item.length) { return item; }
      });

  // Bind click handler to menu items
  // so we can get a fancy scroll animation
  $('a').click(function(e){
    var href = $(this).attr("data-target");

    if(href)
      var offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;

    $(this).blur();

    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 500);
    e.preventDefault();
  });

  // Bind to scroll
  $(window).scroll(function(){

     // Get container scroll position
     var fromTop = $(this).scrollTop()+topMenuHeight;

     //visibility class
    if($(window).width() > '767'){
       if($(this).scrollTop() > topMenuHeight*3){
         $('.scroll-only').css('visibility','visible');
       } else {
         $('.scroll-only').css('visibility','hidden');
       }
    }

     //animated
     if($(this).scrollTop() > (($('#quem_somos').offset().top) - 100) ){
       $('.gallery-small img.animated').eq(0).removeClass('fadeOutLeft').addClass('fadeInLeft');
       $('.gallery-small img.animated').eq(1).removeClass('fadeOut').addClass('fadeIn');
       $('.gallery-small img.animated').eq(2).removeClass('fadeOutRight').addClass('fadeInRight');
     } else{
       $('.gallery-small img.animated').eq(0).addClass('fadeOutLeft').removeClass('fadeInLeft');
       $('.gallery-small img.animated').eq(1).addClass('fadeOut').removeClass('fadeIn');
       $('.gallery-small img.animated').eq(2).addClass('fadeOutRight').removeClass('fadeInRight');
     }
     //animated
     if($(this).scrollTop() > (($('#profissionais').offset().top) - 300) ){
       $('.doc div.animated').eq(0).removeClass('fadeOutLeft').addClass('fadeInLeft');
       $('.doc div.animated').eq(1).removeClass('fadeOutRight').addClass('fadeInRight');
     } else{
       $('.doc div.animated').eq(0).addClass('fadeOutLeft').removeClass('fadeInLeft');
       $('.doc div.animated').eq(1).addClass('fadeOutRight').removeClass('fadeInRight');
     }

     // Get id of current scroll item
     var cur = scrollItems.map(function(){
       if ($(this).offset().top < fromTop)
         return this;
     });

     // Get the id of the current element
     cur = cur[cur.length-1];
     var id = cur && cur.length ? cur[0].id : "";

     if (lastId !== id) {
         lastId = id;

         // Set/remove active class
         menuItems
           .blur().parent().removeClass("active")
           .end().filter("[data-target=#"+id+"]").parent().addClass("active");
     }
  });

  //---------------------------[ Accordion Horizon ]---------------------------

  $('#accordion > li').hover(
      function () {
        closed( $(this) );
        opened( $(this) );
      },
      function () {
        normal( $(this) );
      }
  );

  $('#accordion').hover(
    function () {
      $('#accordion').removeClass('centered');
      var $this = $('#accordion > li').eq(3);
      //$this.stop(true,true).animate({ 'width' : ($(window).width() - 150) },1200);

      //$this.find('.accordion>a').fadeIn();
      //$this.removeClass('bg-noimg');
      //$this.find('.heading').removeClass('vertical-text');
    },
    function () {
      $('#accordion').addClass('centered');
    }
  );


  var opened = function(elem){
      var $this = elem;
      $this.stop(true,false).animate({ 'width' : ($(window).width() - 150) },1200);
      $('.description').stop(true,false).show();
      $this.find('.accordion>a').show();
      $this.removeClass('bg-noimg');
      $this.find('.heading').removeClass('vertical-text');
  }

  var closed = function(elem){
      var $this = elem;
      $this.siblings().stop().animate({'width':'50px'}, 1200);
      $('.description, .accordion>a').stop(true,true).hide();
      $this.siblings().addClass('bg-noimg');
      $this.siblings().find('.heading').addClass('vertical-text');
  }

  var normal = function(){
    $('#accordion > li').stop().animate({'width':'270px'}, 1200);
    $('.description').stop(true,false).fadeOut(1200);
    $('.accordion>a').stop(true,false).show();
    $('#accordion > li').removeClass('bg-noimg');
    $('.heading').removeClass('vertical-text');
  }

  //---------------------------[ Accordion Horizon ]---------------------------

  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
  };

  $('.phone_with_ddd').mask(SPMaskBehavior, spOptions);




});
