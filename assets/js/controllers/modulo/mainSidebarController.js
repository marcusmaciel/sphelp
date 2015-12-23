define(function () {

    'use strict';

    function ctrl(
            $scope,
            $http,
            alertify
            ) {

        //mensagens de erro relacionadas ao componente
        var msg = {
            erroLogoff : 'ocorreu um erro ao tentar sair do sistema, reinicie seu navegador para forçar o logoff',
            erroMenu:'erro ao acessar o menu. tente mais tarde'
        };
        
        //content_perfil
        $scope.goHome = function () {
            var data = {
                content: 'content_perfil'
            };
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
            }, function (response) { //error
                alertify.error(msg.erroMenu);
            });
        };

        //content_configuracao
        $scope.goConfiguracao = function () {
            var data = {
                content: 'content_configuracao'
            };
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
            }, function (response) { //error
                alertify.error(msg.erroMenu);
            });
        };

        //content_cliente
        $scope.goCliente = function () {
            var data = {
                content: 'content_cliente'
            };
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
            }, function (response) { //error
                alertify.error(msg.erroMenu);
            });
        };

        //content_usuario
        $scope.goUsuario = function () {
            var data = {
                content: 'content_usuario'
            };
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
            }, function (response) { //error
                alertify.error(msg.erroMenu);
            });
        };

        //content_relatorio
        $scope.goRelatorio = function () {
            var data = {
                content: 'content_relatorio'
            };
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
            }, function (response) { //error
                alertify.error(msg.erroMenu);
            });
        };

        //usuario_logoff
        $scope.logoff = function () {
            $http.post('usuario/logoff').then(function (response) { //success
                location.reload();
            }, function (response) { //error
                alertify.error(msg.erroLogoff);
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