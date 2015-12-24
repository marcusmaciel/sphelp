define(function () {

    'use strict';

    function ctrl(
            $scope,
            $http,
            alertify
            ) {

        //loading
        $scope.loading = '';

        //mensagens de erro relacionadas ao componente
        var msg = {
            erroLogoff: 'ocorreu um erro ao tentar sair do sistema, reinicie seu navegador para forçar o logoff',
            erroMenu: 'ocorreu um erro ao acessar este menu, verifique se há conexão com a internet e tente novamente.'
        };

        //content_perfil
        $scope.goHome = function () {
            $scope.loading = 'home';
            var data = {
                content: 'content_perfil'
            };
            $http.post('page', data).then(function (response) { //success
                $scope.$digest(function () {
                    $('.content-wrapper').replaceWith(response.data);
                });
                $scope.loading = '';
            }, function (response) { //error
                alertify.error(msg.erroMenu);
                $scope.loading = '';
            });
        };

        //content_configuracao
        $scope.goConfiguracao = function () {
            $scope.loading = 'config';
            var data = {content: 'content_configuracao'};
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
                $scope.loading = '';
                $scope.$apply()
            }, function (response) { //error
                alertify.error(msg.erroMenu);
                $scope.loading = '';
            });
        };

        //content_cliente
        $scope.goCliente = function () {
            $scope.loading = 'cliente';
            var data = {content: 'content_cliente'};
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
                $scope.loading = '';
                $scope.$apply()
            }, function (response) { //error
                alertify.error(msg.erroMenu);
                $scope.loading = '';
            });
        };

        //content_usuario
        $scope.goUsuario = function () {
            $scope.loading = 'usuario';
            var data = {content: 'content_usuario'};
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
                $scope.loading = '';
                $scope.$apply()
            }, function (response) { //error
                alertify.error(msg.erroMenu);
                $scope.loading = '';
            });
        };

        //content_relatorio
        $scope.goRelatorio = function () {
            $scope.loading = 'relatorio';
            var data = {content: 'content_relatorio'};
            $http.post('page', data).then(function (response) { //success
                $('.content-wrapper').replaceWith(response.data);
                $scope.loading = '';
                $scope.$apply()
            }, function (response) { //error
                alertify.error(msg.erroMenu);
                $scope.loading = '';
            });
        };

        //usuario_logoff
        $scope.logoff = function () {
            $scope.loading = 'logoff';
            $http.post('usuario/logoff').then(function (response) { //success
                location.reload();
                $scope.loading = '';
                $scope.$apply()
            }, function (response) { //error
                alertify.error(msg.erroLogoff);
                $scope.loading = '';
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