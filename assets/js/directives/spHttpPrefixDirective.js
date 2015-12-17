define(function () {

    "use strict";

    function directive() {

        return {
            restrict: 'A',
            require: 'ngModel',
            link: function (scope, element, attrs, controller) {

                function ensureHttpPrefix(value) {
                    // Need to add prefix if we don't have http:// prefix already AND we don't have part of it
                    if (value && !/^(http):\/\//i.test(value) && 'http://'.indexOf(value) === -1) {
                        controller.$setViewValue('http://' + value);
                        controller.$render();
                        return 'http://' + value;
                    }
                    else {
                        return value;
                    }
                    ;
                }
                ;
                controller.$formatters.push(ensureHttpPrefix);
                controller.$parsers.push(ensureHttpPrefix);
            }
        };

    }

    directive.$inject = [];

    return directive;

});