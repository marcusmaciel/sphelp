define(function (require) {

    'use strict';

    var angular = require('angular'),
            services = angular.module('app.services', []);

    services
            .factory('fnService', require('services/fnService'))
            ;

    return services;

});