(() => {
    const sourceMobile = document.getElementById("sourceMobile");
    const sourceDes = document.getElementById("sourceDes");
    const imageDes = document.getElementById("imageDes");

    const title = document.getElementById("title");
    const subtitle = document.getElementById("subtitle");
    const list = document.getElementById("list");
    const span = document.getElementById("span");
    const header = document.getElementById("header");
    const headerImg = document.getElementById("header_img");

    const arrow_right = document.getElementById("arrow_right");
    const arrow_left = document.getElementById("arrow_left");
    const timeInteval = 10000;

    const imagenes = [
        {
            image: "/public/img/banner01-termolectra-frio-comercial.jpg",
            webp: "/public/img/banner01-termolectra-frio-comercial.webp",
            mobile: "/public/img/banner01-termolectra-frio-comercial-mobile.webp",
            title: "Frío Comercial",
            subtitle: "Soluciones de refrigeración:",
            list: "<li>Comercios</li><li>Supermercados</li><li>Hipermercados</li>",
            span: "Disponemos de un <b>equipo de servicio técnico</b> <br> propio para la reparación",
        },
        {
            image: "/public/img/banner02-termolectra-frio-industrial.jpg",
            webp: "/public/img/banner02-termolectra-frio-industrial.webp",
            mobile: "/public/img/banner02-termolectra-frio-industrial-mobile.webp",
            title: "Frío Industrial",
            subtitle: "Soluciones de refrigeración:",
            list: "<ul><li>Mantenimiento</li><li>Instalación</li><li>Reparación</li></ul>",
            span: "Garantizamos una respuesta en menos de 24 horas <br><br> <b>Rápidez, fiabilidad y garantía</b>",
            positionRight: true,
        },
        {
            image: "/public/img/banner03-termolectra-climatizacion.jpg",
            webp: "/public/img/banner03-termolectra-climatizacion.webp",
            mobile: "/public/img/banner03-termolectra-climatizacion-mobile.webp",
            title: "Climatización",
            subtitle: "Trabajamos para empresas y particulares:",
            list: "<ul><li>Nos encargamos de todas las legalizaciones</li><li>Cumplimos con todas las normativas</li></ul>",
            span: '<b>"Reparamos cualquier marca"</b>',
        },
        {
            image: "/public/img/banner04-termolectra-mantenimiento.jpg",
            webp: "/public/img/banner04-termolectra-mantenimiento.webp",
            mobile: "/public/img/banner04-termolectra-mantenimiento-mobile.webp",
            title: "Mantenimiento",
            subtitle: "Con un buen mantenimiento <br> preventivo conseguimos <br> evitar averías costosas",
            list: "",
            span: '<b>"Seguimos las recomendaciones de los <br> fabricantes y aplicamos la legislación vigente"</b>',
            positionRight: true
        },
        {
            image: "/public/img/banner05-termolectra-sat.jpg",
            webp: "/public/img/banner05-termolectra-sat.webp",
            mobile: "/public/img/banner05-termolectra-sat-mobile.webp",
            title: "Sat <br> servicio técnico",
            subtitle: "Disponibles para ti",
            list: "<p> <img src='/public/icon/flecha-banner2.webp'> 24h al día</p><p> <img src='/public/icon/flecha-banner2.webp'> 7 días a la semana</p><p> <img src='/public/icon/flecha-banner2.webp'> 365 días del año</p>",
            span: '<b>"Reparamos cualquier marca"</b>',
        },
    ];

    let indiceImagenes = 0;

    function cambiarImagenes(action = "next") {
        if (action === "next") {
            if (indiceImagenes < imagenes.length - 1) {
                indiceImagenes++;
            } else {
                indiceImagenes = 0;
            }
        } else {
            if (indiceImagenes === 0) {
                indiceImagenes = imagenes.length - 1
            } else {
                indiceImagenes--;
            }
        }

        imageDes.src = imagenes[indiceImagenes].image;
        sourceDes.srcset = imagenes[indiceImagenes].webp;
        sourceMobile.srcset = imagenes[indiceImagenes].mobile;
        title.innerHTML = imagenes[indiceImagenes].title;
        subtitle.innerHTML = imagenes[indiceImagenes].subtitle;
        list.innerHTML = imagenes[indiceImagenes].list;
        span.innerHTML = imagenes[indiceImagenes].span;
        

        if(imagenes[indiceImagenes].positionRight) {
            header.classList.add('show_slider');
            headerImg.classList.add('show_slider_img');
        }else {
            header.classList.remove('show_slider');
            headerImg.classList.remove('show_slider_img');
        }

    }

    arrow_right.addEventListener('click', () => {
        cambiarImagenes()

        clearInterval(myTimer);
        myTimer = window.setInterval(cambiarImagenes, timeInteval);
    });

    arrow_left.addEventListener('click', () => {
        cambiarImagenes("prev")

        clearInterval(myTimer);
        myTimer = window.setInterval(cambiarImagenes, timeInteval);
    });

    let myTimer = window.setInterval(cambiarImagenes, timeInteval);
})();