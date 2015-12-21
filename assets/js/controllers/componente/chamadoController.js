define(function () {

    'use strict';
    function ctrl(
            $scope,
            $http,
            $timeout,
            alertify
            ) {

        //div de carregamento | true:false
        $scope.loading = false;

        //lista de chamados
        $scope.listaChamados = [];

        $scope.buscarChamados = function (filtros) {

            //caso não haja parametros de busca
            var filtros = filtros || {};

            //busca no servidor
            $http({
                method: 'POST',
                url: 'chamado/listar',
                data: filtros
            }).then(function (response) { //success

                $scope.listaChamados = response.data;

            }, function (response) { //success

                alertify.error('falha ao carregar os chamados');

            });

        };
        $scope.buscarChamados();

//        $timeout(function(){
//        },10000);

    }

    ctrl.$inject = [
        '$scope',
        '$http',
        '$timeout',
        'alertify'
    ];

    return ctrl;

});