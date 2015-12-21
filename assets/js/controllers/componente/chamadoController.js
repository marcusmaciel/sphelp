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

        //calcula sla
        function timeDiff(d1, d2) {

            var d1 = new Date(d1).getTime();
            var d2 = d2 || new Date().getTime();
            var df = Math.abs(d1 - d2);
            var td = {
                d: Math.round(df / (24 * 60 * 60 * 1000)), //dias
                h: Math.round(df / (60 * 60 * 1000)), //horas
                m: Math.abs(Math.round(df / (60 * 1000)) - (60 * 1000)), //minutos
                s: Math.abs(Math.round(df / 1000) - 1000)
            };
            var result = '';
            td.d > 0 ? result += td.d + ' dias ' : '';
            td.h > 0 ? result += ('0' + td.h).slice(-2) + ':' : '00:';
            td.m > 0 ? result += ('0' + td.m).slice(-2) + ':' : '00:';
            td.s > 0 ? result += ('0' + td.s).slice(-2) : '00';

            return result;

        }

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
                    data[i].sla = timeDiff(data[i]._d);
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
        'alertify'
    ];

    return ctrl;

});