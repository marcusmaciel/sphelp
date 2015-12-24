define(function (require) {

    'use strict';

    var angular = require('angular'),
            controllers = angular.module('app.controllers', []);

    controllers

            //modulos
            .controller('loginFormController', require('controllers/modulo/loginFormController'))
            .controller('mainSidebarController', require('controllers/modulo/mainSidebarController'))
            .controller('controlSidebarController', require('controllers/modulo/controlSidebarController'))

            //modulo:mainHeader
            .controller('userMenuController', require('controllers/componente/mainHeader/userMenuController'))

            //modulo:contentWrapper
            .controller('chamadoController', require('controllers/componente/contentWrapper/chamadoController'))
            .controller('clienteController', require('controllers/componente/contentWrapper/clienteController'))
            .controller('perfilInfoController', require('controllers/componente/contentWrapper/perfilInfoController'))

            //modulo:modal
            .controller('modalPerfilInfoController', require('controllers/componente/modal/modalPerfilInfoController'))
            ;

    return controllers;
});