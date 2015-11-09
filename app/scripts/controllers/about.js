'use strict';

/**
 * @ngdoc function
 * @name favoritaApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the favoritaApp
 */
angular.module('favoritaApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
