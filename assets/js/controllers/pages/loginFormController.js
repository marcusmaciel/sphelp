define(function () {

    'use strict';

    function ctrl(
            $scope,
            $http
            ) {

        $scope.autenticar = function (form) {
            console.log(form);
/*
            $http.post('usuario/autenticar', frm)
                .then(function (d) { //success
                    console.log(d);
                }, function (d) { //error
                    console.log(d);
                });
*/
        };

    }

    ctrl.$inject = [
        '$scope',
        '$http'
    ];

    return ctrl;

});