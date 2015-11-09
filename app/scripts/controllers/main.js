'use strict';

/**
 * @ngdoc function
 * @name favoritaApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the favoritaApp
 */
angular.module('favoritaApp')
  .controller('MainCtrl', function ($scope, $http) {

    $scope.enviado = false;

    var param = function(data) {
            var returnString = '';
            for (var d in data){
                if (data.hasOwnProperty(d)) { returnString += d + '=' + data[d] + '&'; }
            }
            // Remove last ampersand and return
            return returnString.slice( 0, returnString.length - 1 );
      };

    $scope.enviarEmail = function( contato ) {

      $http({
          method: 'POST',
          url: 'processForm.php',   
          data: param(contato),
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
      })
      .success( function(data) {
        if ( data.success ) {
          $scope.enviado = true;
        } else {
          $scope.error = true;
        }
      });

    };

  });
