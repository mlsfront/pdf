/*menu*/
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

document.querySelector('#menu-btn').addEventListener('click', function() {
    //console.log("Menu");

    document.querySelector('#menu-site').classList.toggle("active");
    document.querySelector('#menu-icon').classList.toggle("active");
});
/*fim menu*/

/*copiar codigo*/
function copyC1() {
    var texto = document.querySelector(".c1");
    var selecionar = document.createRange();
    selecionar.selectNodeContents(texto);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(selecionar);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();
}
function copyC2() {
    var texto = document.querySelector(".c2");
    var selecionar = document.createRange();
    selecionar.selectNodeContents(texto);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(selecionar);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();
}
/*fim copiar codigo*/