define(function () {

    'use strict';
    function ctrl(
            $scope,
            $http,
            $timeout
            ) {

        //mensagem sobre o usuário
        $scope.callbackMessage = null;
        $scope.autenticar = function (form) {

            $http.post('usuario/autenticar', form)
                    .then(function (response) { //success

                        if (response == true) { //autenticou

                            location.reload();
                        } else { //não passou

                            $scope.callbackMessage = {
                                text: 'usuário ou senha incorreta.',
                                class: 'alert-info'
                            };

                            $timeout(function () {
                                $scope.callbackMessage;
                            }, 3000);

                        }
                        console.log($scope.callbackMessage);
                    }, function () { //ocorreu algum erro no servidor

                        $scope.callbackMessage = {
                            text: 'Oops... ocorreu um erro no servidor. tente novamente mais tarde',
                            class: 'alert-warning'
                        };

                        $timeout(function () {
                            $scope.callbackMessage;
                        }, 3000);

                    });
        };
    }

    ctrl.$inject = [
        '$scope',
        '$http',
        '$timeout'
    ];

    return ctrl;

});