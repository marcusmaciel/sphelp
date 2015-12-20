define(function () {

    'use strict';
    function ctrl(
            $scope,
            $http
            ) {

        //mensagem sobre o usuário
        $scope.callbackMessage = null;
        $scope.listarUsuarios = function () {

            $http({
                method: 'POST',
                url: 'usuario/listarUsuarios',
            }).then(function (response) { //success
                console.log(response);
            });
        };
        
    }

    ctrl.$inject = [
        '$scope',
        '$http'
    ];

    return ctrl;

});