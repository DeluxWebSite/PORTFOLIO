
document.addEventListener("DOMContentLoaded", (event) => {

    if (navigator.cookieEnabled === false) {
        alert("Cookies отключены!");
    }

    let cookeValue = (document.cookie.match(/^(?:.*;)?\s*translate\s*=\s*([^;]+)(?:.*)?$/) || [, null])[1]
    cookeValue ? TranslateHtmlHandler(cookeValue) : document.cookie = "translate=es";

});

let tagEs = document.querySelector('.language__img-es')
tagEs.addEventListener('click', function (e) {
    let el = e.target.dataset.lang;
    TranslateHtmlHandler(el);
    document.cookie = "translate=es";

    let langEs = document.querySelectorAll('.lang-es')
    for (let i = 0; i < langEs.length; i++) {
        langEs[i].classList.remove('hiden')
        langEs[i].classList.add('active')
    }
    let langEn = document.querySelectorAll('.lang-en')
    for (let i = 0; i < langEn.length; i++) {
        langEn[i].classList.remove('active')
        langEn[i].classList.add('hiden')
    }
    // window.location.reload();
})
let tagEn = document.querySelector('.language__img-en')
tagEn.addEventListener('click', function (e) {
    let el = e.target.dataset.lang;
    TranslateHtmlHandler(el);
    document.cookie = "translate=en";

    let langEs = document.querySelectorAll('.lang-es')
    for (let i = 0; i < langEs.length; i++) {
        langEs[i].classList.remove('active')
        langEs[i].classList.add('hiden')
    }
    let langEn = document.querySelectorAll('.lang-en')
    for (let i = 0; i < langEn.length; i++) {
        langEn[i].classList.remove('hiden')
        langEn[i].classList.add('active')
    }
    // window.location.reload();
})


function TranslateHtmlHandler(code) {
    /* Получаем язык на который переводим и производим необходимые манипуляции с DOM */
    if (document.querySelector('[data-lang="' + code + '"]') !== null) {
        document
            .querySelector('[data-lang="' + code + '"]')
            .classList.add("language__img_active");
    }

    if (code == "en") {
        let langEs = document.querySelectorAll('.lang-es')
        for (let i = 0; i < langEs.length; i++) {
            langEs[i].classList.remove('active')
            langEs[i].classList.add('hiden')
        }
        let langEn = document.querySelectorAll('.lang-en')
        for (let i = 0; i < langEn.length; i++) {
            langEn[i].classList.remove('hiden')
            langEn[i].classList.add('active')
        }
    }

    if (code == "es") {
        let langEs = document.querySelectorAll('.lang-es')
        for (let i = 0; i < langEs.length; i++) {
            langEs[i].classList.remove('hiden')
            langEs[i].classList.add('active')
        }
        let langEn = document.querySelectorAll('.lang-en')
        for (let i = 0; i < langEn.length; i++) {
            langEn[i].classList.remove('active')
            langEn[i].classList.add('hiden')
        }
    }
}




/* Перезагружаем страницу */
// window.location.reload();