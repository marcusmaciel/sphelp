define(function () {

    'use strict';

    function ctrl(
            $scope,
            $http,
            alertify
            ) {

        //desloga o usuário do sistema
        $scope.logoff = function () {
            $http.post('usuario/logoff').then(function (response) { //success
                location.reload();
            }, function (response) { //error
                alertify.error('ocorreu um erro ao tentar sair do sistema, reinicie seu navegador para forçar o logoff');
            });
        };

        //vai para a página inicial
        $scope.goHome = function () {
            var data = {
                content: 'content_cliente'
            };
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
            }, function (response) { //error
                console.log(response.data);
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