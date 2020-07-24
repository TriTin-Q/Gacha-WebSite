// Code goes here

angular.module('myApp', ['ngMaterial', 'jkAngularCarousel'])

.controller('MyCtrl', function($scope) {
    $scope.dataArray = [
      {
        src: 'Data/Girls_Background.png'
      },
      {
        src: 'Data/Fight.jpg'
      },
      {
        src: 'Data/Join-Us.jpg'
      }
    ];
});