'use strict';

/**
 * @ngdoc overview
 * @name favoritaApp
 * @description
 * # favoritaApp
 *
 * Main module of the application.
 */
angular
  .module('favoritaApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch',
    'ngMessages'
  ])
  .config(function ($routeProvider, $locationProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/index.html',
        controller: 'MainCtrl'
      })
      // .when('/quem_somos', {
      //   templateUrl: 'views/index.html',
      //   controller: 'MainCtrl'
      // })
      // .when('/tratamento', {
      //   templateUrl: 'views/main.html#tratamento',
      //   controller: 'MainCtrl'
      // })
      // .when('/profissionais', {
      //   templateUrl: 'views/main.html#profissionais',
      //   controller: 'MainCtrl'
      // })
      // .when('/contato', {
      //   templateUrl: 'views/main.html#contato',
      //   controller: 'MainCtrl'
      // })
      .otherwise({
        redirectTo: '/'
      });

      // use the HTML5 History API
      $locationProvider.html5Mode(true);
  });
