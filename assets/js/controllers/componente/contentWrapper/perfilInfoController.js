define(function () {

    'use strict';
    function ctrl(
            $scope,
            $uibModal
            ) {

        //mensagem sobre chamados com SLA expirando
        $scope.msgWarning = '';

        //loading do componente
        $scope.loading = false;

        $scope.a = 'asdasd'

        //modal de edição dos dados do usuário
        $scope.modalOpen = function () {

            var modal = $uibModal.open({
                animation: false,
                template: '<div>teste</div>',
                controller: 'modalPerfilInfoController',
                size: 'lg',
                resolve: {
                    a: function () {
                        return $scope.a;
                    }
                }
            });

        };


        $scope.teste = function () {
            console.log('testeasadasadas');
        };

    }

    ctrl.$inject = [
        '$scope',
        '$uibModal'
    ];

    return ctrl;

});