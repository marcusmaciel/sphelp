require.config({
    paths: {
        angular: '../plugins/angular/angular.min',
        /**/angularAnimate: '../plugins/angular/angular-animate.min',
        /**/angularSanitize: '../plugins/angular/angular-sanitize.min',
        /**/uiRouter: '../plugins/angular/angular-ui-router.min',
        /**/uiBootstrap: '../plugins/angular/angular-ui-bootstrap',
        /**/ngAlertify: '../plugins/alertify/ngAlertify',
        /**/angularDatatables: '../plugins/angular-datatables/angular-datatables.min',
        /**/angularDatatablesBootstrap: '../plugins/angular-datatables/angular-datatables.bootstrap.min',
        jquery: '../plugins/jQuery/jQuery-2.1.4.min',
        /**/bootstrap: '../bootstrap/js/bootstrap.min',
        /**/fastclick: '../plugins/fastclick/fastclick.min',
        /**/adminLTE: '../dist/js/app.min',
        /**/sparkline: '../plugins/sparkline/jquery.sparkline.min',
        /**/jvectormap: '../plugins/jvectormap/jquery-jvectormap-1.2.2.min',
        /**/jvectormap_worldMap: '../plugins/jvectormap/jquery-jvectormap-world-mill-en',
        /**/slimScroll: '../plugins/slimScroll/jquery.slimscroll.min',
        /**/chartjs: '../plugins/chartjs/Chart.min',
        /**/alertify: '../plugins/alertify/alertify.min',
        /**/datatables:'../plugins/datatables/jquery.dataTables.min',
        /**/showdown:'../plugins/showdown/showdown.min'
    },
    shim: {
        angular: {exports: 'angular'},
        /**/angularAnimate: {deps: ['angular']},
        /**/angularSanitize: {deps: ['angular']},
        /**/uiRouter: {deps: ['angular']},
        /**/uiBootstrap: {deps: ['angular', 'jquery']},
        /**/ngAlertify: {deps: ['angular']},
        /**/angularDatatables: {deps: ['angular','jquery']},
        /**/angularDatatablesBootstrap: {deps: ['angular','jquery']},
        jquery: {exports: 'jquery'},
        /**/bootstrap: {deps: ['jquery']},
        /**/fastclick: {deps: ['jquery']},
        /**/adminLTE: {deps: ['jquery']},
        /**/sparkline: {deps: ['jquery']},
        /**/jvectormap: {exports: 'jvectormap', deps: ['jquery']},
        /**/jvectormap_worldMap: {deps: ['jquery', 'jvectormap']},
        /**/slimScroll: {deps: ['jquery']},
        /**/chartjs: {deps: ['jquery']},
        /**/alertify: {deps: ['jquery']},
        /**/datatables:{deps:['jquery']}
    },
    priority: [
        'angular',
        'jquery',
        'ngAlertify',
        'angularDatatables'
    ]
});
require([
    //libraries
    'angular',                 'angularAnimate',              'angularSanitize',             
    'uiRouter',                'uiBootstrap',                 'ngAlertify',
    'jquery',                  'bootstrap',                   'fastclick',
    'adminLTE',                'sparkline',                   'jvectormap',
    'jvectormap_worldMap',     'slimScroll',                  'chartjs',
    'alertify',                'angularDatatables',           'showdown',
    //system files
    'config',
    'constants/constants',
    'controllers/controllers',
    'directives/directives',
    'filters/filters',
    'services/services',
    'values'
], function (angular, uiRouter, $, ngAlertify) {

    var app = angular.module('app', [
        'app.config',
        'app.constants',
        'app.controllers',
        'app.directives',
        'app.filters',
        'app.services',
        'app.values',
        'ui.router',
        'ui.bootstrap',
        'ngAlertify'
    ]);

    angular.bootstrap(document, ['app']);

    return app;

});