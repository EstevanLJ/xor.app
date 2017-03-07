function homeController ($scope, $http, $timeout){

    $scope.count = 1;

    $scope.iniciar = () => {
        console.log('homeController carregado!');
        $scope.contador();
    }

    $scope.contador = () => {
        $timeout(() => {
            $scope.count++;
            $scope.contador();
        }, 500);
    }

}

angular.module('xorApp')
       .controller('home_controller', homeController);