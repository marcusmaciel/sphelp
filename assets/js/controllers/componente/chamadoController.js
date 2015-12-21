define(function () {

    'use strict';
    function ctrl(
            $scope,
            $http,
            $interval,
            alertify
            ) {

        //div de carregamento | true:false
        $scope.loading = false;

        //lista de chamados
        $scope.listaChamados = [];

        ($scope.buscarChamados = function (filtros) {

            $scope.loading = true;

            //caso não haja parametros de busca
            var filtros = filtros || {};

            //busca no servidor
            $http({
                method: 'POST',
                url: 'chamado/listar',
                data: filtros
            }).then(function (response) { //success

                $scope.listaChamados = response.data;
                $scope.loading = false;

            }, function (response) { //success

                alertify.error('falha ao carregar os chamados');
                $scope.loading = false;

            });

        })();

        //buscar novamente os chamados a cada 5 segundos
        $interval(function () {
            $scope.buscarChamados();
        }, 30000);

    }

    ctrl.$inject = [
        '$scope',
        '$http',
        '$interval',
        'alertify'
    ];

    return ctrl;

});