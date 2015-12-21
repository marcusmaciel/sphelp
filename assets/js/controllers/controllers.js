define(function (require) {

    'use strict';

    var angular = require('angular'),
            controllers = angular.module('app.controllers', []);

    controllers
            //modulo
            .controller('loginFormController', require('controllers/modulo/loginFormController'))
            .controller('mainHeaderController', require('controllers/modulo/mainHeaderController'))
            .controller('usuariosController', require('controllers/modulo/usuariosController'))
            
            //componente
            .controller('chamadoController', require('controllers/componente/chamadoController'))
            
            ;

    return controllers;
});