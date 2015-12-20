define(function () {

    'use strict';
    function ctrl(
            $scope,
            $http,
            $timeout,
            alertify
            ) {

        $scope.autenticar = function (form) {

            $http({
                method: 'POST',
                url: 'usuario/autenticar',
                data: form
            }).then(function (response) { //success

                if (response.data == true) { //autenticou

                    location.reload();

                } else { //não passou

                    alertify.info('usuário ou senha inválida');
                    
                }

            }, function () { //ocorreu algum erro no servidor

                alertify.error('Oops... ocorreu um erro no servidor. tente novamente mais tarde');

            });
        };
    }

    ctrl.$inject = [
        '$scope',
        '$http',
        '$timeout',
        'alertify'
    ];

    return ctrl;

});