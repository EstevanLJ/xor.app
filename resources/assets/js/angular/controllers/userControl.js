function userControl ($scope, $http){

    $scope.teste = 'Angular is ALIVE!';

}

angular.module('xorApp').controller('user_control', userControl);