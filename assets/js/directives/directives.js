define(function (require) {

    'use strict';

    var angular = require('angular'),
            directives = angular.module('app.directives', []);

    directives
            .directive('spHttpPrefix', require('directives/spHttpPrefixDirective'))
            ;

    return directives;
});