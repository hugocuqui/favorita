"use strict";angular.module("favoritaApp",["ngAnimate","ngCookies","ngResource","ngRoute","ngSanitize","ngTouch","ngMessages"]).config(["$routeProvider","$locationProvider",function(a,b){a.when("/",{templateUrl:"views/index.html",controller:"MainCtrl"}).when("/quem_somos",{templateUrl:"views/index.html",controller:"MainCtrl"}).otherwise({redirectTo:"/"}),b.html5Mode(!0)}]),angular.module("favoritaApp").controller("MainCtrl",["$scope","$http",function(a,b){a.enviado=!1;var c=function(a){var b="";for(var c in a)a.hasOwnProperty(c)&&(b+=c+"="+a[c]+"&");return b.slice(0,b.length-1)};a.enviarEmail=function(d){b({method:"POST",url:"processForm.php",data:c(d),headers:{"Content-Type":"application/x-www-form-urlencoded"}}).success(function(b){b.success?a.enviado=!0:a.error=!0})}}]),angular.module("favoritaApp").controller("AboutCtrl",["$scope",function(a){a.awesomeThings=["HTML5 Boilerplate","AngularJS","Karma"]}]),$(function(){$("#carousel").carousel({interval:5e3});var a,b=$("#js-navbar-collapse"),c=b.outerHeight()+15,d=b.find("a"),e=d.map(function(){var a=$($(this).attr("data-target"));return a.length?a:void 0});$("a").click(function(a){var b=$(this).attr("data-target");if(b)var d="#"===b?0:$(b).offset().top-c+1;$(this).blur(),$("html, body").stop().animate({scrollTop:d},500),a.preventDefault()}),$(window).scroll(function(){var b=$(this).scrollTop()+c;$(window).width()>"767"&&($(this).scrollTop()>3*c?$(".scroll-only").css("visibility","visible"):$(".scroll-only").css("visibility","hidden")),$(this).scrollTop()>$("#quem_somos").offset().top-100?($(".gallery-small img.animated").eq(0).removeClass("fadeOutLeft").addClass("fadeInLeft"),$(".gallery-small img.animated").eq(1).removeClass("fadeOut").addClass("fadeIn"),$(".gallery-small img.animated").eq(2).removeClass("fadeOutRight").addClass("fadeInRight")):($(".gallery-small img.animated").eq(0).addClass("fadeOutLeft").removeClass("fadeInLeft"),$(".gallery-small img.animated").eq(1).addClass("fadeOut").removeClass("fadeIn"),$(".gallery-small img.animated").eq(2).addClass("fadeOutRight").removeClass("fadeInRight")),$(this).scrollTop()>$("#profissionais").offset().top-300?($(".doc div.animated").eq(0).removeClass("fadeOutLeft").addClass("fadeInLeft"),$(".doc div.animated").eq(1).removeClass("fadeOutRight").addClass("fadeInRight")):($(".doc div.animated").eq(0).addClass("fadeOutLeft").removeClass("fadeInLeft"),$(".doc div.animated").eq(1).addClass("fadeOutRight").removeClass("fadeInRight"));var f=e.map(function(){return $(this).offset().top<b?this:void 0});f=f[f.length-1];var g=f&&f.length?f[0].id:"";a!==g&&(a=g,d.blur().parent().removeClass("active").end().filter("[data-target=#"+g+"]").parent().addClass("active"))}),$("#accordion > li").hover(function(){g($(this)),f($(this))},function(){h($(this))}),$("#accordion").hover(function(){$("#accordion").removeClass("centered");$("#accordion > li").eq(3)},function(){$("#accordion").addClass("centered")});var f=function(a){var b=a;b.stop(!0,!1).animate({width:$(window).width()-150},1200),$(".description").stop(!0,!1).show(),b.find(".accordion>a").show(),b.removeClass("bg-noimg"),b.find(".heading").removeClass("vertical-text")},g=function(a){var b=a;b.siblings().stop().animate({width:"50px"},1200),$(".description, .accordion>a").stop(!0,!0).hide(),b.siblings().addClass("bg-noimg"),b.siblings().find(".heading").addClass("vertical-text")},h=function(){$("#accordion > li").stop().animate({width:"270px"},1200),$(".description").stop(!0,!1).fadeOut(1200),$(".accordion>a").stop(!0,!1).show(),$("#accordion > li").removeClass("bg-noimg"),$(".heading").removeClass("vertical-text")},i=function(a){return 11===a.replace(/\D/g,"").length?"(00) 00000-0000":"(00) 0000-00009"},j={onKeyPress:function(a,b,c,d){c.mask(i.apply({},arguments),d)}};$(".phone_with_ddd").mask(i,j)});