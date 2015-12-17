define([
    'angular',
    'angularSanitize',
    'jquery',
    'uiRouter',
    'config',
    'values',
    'constants/constants',
    'filters/filters',
    'services/services',
    'directives/directives',
    'controllers/controllers',
], function (angular) {

    'use strict';

    var app = angular.module('app', [
        'app.controllers',
        'app.filters',
        'app.services',
        'app.directives',
        'app.constants',
        'app.config',
        'app.values',
        'ui.router'
    ]);

    return app;

});