// Code goes here

angular.module('myApp', ['ngMaterial', 'jkAngularCarousel'])

.controller('MyCtrl', function($scope) {
    $scope.dataArray = [
      {
        src: 'Data/Bones.jpg'
      },
      {
        src: 'Data/Bones1.jpg'
      },
      {
        src: 'Data/Bones2.png'
      }
    ];
});