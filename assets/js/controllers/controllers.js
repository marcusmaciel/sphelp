define(function (require) {

    'use strict';

    var angular = require('angular'),
            controllers = angular.module('app.controllers', []);

    controllers
            //pages
            .controller('loginFormController', require('controllers/pages/loginFormController'))
            //components
            ;

    return controllers;
});