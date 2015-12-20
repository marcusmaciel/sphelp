define(function (require) {

    'use strict';

    var angular = require('angular'),
            controllers = angular.module('app.controllers', []);

    controllers
            //pages
            .controller('loginFormController', require('controllers/pages/loginFormController'))
            .controller('headerUsuarioController', require('controllers/layout/headerUsuarioController'))
            .controller('usuariosController', require('controllers/pages/usuariosController'))
            .controller('dinamicPartialController', require('controllers/layout/dinamicPartialController'))
            //components
            ;

    return controllers;
});