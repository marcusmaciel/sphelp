define(function (require) {

    'use strict';

    var angular = require('angular'),
            filters = angular.module('app.filters', []);

    filters
            .filter('calcSla', require('filters/calcSlaFilter'))
            ;

    return filters;
});