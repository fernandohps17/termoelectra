<?php
session_start();
require_once "./comons/version_css_js.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#323232">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriend" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="description" content="En Termoelectra servicio tecnico de refrigereación">

    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="stylesheet" href="/public/css/cookies.css">
    <link rel="stylesheet" href="/public/css/modal.css">
    <link rel="stylesheet" href="/public/css/modal_proteccion.css">
    <link rel="canonical" href="https://www.termoelectra.com/">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">
    <title>Termoelectra</title>
</head>

<body>
    <header>
        <?php
        require_once "./comons/bar_top.php";
        require_once "./comons/nav.php";
        require_once "./comons/btn_top.php";
        ?>

        <!-- Seccion del header -->
        <div class="banner">
            <div class="header" id="header">
                <h1 id="title">Frío Comercial</h1><br>
                <p id="subtitle">Soluciones de refrigeración:</p>
                <div id="list">
                    <ul class="header_list">
                        <li>Comercios</li>
                        <li>Supermercados</li>
                        <li>Hipermercados</li>
                    </ul>
                </div><br>
                <span id="span">"Disponemos de un <b>equipo de servicio técnico</b> <br> propio para la reparación"</span>
            </div>
            <div class="header_img" id="header_img">
                <picture>
                    <source id="sourceMobile" media="(max-width: 1100px)" srcset="/public/img/banner01-termolectra-frio-comercial-mobile.webp">
                    <source id="sourceDes" type='image/webp' srcset="/public/img/banner01-termolectra-frio-comercial.webp">
                    <img id="imageDes" class="imageSlider" src="/public/img/banner01-termolectra-frio-comercial.webp" alt="Termolectra" title="Termoelectra" width="100" height="100">
                </picture>
            </div>
            <div class="arrow_right" id="arrow_right">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                    <path d="m18.75 36-2.15-2.15 9.9-9.9-9.9-9.9 2.15-2.15L30.8 23.95Z" />
                </svg>
            </div>
            <div class="arrow_left" id="arrow_left">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                    <path d="M28.05 36 16 23.95 28.05 11.9l2.15 2.15-9.9 9.9 9.9 9.9Z" />
                </svg>
            </div>
        </div>
    </header>

    <main>
        <!-- SECTION ABOUT -->
        <div class="container" id="somos">
            <div class="content">
                <section class="section_about">
                    <header class="section_about_title">
                        <h2>Quienes somos</h2>
                    </header>
                    <p>Somos una empresa especializada en <span>Refrigeración industrial, Refrigeración Comercial y Climatización.</span></p>
                    <p>Confía en nuestro equipo de profesionales dedicados y apasionados por los oficios de frío y las instalaciones térmicas. Contamos con las homologaciones propias de la generalidad de Cataluña, garantizando así nuestro compromiso con la calidad y profesionalidad en cada proyecto que realizamos.</p>
                    <div class="section_about_span">
                        <p>Nuestra misión es desarrollar nuestra actividad basándonos en la calidad, profesionalidad y experiencia.</p>
                    </div>

                    <div class="section_about_grilla">
                        <div class="section_about_grilla_map">
                            <div class="section_about_grilla_map_content">
                                <p>En Termoelectra ofrecemos nuestros servicios principalmente:</p><br>
                                <ul class="section_about_list">
                                    <li>Vallés oriental</li>
                                    <li>Vallés occidental</li>
                                    <li>Maresme</li>
                                    <li>Barcelona Provincia</li>
                                </ul>
                            </div>
                            <div class="section_about_grilla_map_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/mapa-termoelectra-cataluna.jpg">
                                    <img class="image" src="/public/img/default.png" data-img="./public/img/mapa-termoelectra-cataluna.webp" alt="Mapa cataluña" title="Mapa cataluña" width="100" height="100">
                                </picture>
                            </div>
                        </div>
                        <div class="section_about_grilla_client">
                            <p>Estamos homologados por:</p>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="./public/img/default.png" data-img="./public/img/logo-generalidad-cataluna-termoelectra.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/logo-generalidad-cataluna-termoelectra.webp" alt="Logo generalidad cataluña" title="Logo generalidad cataluña" width="100" height="100">
                            </picture>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- SECTION SERVICES -->
        <div class="container bg_services" id="servicios">
            <div class="content">
                <div class="services">
                    <section class="services_title">
                        <header>
                            <h2>SERVICIOS</h2>
                        </header>
                    </section>

                    <!-- ARTICULO DE FRIO COMERCIAL -->
                    <div class="services_article">
                        <section class="services_article_title">
                            <header class="header_spacing">
                                <div class="services_article_title_top" id="comercial">
                                    <h2>FRÍO COMERCIAL</h2>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/icon/flecha-titulo-der.png">
                                        <img class="image" src="/public/img/default.png" data-img="./public/icon/flecha-titulo-der.webp" alt="FLECHA FRIO COMERCIAL" title="FLECHA FRIO COMERCIAL" width="100" height="100">
                                    </picture>
                                </div>
                                <p>Ofrecemos <b>soluciones de refrigeración de alta calidad</b> para comercios, supermercados e hipermercados. Desde tiendas pequeñas hasta grandes hipermercados, en Termoelectra estamos comprometidos con brindar el mejor servicio para sus equipos de refrigeración. Contamos con un equipo técnico especializado en la reparación de todo tipo de equipos de refrigeración, respaldado por los principales fabricantes para garantizar el <b>uso de recambios originales y de primera calidad.</b> </p>
                                <p>Nuestros clientes principales incluyen cadenas de supermercados, empresas de alimentación, pequeñas tiendas y franquicias, entre otros. </p>
                                <span>Confíe en nosotros para satisfacer todas sus necesidades de refrigeración comercial con soluciones eficientes.</span>
                            </header>
                            <picture class="picture-defer show_grid_2">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/termoelectra-imagen-frio-comercial.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/termoelectra-imagen-frio-comercial.webp" alt="FRIO COMERCIAL" title="FRIO COMERCIAL" width="100" height="100">
                            </picture>
                        </section>
                    </div><br>

                    <!-- ARTICULO DEL FRIO INDUSTRIAL -->
                    <div class="services_article">
                        <section class="services_article_title">
                            <picture class="picture-defer show_grid show_grid_1 show_img grid_grilla">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/termoelectra-imagen-frio-industrial.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/termoelectra-imagen-frio-industrial.webp" alt="FRIO INDUSTRIAL" title="FRIO INDUSTRIAL" width="100" height="100">
                            </picture>
                            <header class="header_spacing">
                                <div class="show_article_title">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/icon/flecha-titulo-izq.png">
                                        <img class="image" src="/public/img/default.png" data-img="./public/icon/flecha-titulo-izq.webp" alt="FLECHA FRIO INDUSTRIAL" title="FLECHA FRIO INDUSTRIAL" width="100" height="100">
                                    </picture>
                                    <h2 id="industrial">FRÍO INDUSTRIAL</h2>
                                </div>
                                <p>Ofrecemos servicios especializados en el <b>mantenimiento, instalación y reparación de sistemas de refrigeración para naves industriales.</b> Nuestro equipo de expertos se encarga de plantas enfriadoras, hornos de secado y climatización mediante enfriamiento adiabático. Sabemos lo crucial que es la refrigeración en los procesos de producción y nos comprometemos a brindar soluciones rápidas y eficientes.</p>
                                <p>Con nuestro <b>servicio de asistencia técnica (SAT)</b> propio, garantizamos una respuesta en menos de 24 horas para minimizar cualquier interrupción en tu producción. Confía en nuestra experiencia y en la calidad de nuestros servicios para mantener tus operaciones industriales funcionando de manera óptima. </p>
                            </header>
                        </section>
                    </div><br>

                    <!-- ARTICULO DE CLIMATIZACION -->
                    <div class="services_article">
                        <section class="services_article_title">
                            <header class="header_spacing">
                                <div class="services_article_title_top">
                                    <h2 id="climatizacion">CLIMATIZACIÓN</h2>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/icon/flecha-titulo-der.png">
                                        <img class="image" src="/public/img/default.png" data-img="./public/icon/flecha-titulo-der.webp" alt="FLECHA FRIO COMERCIAL" title="FLECHA FRIO COMERCIAL" width="100" height="100">
                                    </picture>
                                </div>
                                <p>Realizamos proyectos e instalaciones tanto para empresas como particulares. Abarcando hospitales, oficinas, restaurantes, gimnasios, etc., siempre pensando en la eficiencia energética y futuro mantenimiento.
                                    Una vez realizada la instalación, nos encargamos de todas las legalizaciones, dando a nuestros clientes la tranquilidad de que su instalación cumple todas las normativas actuales.
                                    Nuestro personal técnico posee un alto conocimiento del sector, pudiendo reparar cualquier tipo de marca.
                                </p>
                                <span>Dando un servicio rápido y de calidad.</span>
                            </header>
                            <picture class="picture-defer show_grid_2">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/termoelectra-imagen-climatizacion.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/termoelectra-imagen-climatizacion.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>
                        </section>
                    </div><br>

                    <!-- SECTION DE INSTALACION DEL AIRE ACONDICIONADO -->
                    <section class="section_install_title">
                        <header>
                            <h2>Instalación de aire acondicionado: soluciones personalizadas y de alta calidad</h2>
                        </header>
                        <div class="section_install_grilla">
                            <div class="section_install_grilla_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="./public/img/termoelectra-imagen-instalacion-aire-acondicionado.jpg">
                                    <img class="image" data-img="./public/img/termoelectra-imagen-instalacion-aire-acondicionado.webp" alt="instalacion de aire acondicionado" title="instalacion de aire acondicionado" width="100" height="100">
                                </picture>
                            </div>
                            <div class="section_install_grilla_content">
                                <p>Instalación de aire acondicionado: soluciones personalizadas y de alta calidad ¿Necesitas mantener tu hogar o negocio fresco? En Termoelectra ofrecemos servicios de instalación de aire acondicionado adaptados a tus necesidades. Nuestro equipo de técnicos cualificados instala sistemas de aire acondicionado en diferentes espacios, brindando soluciones personalizadas para un ambiente fresco y confortable todo el año.<br>
                                    Trabajamos con una amplia gama de sistemas.
                                </p>
                                <ul>
                                    <li>Unidades de ventana</li>
                                    <li>Sistema split (de pared o techo)</li>
                                    <li>Aire acondicionado central</li>
                                    <li>Sistemas de aire acondicionado por conductos</li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <header>
                            <h2>¿Cómo funciona el servicio de instalación de aire acondicionado?</h2>
                        </header>
                        <div class="section_install_grilla_content">
                            <p>Dinos qué necesitas rellenando el formulario que encontrarás justo debajo. <br> Estamos disponibles 24 horas al día los 364 días del año.</p>
                        </div>

                        <!-- SECTION DE LOS ICONOS CON SU CONTENIDO -->
                        <div class="section_icon">
                            <div class="section_icon_article">
                                <div class="section_icon_article_img">
                                    <span>1.</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M4 7h11v2H4zm0 4h11v2H4zm0 4h7v2H4zm15.299-2.708-4.3 4.291-1.292-1.291-1.414 1.415 2.706 2.704 5.712-5.703z"></path>
                                    </svg>
                                    <div class="doble_flecha">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="./public/icon/doble_flecha.png">
                                            <img class="image" data-img="./public/icon/doble_flecha.webp" alt="doble flecha" title="doble flecha" width="100" height="100">
                                        </picture>
                                    </div>
                                </div>
                                <p><b>Consulta inicial:</b> Para obtener un presupuesto personalizado en poco tiempo, simplemente completa el formulario en línea de nuestra consulta inicial y nuestros expertos se pondrán en contacto contigo.</p>
                            </div>
                            <div class="section_icon_article">
                                <div class="section_icon_article_img">
                                    <span>2.</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M7 14.001h2v2H7z"></path>
                                        <path d="M19 2h-8a2 2 0 0 0-2 2v6H5c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2zM5 20v-8h6v8H5zm9-12h-2V6h2v2zm4 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V6h2v2z"></path>
                                    </svg>
                                    <div class="doble_flecha">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="./public/icon/doble_flecha.png">
                                            <img class="image" data-img="./public/icon/doble_flecha.webp" alt="doble flecha" title="doble flecha" width="100" height="100">
                                        </picture>
                                    </div>
                                </div>
                                <p><b>Evaluación del espacio:</b> Programamos una visita para evaluar y encontrar la solución ideal de aire acondicionado. Nuestros técnicos expertos aseguran una instalación precisa mediante mediciones y análisis detallados. </p>
                            </div>
                            <div class="section_icon_article">
                                <div class="section_icon_article_img">
                                    <span>3.</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M8 12.052c1.995 0 3.5-1.505 3.5-3.5s-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5 1.505 3.5 3.5 3.5zM9 13H7c-2.757 0-5 2.243-5 5v1h12v-1c0-2.757-2.243-5-5-5zm9.364-10.364L16.95 4.05C18.271 5.373 19 7.131 19 9s-.729 3.627-2.05 4.95l1.414 1.414C20.064 13.663 21 11.403 21 9s-.936-4.663-2.636-6.364z"></path>
                                        <path d="M15.535 5.464 14.121 6.88C14.688 7.445 15 8.198 15 9s-.312 1.555-.879 2.12l1.414 1.416C16.479 11.592 17 10.337 17 9s-.521-2.592-1.465-3.536z"></path>
                                    </svg>
                                    <div class="doble_flecha">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="./public/icon/doble_flecha.png">
                                            <img class="image" data-img="./public/icon/doble_flecha.webp" alt="doble flecha" title="doble flecha" width="100" height="100">
                                        </picture>
                                    </div>
                                </div>
                                <p><b>Selección del equipo:</b> Basándonos en la evaluación del espacio y tus necesidades, te recomendaremos el sistema de aire acondicionado ideal. Te proporcionaremos información completa sobre marcas, modelos y características para que puedas tomar una decisión informada. </p>
                            </div>
                            <div class="section_icon_article">
                                <div class="section_icon_article_img">
                                    <span>4.</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                                        <path d="M14.829 14.828a4.055 4.055 0 0 1-1.272.858 4.002 4.002 0 0 1-4.875-1.45l-1.658 1.119a6.063 6.063 0 0 0 1.621 1.62 5.963 5.963 0 0 0 2.148.903 6.042 6.042 0 0 0 2.415 0 5.972 5.972 0 0 0 2.148-.903c.313-.212.612-.458.886-.731.272-.271.52-.571.734-.889l-1.658-1.119a4.017 4.017 0 0 1-.489.592z"></path>
                                        <circle cx="8.5" cy="10.5" r="1.5"></circle>
                                        <circle cx="15.493" cy="10.493" r="1.493"></circle>
                                    </svg>
                                </div>
                                <p><b>Instalación profesional:</b> Nuestros técnicos instalarán el equipo de manera eficiente y precisa. Nos aseguraremos de que todos los componentes estén conectados y funcionando correctamente. También te brindaremos instrucciones claras sobre el uso y mantenimiento del nuevo sistema de aire acondicionado. </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>


        <!-- SECTION CONTACTO -->
        <div class="form">

            <div class="form_img">
                <picture class="picture-defer">
                    <source id="sourceMobile" media="(max-width: 700px)" srcset="/public/img/termoelectra-imagen-contacto-mobile.webp">
                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/termoelectra-imagen-contacto.webp">
                    <img class="image" src="/public/img/default.png" data-img="./public/img/termoelectra-imagen-contacto.webp" alt="Imagen Contacto" title="Imagen Contacto" width="100" height="100">
                </picture>
            </div>

            <div class="form_info" id="contacto">
                <section class="form_info_title">
                    <header>
                        <h2>CONTACTO</h2>
                    </header>
                    <div class="form_info_numeros">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            Teléfono:
                        </p>
                        <a href="tel:938701977" onclick="gtag('event', 'telefonos')">
                            93 870 19 77 <span>|</span>
                        </a>
                        <a href="tel:651097393" onclick="gtag('event', 'telefonos')">
                            651 09 73 93
                        </a>
                    </div>
                </section>

                <p>Rellene este formulario y nos pondremos en contacto con usted lo antes posible</p>


                <form action="/contact/" method="POST">
                    <label class="nombre">
                        <p>Nombre:</p>
                        <input type="text" name="name" required>
                    </label>
                    <div class="email">
                        <label>
                            <p>Email:</p>
                            <input type="email" name="email" required>
                        </label>
                        <label class="telefono">
                            <p>Teléfono:</p>
                            <input type="tel" name="phone" required>
                        </label>
                    </div>
                    <label>
                        <p>Mensaje:</p>
                        <textarea name="mensaje" id="" cols="" rows="5"></textarea>
                    </label>

                    <div class="check">
                        <label class="check_input">
                            <input type="checkbox" required>
                            <p>He leído y aceptado el <span class="modal_active consentimieto">Consentimiento Web</span></p>
                        </label>
                    </div>

                    <div class="check">
                        <label class="check_input">
                            <input type="checkbox" required>
                            <p>He leído y aceptado la <a target="_blank" href="/politicas-privacidad/">Política de Privacidad</a>.</p>
                        </label>
                    </div>
                    <div class="button">
                        <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response">
                        <button type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- SECTION DE MANTENIMIENTO -->
        <div class="container">
            <div class="content">

                <!-- ARTICULO DEL FRIO MANTENIMIENTO -->
                <div class="services_article"><br><br>
                    <section class="services_article_title">
                        <picture class="picture-defer show_grid show_grid_1 show_img">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/termoelectra-imagen-mantenimiento.jpg">
                            <img class="image" src="/public/img/default.png" data-img="./public/img/termoelectra-imagen-mantenimiento.webp" alt="mantenimiento" title="mantenimiento" width="100" height="100">
                        </picture>
                        <header class="header_spacing">
                            <div class="show_article_title">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/icon/flecha-titulo-izq.png">
                                    <img class="image" src="/public/img/default.png" data-img="./public/icon/flecha-titulo-izq.webp" alt="FLECHA MANTENIMIENTI" title="FLECHA MANTENIMIENTO" width="100" height="100">
                                </picture>
                                <h2 id="mantenimiento">MANTENIMIENTO</h2>
                            </div>
                            <p>El primer objetivo del mantenimiento es evitar las consecuencias de los fallos del equipo, logrando <b>prevenir las incidencias antes de que estas ocurran.</b> Las tareas de mantenimiento preventivo pueden incluir acciones como cambio de piezas desgastadas, cambios de aceites y lubricantes, etc. El mantenimiento preventivo debe evitar los fallos en el equipo antes de que estos ocurran.</p>
                            <p>Algunos de los métodos más habituales para determinar que procesos de mantenimiento preventivo deben llevarse a cabo son las recomendaciones de los fabricantes, la legislación vigente, las recomendaciones de expertos y las acciones llevadas a cabo sobre activos similares.</p>
                            <p><b>Realizamos mantenimientos integrales</b>, adaptados a las normativas vigentes. Asesorando a nuestros clientes de posibles mejoras o modificaciones que, por normativa o necesidad, pudiese haber.</p>
                        </header>
                    </section>
                </div><br>

                <!-- ARTICULO DE SAT -->
                <div class="services_article">
                    <section class="services_article_title">
                        <header class="header_spacing">
                            <div class="services_article_title_top">
                                <h2 id="sat">SAT</h2>
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/icon/flecha-titulo-der.png">
                                    <img class="image" src="/public/img/default.png" data-img="./public/icon/flecha-titulo-der.webp" alt="FLECHA SAT" title="FLECHA SAT" width="100" height="100">
                                </picture>
                            </div>
                            <p>Nuestro servicio técnico propio está a su disposición para cualquier imprevisto, así mismo respaldado siempre por el SAT oficial de las marcas con las cuales trabajamos.
                                24h al día / 365 días al año damos una respuesta técnica rápida y eficaz con los mínimos inconvenientes al cliente.
                            </p>
                            <p>Nuestras certificaciones:</p>
                            <p>En <b>Termoelectra</b> disponemos de todas las certificaciones que nos habilitan como empresa profesional para realizar instalaciones, mantenimiento o reparaciones.</p>
                            <p><b class="show_b">REITE</b> empresa instaladora, mantenedora de instalaciones térmicas en edificios.</p>
                            <p><b class="show_b">REIF</b> Empresa instaladora - mantenedora de frío industrial Nivel 2.</p>
                            <p><b class="show_b">IGII - B</b> Empresa instaladora de gas en instalaciones comunes en edificios.</p>
                            <p>Manipulación de Gases fluorádos Todas las cargas. <b class="show_b">RASIC 00500538.</b></p>
                        </header>
                        <picture class="picture-defer show_grid_2">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/termoelectra-imagen-sat.jpg">
                            <img class="image" src="/public/img/default.png" data-img="./public/img/termoelectra-imagen-sat.webp" alt="Sat" title="Sat" width="100" height="100">
                        </picture>
                    </section>
                </div><br>
            </div>
        </div>

        <!-- SECCION DE ALIADOS -->
        <div class="container bg_aliados">
            <div class="content">
                <div class="aliados">
                    <section class="aliados_title">
                        <header>
                            <h2>NUESTRAS MARCAS</h2>
                        </header>
                    </section>
                    <div class="aliados_img">
                        <div class="aliados_img_column">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/baxi.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/baxi.webp" alt="Logo Baxi" title="Logo Baxi" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/budenus.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/budenus.webp" alt="Logo Budenus" title="Logo Budenus" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/climaveneta.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/climaveneta.webp" alt="Logo Climaveneta" title="Logo Climaveneta" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/daikin.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/daikin.webp" alt="Logo Daikin" title="Logo Daikin" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/ferroli.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/ferroli.webp" alt="Logo Ferroli" title="Logo Ferroli" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/fujitsu.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/fujitsu.webp" alt="Logo Fujitsu" title="Logo Fujitsu" width="100" height="100">
                            </picture>
                        </div>

                        <div class="aliados_img_column">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/general.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/general.webp" alt="Logo General" title="Logo General" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/junkers.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/junkers.webp" alt="Logo Junkers" title="Logo Junkers" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/lennox.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/lennox.webp" alt="Logo Lennox" title="Logo Lennox" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/mitsubishi.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/mitsubishi.webp" alt="Logo Mitsubishi" title="Logo Mitsubishi" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/saurem.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/saurem.webp" alt="Logo Saunier Duval" title="Logo Saunier Duval" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/marcas/trane.png">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/marcas/trane.webp" alt="Logo de Trane" title="Logo de Trane" width="100" height="100">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- GALLERY -->
        <div class="container bg_gallery">
            <div class="content">

                <div class="gallery_father grid_father">
                    <div class="gallery_son grid_son">
                        <section class="gallery-title">
                            <header>
                                <h2 id="galeria">GALERÍA</h2>
                            </header>
                            <p>Aquí puedes ver algunos de nuestros trabajos</p>
                        </section>

                        <!-- Gallery -->
                        <div class="ful-img" id="containerShowImage">
                            <picture>
                                <source id="fullSource" type='img/webp' srcset="/public/img/default.png">
                                <img id="fullImg" src="/public/img/default.png" alt="Termoelectra" title="Termoelectra" width="100" height="100">
                            </picture>
                            <span id="closeShowImage">X</span>
                        </div>

                        <div class="img-gallery" id="galery">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria1.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria1.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>

                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria2.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria2.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>

                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria3.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria3.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>

                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria4.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria4.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>

                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria5.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria5.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>

                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria6.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria6.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>

                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria7.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria7.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>

                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria8.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria8.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>

                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria9.jpg">
                                <img class="image" src="/public/img/default.png" data-img="./public/img/GALERIA/termoelectra-imagen-galeria9.webp" alt="CLIMATIZACION" title="CLIMATIZACION" width="100" height="100">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PREGUNTAS FRECUENTES -->
        <div class="container">
            <div class="content">
                <div class="section_faqs">
                    <section class="section_faqs_title">
                        <header>
                            <h2 id="faqs">Preguntas Frecuentes</h2>
                        </header>
                    </section>

                    <div class="FAQs" itemscope itemtype="https://schema.org/FAQPage">
                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">¿Qué tipos de aire acondicionado hay?</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show" itemprop="text">
                                        - Unidades de ventana.<br>
                                        - Sistemas de split (de pared o techo)<br>
                                        - Aire acondicionado central.<br>
                                        - Sistemas de aire acondicionado por conducto.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">¿Tengo hecha la instalación? </h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Evaluaremos la instalación y te daremos un presupuesto detallado.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">¿Qué incluye el presupuesto?</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        -Desplazamiento de un técnico a su domicilio.<br>
                                        -Mano de obra para la realización de la instalación.<br>
                                        -Instalación de la unidad interior y exterior en la ubicación que permita el fácil acceso al servicio técnico.<br>
                                        -Comprobación de funcionamiento y puesta en marcha.<br>
                                        -Servicio realizado según normativa vigente y recomendaciones del fabricante.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">¿Qué no incluye el presupuesto?</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        -Desmontaje de aire acondicionado anterior y retirada para reciclaje (se realiza como servicio adicional con coste)<br>
                                        -Modificación y/o realización de tomas eléctricas.<br>
                                        -Trabajos adicionales de albañilería y pintura.<br>
                                        -Medios auxiliares de sujeción (andamiaje, trabajos en altura)<br>
                                        -Aporte de gas.<br>
                                        -Licencias de obra y permisos comunitarios.<br>
                                        -Ponemos a tu disposición los servicios que necesites previo presupuesto.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Mi aire acondicionado no funciona.</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Nos llamas o nos envías un W. app y coordinamos una visita para evaluar la máquina y tratar
                                        de repararla.
                                        Si no es posible la reparación, el coste se te descontará del presupuesto de sustitución, si fuera
                                        el caso.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">¿Cómo realizo el pago de una instalación de un aire acondicionado? </h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Si el presupuesto es aceptado, se depositará el 50% en cuenta y el 50% al acabar la
                                        Instalación.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Quiero instalar un aire acondicionado.</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Hacemos una primera visita para evaluar la instalación y te pasamos un presupuesto detallado sin sorpresas.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Hace años que no hago el mantenimiento y mi aire acondicionado necesita gas. </h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Si te dicen que necesitas gas en tu aire acondicionado, desconfía.
                                        Al ser el sistema frigorífico un circuito cerrado, si está bien instalado no necesita gas
                                        refrigerante.
                                        Cabe decir que como toda máquina necesita un mantenimiento anual para su correcto
                                        funcionamiento y así evitar futuras averías.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Mi equipo de aire acondicionado no enfría o da calor</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Posiblemente, tengas una avería, el cual podría ser fuga de gas refrigerante, por un poro o
                                        defecto de instalación o una avería eléctrica en la máquina.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">¿Cuánto puede costar instalar un aire acondicionado?</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        No tiene un coste fijo, ni lo puede tener, ya que toda instalación es singular. Depende de la
                                        distancia entre unidad interior y exterior, los metros de tuberías, si tiene las conexiones
                                        eléctricas puestas o no, si es en balcón, etc.
                                        Las grandes superficies lo ofrecen con la venta del aparato, pero nosotros solo montamos
                                        máquinas de nuestros proveedores, los cuales nos ofrecen las garantías de los fabricantes y
                                        además, la garantía de la instalación los damos nosotros de acuerdo a ley.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">¿Cuánto se tarda en montar un aire acondicionado?</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Cada instalación es diferente, por lo que responderemos a todas tus dudas después de la visita.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Mi aire acondicionado huele mal. </h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Posiblemente, tengas moho por falta de mantenimiento y además acumulación de polvo, necesitaría una higienización.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Cae mucha agua de mi aire acondicionado.</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Es posible que tengas una avería en el desagüe del mismo, ya que al condensar no evacúa el
                                        agua, bien por estar taponado el desagüe o porque la bomba de condensados está averiada.
                                        Desconecta el aparato y llámanos, te daremos la mejor solución.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <section class="section_faqs_subtitle">
                            <header>
                                <h3>SAT FRÍO COMERCIAL E INDUSTRIAL</h3>
                            </header>
                        </section>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">La cámara frigorífica no baja de temperatura.</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Puede que tengas una fuga de refrigerante, una avería eléctrica o se haya acumulado hielo en
                                        el evaporador, o la válvula de expansión taponada, etc.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Mi cámara frigorífica no enciende.</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Es posible que tengas una avería eléctrica o mecánica.
                                        Llámanos y evaluaremos y te daremos la mejor solución.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Mi botellero no enfría.</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Tienes una avería que con una visita te daremos la mejor solución, puede que sea una simple
                                        avería que puede llegar a mayores.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">El ventilador de mi máquina hace mucho ruido.</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Puede que haya llegado el momento de sustituirlo, ya que con el tiempo los cojinetes se llenan de polvo y suciedad o porque perdió el engrase.
                                        Ponte en contacto con nosotros y procederemos a sustituirlo.
                                        Es una avería recurrente a la cual no se le da importancia, pero que puede acabar por dañar el
                                        compresor.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="questions_padding">
                            <div class="questions_answer">
                                <div class="questions_title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 itemprop="name">Nuestra enfriadora de agua no funciona en mi proceso industrial.</h2>
                                    <div class="questions_arrow">
                                        <!-- <img src="/public/img/icon/mudanzas-trasteros-guardamuebles-en-malaga.svg" class="questions_img" alt="Empresa Española de Mudanzas" title="Empresa Española de Mudanzas" width="100" height="100"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="questions_img" height="48" viewBox="0 96 960 960" width="48">
                                            <path d="M480 696 280 497h400L480 696Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="questions_show">
                                        Llámanos y nos acercaremos y evaluaremos las posibles averías y te daremos una solución
                                        lo más pronto posible, tenemos en cuenta que los procesos industriales no pueden parar.
                                        Nuestro SAT propio nos permite darte una respuesta rápida.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php
        require_once "./comons/footer.php";
        require_once "./comons/btn_call.php";
        require_once "./comons/cookies.php";
        require_once "./comons/modal.php";
        require_once "./comons/modal_proteccion.php";
        ?>
    </footer>

    <script src="/public/js/menu.js"></script>
    <script src="/public/js/carga_diferida.js"></script>
    <script src="/public/js/slider.js"></script>
    <script src="/public/js/gallery.js"></script>
    <script src="/public/js/questions.js"></script>
    <script src="/public/js/mapa.js"></script>
    <script src="/public/js/btn_call.js"></script>
    <script src="/public/js/recatpcha.js"></script>
    <!-- <script src="/public/js/cookies.js"></script> -->
    <script src="/public/js/modal_proteccion.js"></script>
    <script src="/public/js/modal.js"></script>

</body>

</html>