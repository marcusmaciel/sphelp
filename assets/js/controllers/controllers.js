define(function (require) {

    'use strict';

    var angular = require('angular'),
            controllers = angular.module('app.controllers', []);

    controllers
            //modulo
            .controller('loginFormController', require('controllers/modulo/loginFormController'))
            .controller('mainSidebarController', require('controllers/modulo/mainSidebarController'))
            .controller('mainHeaderController', require('controllers/modulo/mainHeaderController'))
            .controller('usuariosController', require('controllers/modulo/usuariosController'))
            .controller('controlSidebarController', require('controllers/modulo/controlSidebarController'))
            
            //componente
            .controller('chamadoController', require('controllers/componente/chamadoController'))
            ;

    return controllers;
});