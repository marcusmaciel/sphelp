require.config({
    paths: {
        angular: '../plugins/angular/angular.min',
        /**/angularAnimate: '../plugins/angular/angular-animate.min',
        /**/angularSanitize: '../plugins/angular/angular-sanitize.min',
        /**/uiRouter: '../plugins/angular/angular-ui-router.min',
        /**/uiBootstrap: '../plugins/angular/angular-ui-bootstrap',
        jquery: '../plugins/jQuery/jQuery-2.1.4.min',
        /**/bootstrap: '../bootstrap/js/bootstrap.min',
        /**/fastclick: '../plugins/fastclick/fastclick.min',
        /**/adminLTE: '../dist/js/app.min',
        /**/sparkline: '../plugins/sparkline/jquery.sparkline.min',
        /**/jvectormap: '../plugins/jvectormap/jquery-jvectormap-1.2.2.min',
        /**/jvectormap_worldMap: '../plugins/jvectormap/jquery-jvectormap-world-mill-en',
        /**/slimScroll: '../plugins/slimScroll/jquery.slimscroll.min',
        /**/chartjs: '../plugins/chartjs/Chart.min'
    },
    shim: {
        angular: {exports: 'angular'},
        /**/angularAnimate: {deps: ['angular']},
        /**/angularSanitize: {deps: ['angular']},
        /**/uiRouter: {deps: ['angular']},
        /**/uiBootstrap: {deps: ['angular', 'jquery']},
        jquery: {exports: 'jquery'},
        /**/bootstrap: {deps: ['jquery']},
        /**/fastclick: {deps: ['jquery']},
        /**/adminLTE: {deps: ['jquery']},
        /**/sparkline: {deps: ['jquery']},
        /**/jvectormap: {exports: 'jvectormap', deps: ['jquery']},
        /**/jvectormap_worldMap: {deps: ['jquery', 'jvectormap']},
        /**/slimScroll: {deps: ['jquery']},
        /**/chartjs: {deps: ['jquery']}
    },
    priority: [
        'angular',
        'jquery'
    ]
});
require([
    'angular',
    /**/'angularAnimate',
    /**/'angularSanitize',
    /**/'uiRouter',
    /**/'uiBootstrap',
    'jquery',
    /**/'bootstrap',
    /**/'fastclick',
    /**/'adminLTE',
    /**/'sparkline',
    /**/'jvectormap',
    /**/'jvectormap_worldMap',
    /**/'slimScroll',
    /**/'chartjs',
    'config',
    'constants/constants',
    'controllers/controllers',
    'directives/directives',
    'filters/filters',
    'services/services',
    'values/values'
], function (angular, uiRouter, $) {

    var app = angular.module('app', [
        'app.config',
        'app.constants',
        'app.controllers',
        'app.directives',
        'app.filters',
        'app.services',
        'app.values',
        'ui.router',
        'ui.bootstrap'
    ]);

    angular.bootstrap(document, ['app']);

    return app;

});