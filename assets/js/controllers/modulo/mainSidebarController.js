define(function () {

    'use strict';

    function ctrl(
            $scope,
            $http,
            alertify
            ) {

        $scope.logoff = function () {
            $http.post('usuario/logoff')
                    .then(function (d) { //success
                        location.reload();
                    }, function (d) { //error
                        alertify.error('ocorreu um erro ao tentar sair do sistema, reinicie seu navegador para forçar o logoff');
                    });
        };
    }

    ctrl.$inject = [
        '$scope',
        '$http',
        'alertify'
    ];

    return ctrl;

});