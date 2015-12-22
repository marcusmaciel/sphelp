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

                //captura o conteúdo
                var data = response.data;

                //cria os valores do SLA
                for (var i in data) {
                    data[i].sla = fnService.formatSla(data[i]._d);
                }
                ;

                //insere o conteúdo na lista de chamados
                $scope.listaChamados = data;

                //remove o loading
                $scope.loading = false;

            }, function () { //success

                //informa ao usuário que deu pau
                alertify.error('falha ao carregar os chamados');

                //remove o loading
                $scope.loading = false;

            });

        })();

        //buscar novamente os chamados a cada 30 segundos
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