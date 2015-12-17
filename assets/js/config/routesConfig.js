define(function () {

    "use strict";

    app.config(["$stateProvider", "$urlRouterProvider",
        function ($stateProvider, $urlRouterProvider) {

            $stateProvider
                    .state("app", {
                        url: "/",
                        templateUrl: "templates/app.html",
                        controller: "appController"
                    })
                    ;
            $urlRouterProvider.otherwise("/");

        }]);

});