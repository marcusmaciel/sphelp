define(function (require) {

    'use strict';

    var angular = require('angular'),
            folder = 'services/',
            services = angular.module('app.services', []);

    services
            //.factory('wsService', require('services/wsService'))
            ;

    return services;

});