define(function (require) {

    'use strict';

    var angular = require('angular'),
            folder = 'directives/',
            directives = angular.module('app.directives', []);

    directives
            .directive('spHttpPrefix', require('directives/spHttpPrefixDirective'))
            ;

    return directives;
});