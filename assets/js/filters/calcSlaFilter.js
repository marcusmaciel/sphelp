define(function () {

    return function (dateIn) {

        //resolve date
        var dateI = new Date(dateIn);
        var dateN = new Date();
        
        //retorna a diferença
        return dateI.getTime() - dateN.getTime();

    };

});