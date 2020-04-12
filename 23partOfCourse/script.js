
let btn = document.querySelector('.btn'),
    box = document.querySelector('.box');

function myAnime() {
    let pos = 0,
        flagA = true,
        flagB = false;

    let id = setInterval(frame, 10);

    function frame() {
        if(pos == 200){   
            flagA = false;
            flagB = true;
        }if (pos == 0){
            flagA = true;
            flagB = false;
        }

        if(flagA){
            animePlus();
        }else if(flagB){
            animeMinus();
        }
    }

    function animePlus() {
        pos++;
        box.style.top = pos + 'px';
        box.style.left = pos + 'px';
        box.style.height = pos + 'px';
        box.style.width = pos + 'px';
    }
    function animeMinus() {
        pos--;
        box.style.top = pos + 'px';
        box.style.left = pos + 'px';
        box.style.height = pos + 'px';
        box.style.width = pos + 'px';
    }
}
btn.addEventListener('click', myAnime);