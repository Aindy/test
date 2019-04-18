let adv = document.querySelector('.adv'),
    title = document.getElementById('title'),
    divs = document.getElementsByTagName('div'),
    nav = document.getElementsByTagName('nav'),
    header = document.getElementsByTagName('header'),
    ul = document.querySelector('.menu'),
    lises = document.querySelectorAll('.menu-item'),
    divcol = document.querySelector('.column'),
    fprompt = document.querySelector('.prompt');


    //1 удаление рекламы
    divs[1].removeChild(adv);
    //2 исправление текста
    title.textContent = 'Мы продаем только подлинную технику Apple';
    //3 исправление порядка пунктов
    lises[1].textContent = 'Второй пункт';
    lises[2].textContent = 'Третий пункт';
    //4 добавление пятого пункта
    let partfive = document.createElement('li');
        partfive.classList = 'menu-item';
        partfive.textContent = 'Пятый пункт';
        ul.appendChild(partfive);
    //5 ввод пользователя
    let ans;
      do{ 
        ans = prompt('Пожалуйста напишите пару слов о технике Apple: ');
    }while(ans == '' || ans == null);
        fprompt.textContent = ans;

    console.log(typeof(ans));