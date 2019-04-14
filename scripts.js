

let appDate = {
    moneyKey: money,
    timeKey: time,
    income: [],
    saving: false,
    expenses: {
        expenses : optionalExpenses
    }
}

var money = prompt("Ваш бюджет на месяц?");
var time = prompt("Введите дату в формате YYYY-MM-DD");
var expenses = prompt("Введите статью расходов в этом месяце");
var optionalExpenses = prompt("Во сколько обойдется?");

alert("Бюджет на 1 день = " + money/30);