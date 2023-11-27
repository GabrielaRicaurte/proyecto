// let svg = document.querySelectorAll(".svg-icon-item");
let svg = document.querySelectorAll(".svg-icon-item");

function mostrarEfecto() {
    let scrollTop = document.documentElement.scrollTop;
    for (let i = 0; i < svg.length; i++ ) {
        let alturaAnimado = svg[i].offsetTop;
        if(alturaAnimado - 500 < scrollTop){
            // svg[i].style.stroke= "#ff6512d4";
            // svg[i].classList.add("bg-dark")
        }
    }
}

window.addEventListener('scroll', mostrarEfecto);
