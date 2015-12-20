define(function () {

    'use strict';
    function ctrl(
            $scope,
            $http
            ) {

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