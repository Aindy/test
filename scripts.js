let money, time;

function start(){
    money = +prompt("Ваш бюджет на месяц?");
    time = prompt("Введите дату в формате YYYY-MM-DD");

    while(isNaN(money) || money == "" || money == null){
        money = +prompt("Ваш бюджет на месяц?");
        time = prompt("Введите дату в формате YYYY-MM-DD");
    }
}
start();

let appData = {
    budget: money,
    timeData: time,
    income: [],
    expenses: {},
    saving: true
}


// appData.expenses.a1 = a2;
// appData.expenses.a3 = a4;

function chooseExpenses(){
    for(let i = 0; i < 2; i++){
        let a = prompt("Введите статью расходов в этом месяце"),
            b = prompt("Во сколько обойдется?");
            if((typeof(a))=== 'string' && (typeof(a)) != null 
            && (typeof(b)) != null && a != '' && b != ''){
                console.log("done");
                appData.expenses[a] = b;
            }else{
                i--;
            }
    };
}
chooseExpenses();

appData.moneyPerDay = (appData.budget / 30).toFixed(1);
alert("Ежедневный бюджет: " + appData.moneyPerDay);

if(appData.moneyPerDay < 100){
    console.log("Минимальный уровень достатка");
} else if (appData.moneyPerDay > 100 && appData.moneyPerDay < 2000){
    console.log("Средний уровень достатка");
} else if (appData.moneyPerDay > 2000){
    console.log("Высокий уровень достатка");
}else{
    console.log("Произошла ошибка");
}

function checkSavings(){
    if(appData.saving){
        let save = +prompt("Какова сумма накоплений?"),
            percent = +prompt("Под какой процент?");

        appData.monthIncome = save/100/12*percent;
        alert("Доход в месяц с вашего депозита: " + appData.monthIncome);

    }
}
checkSavings();