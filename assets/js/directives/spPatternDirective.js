define(function () {

    "use strict";

    function directive() {

        var regexp;
        return {
            restrict: "A",
            link: function (scope, elem, attrs) {

                regexp = eval(attrs.regExpRequire);

                var char;

                elem.on("keypress", function (event) {

                    char = String.fromCharCode(event.which);

                    if (!regexp.test(elem.val() + char)) {
                        event.preventDefault();
                    }
                    ;

                });

            }
            
        };
        
    }

    directive.$inject = [];

    return directive;

});