define(["angular"], function (angular) {

    "use strict";

    var factory = function () {

        return {
            //verificacao de elementos
            check: {
                //se é int
                isInt: function (n) {
                    return Number(n) === n && n % 1 === 0;
                },
                //se é float
                isFloat: function (n) {
                    return n === Number(n) && n % 1 !== 0;
                }
            },
            format: {
                address: function (e) {
                    var r = '';
                    e.hasOwnProperty('rua') ? r += e.rua : '';
                    e.hasOwnProperty('num') ? r += ' n.' + e.num + ', ' : r += ', ';
                    e.hasOwnProperty('complemento') ? r += e.complemento + ', ' : '';
                    e.hasOwnProperty('bairro') ? r += 'bairro ' + e.bairro + ' - ' : '';
                    e.hasOwnProperty('cidade') ? r += e.cidade + '/' + e.uf + ' - ' : '';
                    e.hasOwnProperty('cep') ? r += 'cep ' + e.cep : '';
                    return r;
                },
                toDouble: function (n, c) {
                    return n.toFixed(c || 2);
                }
            },
            calc: {
                timeDiff: function (a, b) {

                    var a = new Date(a).getTime(),
                            b = b || new Date().getTime(),
                            c = Math.abs(a - b),
                            r = '',
                            e = {
                                d: Math.round(c / (24 * 60 * 60 * 1000)), //dias
                                h: Math.round(c / (60 * 60 * 1000)), //horas
                                m: Math.abs(Math.round(c / (60 * 1000)) - (60 * 1000)), //minutos
                                s: Math.abs(Math.round(c / 1000) - 1000)
                            };

                    e.d > 0 ? result += e.d + ' dias ' : '';
                    e.h > 0 ? result += ('0' + e.h).slice(-2) + ':' : '00:';
                    e.m > 0 ? result += ('0' + e.m).slice(-2) + ':' : '00:';
                    e.s > 0 ? result += ('0' + e.s).slice(-2) : '00';

                    return r;

                }

            }
        };

    };

    factory.$inject = [];

    return factory;

});