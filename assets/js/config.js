define(['angular'], function (angular) {

    'use strict';

    return angular.module('app.config', [])
            .config(['$httpProvider', function ($httpProvider) {
                    $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
                }])
            ;
});
