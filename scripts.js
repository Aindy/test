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
    optionalExpenses: {},
    saving: true,
    chooseExpenses: function(){
        for(let i = 0; i < 2; i++){
            let a = prompt("Введите статью расходов в этом месяце"),
                b = prompt("Во сколько обойдется?");
                if((typeof(a))=== 'string' && (typeof(a)) != null && (typeof(b)) != null && a != '' && b != ''){
                    console.log("done");
                    appData.expenses[a] = b;
                }else{
                    i--;
                }
        }
    },
    checkSavings: function(){
        if(appData.saving){
            let save = +prompt("Какова сумма накоплений?"),
                percent = +prompt("Под какой процент?");
    
            appData.monthIncome = save/100/12*percent;
            alert("Доход в месяц с вашего депозита: " + appData.monthIncome);
    
        }
    },
    detectDayBudjet: function(){
        appData.moneyPerDay = (appData.budget / 30).toFixed(1);
        alert("Ежедневный бюджет: " + appData.moneyPerDay);
    },
    detectLevel: function(){
        if(appData.moneyPerDay < 100){
            console.log("Минимальный уровень достатка");
        } else if (appData.moneyPerDay > 100 && appData.moneyPerDay < 2000){
            console.log("Средний уровень достатка");
        } else if (appData.moneyPerDay > 2000){
            console.log("Высокий уровень достатка");
        }else{
            console.log("Произошла ошибка");
        }
    },
    chooseOptExpenses: function(){
        for(let i; i < 3; i++){
            let opt = prompt("Статья необязательных расходов?", "");
            appData.optionalExpenses[i] = opt;

        }
    },
    chooseIncome: function(){
        let items = prompt("Что принесет дополнительный доход? (вводите через запятую)", "");
        appData.income = items.split(', ');
        appData.income.push(prompt("Может что-то еще?"));
        appData.income.sort();
    }

};
