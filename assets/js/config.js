define(['angular'], function (angular) {

    'use strict';

    return angular.module('app.config', [])
            .config(['$httpProvider', function ($httpProvider) {
                    $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
                    $httpProvider.defaults.transformRequest = function (data) {
                        var data = data || {};
                        data[window.sphelp[0]] = window.sphelp[1];
                        return $.param(data);
                    };
                }])
            ;
});
