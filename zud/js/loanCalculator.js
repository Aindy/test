$(document).ready(function () {

    // калькулятор кредита................................./
    var error = "<div class='alert alert-danger alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12'>" +
        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" +
        "<strong>Ошибка!</strong> Пожалуйста, заполните все поля правильно.</div>";
    var errAmount = "<div class='alert alert-warning alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12'>" +
        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" +
        "<strong>Внимание!</strong> Веедите сумму не ниже 1000 и не выше 100 000 000 руб.</div>";
    var errPeriod = "<div class='alert alert-warning alert-dismissible col-lg-12 col-md-12 col-sm-12 col-xs-12'>" +
        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" +
        "<strong>Внимание!</strong> Период выплат должен быть не менее чем 4 месяца и не более чем 4 года.</div>";
    var erForm = "";

    $('#calculate').on('click', function () {
        var $btn = $(this).button('loading');

        var amount = $("#calculator input[name='amount']").val();
        var percent = $("#calculator input[name='percent']").val()/1200;
        var year = $("#calculator select[name='year']").val();
        var month = $("#calculator select[name='month']").val();
        var period = year * 12 + Number(month);

        function calculate(){
            if (amount < 1000 || amount > 100000000){
                $("#errorCalculatorForm").html(errAmount);
                $btn.button('reset');
                return false;
            }

            if (period > 36 && period <= 48){
                var prefPeriod = 12;
                var numPayments = period - prefPeriod;
                var delta = amount * percent * prefPeriod;

            } else if(period > 24 && period <= 36) {
                var prefPeriod = 9;
                var numPayments = period - prefPeriod;
                var delta = amount * percent * prefPeriod;

            } else if(period > 12 && period <= 24) {
                var prefPeriod = 6;
                var numPayments = period - prefPeriod;
                var delta = amount * percent * prefPeriod;

            } else if(period > 3 && period <= 12) {
                var prefPeriod = 3;
                var numPayments = period - prefPeriod;
                var delta = amount * percent * prefPeriod;

            } else {
                $("#errorCalculatorForm").html(errPeriod);
                $btn.button('reset');
                return false;
            }

            var d = parseInt(amount) + delta;
            var rate = d * (percent + (percent / (Math.pow(1 + percent, numPayments) - 1)));
            var overall = rate * numPayments;
            var interest = overall - amount;

            $("#span1").text(addSeparatorsNF(rate.toFixed(), '.', ',', ' '));
            $("#span2").text(prefPeriod);
            $("#span3").text(numPayments);
            $("#span4").text(addSeparatorsNF(overall.toFixed(), '.', ',', ' '));
            $("#span5").text(addSeparatorsNF(interest.toFixed(), '.', ',', ' '));
        }

        // Number seperator by spaces
        function addSeparatorsNF(nStr, inD, outD, sep) {
            nStr += '';
            var dpos = nStr.indexOf(inD);
            var nStrEnd = '';
            if (dpos != -1) {
                nStrEnd = outD + nStr.substring(dpos + 1, nStr.length);
                nStr = nStr.substring(0, dpos);
            }
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(nStr)) {
                nStr = nStr.replace(rgx, '$1' + sep + '$2');
            }
            return nStr + nStrEnd;
        }


        if (amount == "")
            erForm = "yes";
        if (percent == "")
            erForm = "yes";
        if (year == "0" && month == "0")
            erForm = "yes";

        if (erForm == "") {
            calculate();
        } else {
            $("#errorCalculatorForm").html(error);
            erForm = "";
        }

        $btn.button('reset');
        return false;
    });

});


