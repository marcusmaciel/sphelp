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
            $http.post('chamado/listar').then(function (response) { //success

                //pega somente o retorno da resposta
                var data = response.data;

                //ordena de acordo com a data 
                data = data.sort(function (a, b) {
                    var a = new Date(a._d), b = new Date(b._d);
                    return a - b;
                });

                //pra cada elemento, calcule o tempo de SLA dele
                for (var i in data) {
                    data[i].sla = fnService.calc.timeDiff(data[i]._d);
                }

                $scope.listaChamados = data;
                $scope.loading = false;

            }, function () { //error

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