define(function () {

    'use strict';
    function ctrl(
            $scope,
            $http,
            $timeout
            ) {

        //lista de chamados
        $scope.listaChamados = [];

    }

    ctrl.$inject = [
        '$scope',
        '$http',
        '$timeout'
    ];

    return ctrl;

});