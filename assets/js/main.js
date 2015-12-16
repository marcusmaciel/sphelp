$(location).attr('href','google.com');
requirejs.config({
    paths: {
        //exports
        angular: '../lib/js/angular.min',
        /**/angularAnimate: '../lib/js/angular-animate.min',
        /**/angularSanitize: '../lib/js/angular-sanitize.min',
        /**/uiRouter: '../lib/js/angular-ui-router.min',
        jquery: '../lib/js/jquery-2.1.4.min',
    },
    shim: {
        angular: {exports: 'angular'},
        /**/angularAnimate: {deps: ['angular']},
        /**/angularSanitize: {deps: ['angular']},
        /**/uiRouter: {deps: ['angular']},
        spWebdb: {exports: 'spWebdb'},
        jquery: {exports: 'jquery'},
        criptojs: {exports: 'criptojs'},
        ionic: {deps: ['angular'], exports: 'ionic'},
        /**/ionicAngular: {
            deps: [
                'angular',
                'angularAnimate',
                'angularSanitize',
                'uiRouter',
            ]
        }
    },
    priority: [
        'angular',
        'ionic',
        'jquery',
        'criptojs',
        'spWebdb'
    ],
    deps: [
        'bootstrap'
    ]
});