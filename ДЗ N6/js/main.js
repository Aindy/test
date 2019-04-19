let btnR = document.getElementById('start'),
    body = document.querySelector('.body'),
    mainDiv = document.querySelector('.main'),
    app = document.querySelector('.app'),
    result = document.querySelector('.result'),
    resultTable = document.querySelector('.result-table'),
    values = resultTable.getElementsByTagName('div'),
    exItem = document.querySelectorAll('.expenses-item'),
    data = document.querySelector('.data'),
    btns = document.getElementsByTagName('button'),
    optionEx = document.querySelectorAll('.optionalexpenses-item'),
    day = document.querySelector('.day-value'),
    month = document.querySelector('.month-value'),
    year = document.querySelector('.year-value'),
    statya = document.querySelector('.choose-income'),
    checkBox = document.querySelector('#savings'),
    chSum = document.querySelector('.choose-sum'),
    chPercent = document.querySelector('.choose-percent'),
    valuesNeed = [];
    
    //buttons
let utv1 = btns[0],
    utv2 = btns[1],
    raschet = btns[2]; 

    //sort tags wich have not text value
for(let i = 0; i < values.length; i++){
    if(values[i].innerHTML == ''){
        valuesNeed[i] = values[i];
    }else{
        continue;
    }
}

    console.log(checkBox);