define(function () {

    'use strict';

    function ctrl(
            $scope,
            $http
            ) {

        $scope.loggout = function () {
            $http.post('usuario/logoff')
                    .then(function (d) { //success
                        location.reload();
                    }, function (d) { //error
                        console.log(d);
                    });
        };

        $scope.configuracoes = function () {
            $('#dinamicPartial .box-title').html('Configurações');
            $http.get('http://localhost/sphelp/page')
                    .then(function (d) { //success
                        $('#dinamicPartial .box-body').html(d.data);
                    }, function (d) { //error
                        console.log(d);
                    });
        }
    }

    ctrl.$inject = [
        '$scope',
        '$http'
    ];

    return ctrl;

});