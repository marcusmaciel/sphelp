define(function (require) {

    'use strict';

    var angular = require('angular'),
            folder = 'controllers/',
            controllers = angular.module('app.controllers', []);

    controllers
            //pages
            .controller('loginFormController', require(folder+'pages/loginFormController'))
            //components
            ;

    return controllers;
});