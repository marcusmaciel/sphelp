define(["angular"], function (angular) {

    "use strict";

    var factory = function () {

        return {
            //se é int
            checkIsInt: function (n) {
                return Number(n) === n && n % 1 === 0;
            },
            //se é float
            checkIsFloat: function (n) {
                return n === Number(n) && n % 1 !== 0;
            },
            //formata como endereco
            formatToAddress: function (e) {
                var r = '';
                e.hasOwnProperty('rua') ? r += e.rua : '';
                e.hasOwnProperty('num') ? r += ' n.' + e.num + ', ' : r += ', ';
                e.hasOwnProperty('complemento') ? r += e.complemento + ', ' : '';
                e.hasOwnProperty('bairro') ? r += 'bairro ' + e.bairro + ' - ' : '';
                e.hasOwnProperty('cidade') ? r += e.cidade + '/' + e.uf + ' - ' : '';
                e.hasOwnProperty('cep') ? r += 'cep ' + e.cep : '';
                return r;
            },
            //transforma em double
            formatToDouble: function (n, c) {
                return n.toFixed(c || 2);
            },
            //tempo de sla
            formatSla: function (a, b) {
                var a = new Date(a).getTime();
                var b = b || new Date().getTime();
                var c = '';
                var d = {//valores totalizados
                    d: Math.round(((Math.abs(a - b) / 1000) / 60) / 60 / 24), // dias
                    h: Math.round(((Math.abs(a - b) / 1000) / 60) / 60), //horas
                    m: Math.round((Math.abs(a - b) / 1000) / 60), //minutos
                    s: Math.round(Math.abs(a - b) / 1000) //segundos
                };
                var e = {//valores resolvidos
                    h: Math.abs(d.d * 24 - d.h),
                    m: Math.abs(d.h * 60 - d.m),
                    s: Math.abs(d.m * 60 - d.s)
                };
                d.d > 0 ? c += d.d + '.' : '';
                e.h > 0 ? c += ('0' + e.h).slice(-2) + ':' : '00:';
                e.m > 0 ? c += ('0' + e.m).slice(-2) + ':' : '00:';
                e.s > 0 ? c += ('0' + e.s).slice(-2) : '00';
                return c;

            }

        };

    };

    factory.$inject = [];

    return factory;

});