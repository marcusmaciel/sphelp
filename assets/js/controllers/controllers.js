define(function (require) {

    'use strict';

    var angular = require('angular'),
            controllers = angular.module('app.controllers', []);

    controllers
            //modulo
            .controller('loginFormController', require('controllers/modulo/loginFormController'))
            .controller('mainSidebarController', require('controllers/modulo/mainSidebarController'))
            
            .controller('usuariosController', require('controllers/modulo/usuariosController'))
            .controller('controlSidebarController', require('controllers/modulo/controlSidebarController'))
            
            //mainHeader
            .controller('userMenuController', require('controllers/componente/mainHeader/userMenuController'))
            
            //componente
            .controller('chamadoController', require('controllers/componente/chamadoController'))
            ;

    return controllers;
});