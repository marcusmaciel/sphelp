define(function (require) {

    'use strict';

    var angular = require('angular'),
            controllers = angular.module('app.controllers', []);

    controllers
            //modulo
            .controller('loginFormController', require('controllers/pages/loginFormController'))
            .controller('headerUsuarioController', require('controllers/layout/headerUsuarioController'))
            .controller('usuariosController', require('controllers/pages/usuariosController'))
            
            //componente
            .controller('chamadosController', require('controllers/componente/chamadosController'))
            
            ;

    return controllers;
});