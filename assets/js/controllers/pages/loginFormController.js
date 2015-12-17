define(function () {

    'use strict';

    function ctrl(
            $scope,
            $http
            ) {

        $scope.autenticar = function (frm) {

            $http({
                method: 'GET',
                url: '/someUrl'
            }).then(function () { //success

            }, function () { //error

            });

        };

    }

    ctrl.$inject = [
        '$scope',
        '$http'
    ];

    return ctrl;

});