define(function () {

    'use strict';

    function ctrl(
            $scope,
            $http
            ) {

        $scope.logoff = function () {
            $http.post('usuario/logoff')
                    .then(function (d) { //success
                        location.reload();
                    }, function (d) { //error
                        console.log(d);
                    });
        };
    }

    ctrl.$inject = [
        '$scope',
        '$http'
    ];

    return ctrl;

});