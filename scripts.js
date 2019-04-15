
let money = +prompt("Ваш бюджет на месяц?"),
    time = prompt("Введите дату в формате YYYY-MM-DD");

let appData = {
    budget: money,
    timeData: time,
    income: [],
    saving: false,
    expenses: {}
}



appData.expenses.a1 = a2;
appData.expenses.a3 = a4;

for(let i = 0; i < 2; i++){
    let a1 = prompt("Введите статью расходов в этом месяце");
        a2 = prompt("Во сколько обойдется?");
        if((typeof(a))=== 'string' && (typeof(a)) != null && (typeof(b)) != null
        && a != '' && b != ''){
            console.log("done");
            appData.expenses[a] = b;
        }else{

        }
};

appData.moneyPerDay = appData.budget / 30;
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