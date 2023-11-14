import './bootstrap';
import '../css/app.css';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function isDarkMode(){
    return localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);
}

function randomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function generateBoxShadow(starCount){
    let result = "";
    for(let i = 0; i < starCount; i++){
        result += `${randomNumber(-50, 50)}vw ${randomNumber(-50, 50)}vh ${randomNumber(1, 2)}px ${randomNumber(1, 2)}px rgb(255,255,171,0.5),`;
    }

    return result.substring(0, result.length - 1);
}
document.getElementsByClassName('star-bg')[0].style.boxShadow = generateBoxShadow(35);

//startregion Side menu


let nav = $("#dot ul li");
let contents = $("#content > div");

if(window.location.href.split('#').length > 1){
    $('.'+window.location.href.split('#')[1]).addClass("active");
}
else{
    $('.about-me').addClass("active");
}

$(window).scroll(function(){
    let wScroll = $(this).scrollTop();

    contents.each(function (index) {
        if(wScroll >= contents.eq(index).offset().top){
            nav.removeClass("active");
            nav.eq(index).addClass("active");
        }
    });
});

//endregion Side menu
