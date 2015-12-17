requirejs.config({
    paths: {
        //exports
        angular: '../angular/angular.min',
        /**/angularAnimate: '../angular/angular-animate.min',
        /**/angularSanitize: '../angular/angular-sanitize.min',
        /**/uiRouter: '../angular/angular-ui-router.min',
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
        'jquery',
        'jvectormap'
    ],
    deps: [
        'bootstrap'
    ]
});
