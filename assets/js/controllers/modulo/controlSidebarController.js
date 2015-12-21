define(function () {

    'use strict';
    function ctrl(
            $scope,
            $http,
            $interval,
            alertify,
            fnService
            ) {

        //div de carregamento | true:false
        $scope.loading = false;

        //lista de chamados
        $scope.listaChamados = [];

        ($scope.buscarChamados = function (filtros) {

            $scope.loading = true;

            //busca no servidor
            $http({
                method: 'POST',
                url: 'chamado/listar',
                data: filtros || {}
            }).then(function (response) { //success

                var data = response.data;

                for (var i in data) {
                    data[i].sla = fnService.calc.timeDiff(data[i]._d);
                }

                $scope.listaChamados = data;
                $scope.loading = false;

            }, function () { //success

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
        'alertify',
        'fnService'
    ];

    return ctrl;

});