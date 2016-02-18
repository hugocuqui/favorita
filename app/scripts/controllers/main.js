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

    $scope.contato = {};
    $scope.enviado = false;

    var param = function(data) {
            var returnString = '';
            for (var d in data){
                if (data.hasOwnProperty(d)) { returnString += d + '=' + data[d] + '&'; }
            }
            // Remove last ampersand and return
            return returnString.slice( 0, returnString.length - 1 );
      };

    $scope.submitForm = function() {
      var dados = param($scope.contato);
      console.log(dados);
      $http({
          method: 'POST',
          url: 'processForm.php',
          data: dados,
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
      })
      .success( function(data) {
        if ( data.success ) {
          $scope.enviado = true;
          $scope.contato = {};
        } else {
          $scope.error = false;
        }
      })
      .error( function(data){
        console.log("errors: "+data);
      });

    };

  });
