<!DOCTYPE html>
<html lang="es">

<head>
    <!--============== BUEH EL INICIO DE TODO QUE NO SE VE PARA EL CLIENTE PA ================-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web de Gatos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/corazon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b1e4374abd.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">

</head>

<body>

    <!--============== BARRA DE NAVEGACIÓN================-->

    <header>
        <nav class="navbar">
            <div class="contenedor-navbar">
                <a href="index.php">
                    <span class="icon">
                        <ion-icon name="home"></ion-icon>
                    </span>
                    <span class="text">Inicio</span>
                </a>
                <a href="mascotas.php">
                    <span class="icon">
                        <ion-icon name="fish"></ion-icon>
                    </span>
                    <span class="text">Eventos</span>
                </a>
                <a href="temperatura.php">
                    <span class="icon">
                        <ion-icon name="thermometer"></ion-icon>
                    </span>
                    <span class="text">Temperatura</span>
                </a>
                <a href="pruebas/formulario.php">
                    <span class="icon">
                        <ion-icon name="person-circle"></ion-icon>
                    </span>
                    <span class="text">Perfil</span>
                </a>
            </div>
        </nav>

        
        <!-- WAVE QUE ESTA AL PRINCIPIO DE LA PÁGINA -->
        <div class="wave-move"></div>
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-30.19,10.38 C156.04,97.22 250.84,-23.17 505.92,32.08 L500.00,0.00 L0.00,0.00 Z"
                    style="stroke: none; fill: #6055ac;"></path>
            </svg></div>

        <!--============= TEXTO POR ENCIMA DE LA PORTADA Y EFECTO COLOR =================-->

        <defs>
            <linearGradient id="gradient" x1="1%" y1="41%" x2="99%" y2="59%">
                <stop offset="5%" stop-color="#ffffffff"></stop>
                <stop offset="95%" stop-color="#6055acff"></stop>
            </linearGradient>
        </defs>
        <path
            d="M 0,400 C 0,400 0,200 0,200 C 76.9760765550239,165.43540669856458 153.9521531100478,130.87081339712918 245,148 C 336.0478468899522,165.12918660287082 441.1674641148327,233.95215311004785 550,229 C 658.8325358851673,224.04784688995215 771.3779904306218,145.32057416267943 874,151 C 976.6220095693782,156.67942583732057 1069.3205741626796,246.76555023923447 1162,269 C 1254.6794258373204,291.23444976076553 1347.33971291866,245.61722488038276 1440,200 C 1440,200 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="url(#gradient)"
            class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
        </svg>
        </div>

        <section class="textos-header">
            <h1>Obtén la seguridad que mereces</h1>
            <h2>¡Reserva ya nuestro MICHI PROTECTION!</h2>
        </section>

    </header>
    <main>

        <!--=============== EXPLICACION DEL PRODUCTO A OFRECER // TRABAJO DE LOS GATOS ===============-->
        <div class="wave" style="height: 150px; overflow: hidden">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff"></path>
            </svg>
        </div>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo1">¿En que nos basamos?</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/undraw_sweet_home_dkhr.svg" alt="Person Walking" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><b>MICHI PROTECTION</b></h3>
                    <p>Los gatos son animales que tienen cierta independencia en comparación a otras mascotas, ya que no
                        requieren de un humano para pasear o hacer sus necesidades. Sin embargo, muchas personas los
                        dejan a solas durante el día, ya sea por trabajo o diversos motivos, y dejan las puertas y
                        ventanas de la casa cerradas. El problema, es que a veces la temperatura sube más allá de un
                        valor confortable para las mascotas, por lo que algunos optan por dejar la ventana abierta.
                        Pero no te preocupes, el <b><u>MICHI PROTECTION</u></b> le proporcionará todo lo que usted necesita,
                        encargándose de:
                    </p>
                    <h3><span>1</span>Gestionar la temperatura del Hogar</h3>
                    <p>realizando la apertura de puertas y/o ventanas cuando la temperatura del hogar alcance los <b>25°C</b>, y de cerrarlas cuando la temperatura baje de <b>20°C</b>.</p>
                    <h3><span>2</span>Gestionar los paseos del felino</h3>
                    <p>proporcionando una puerta gatera que se abrirá automáticamente cuando tu gato se acerque a la puerta. </p>
                    <h3><span>3</span>Temperatura</h3>
                    <li>La temperatura más alta registrada es <b>37°C</b></li>
                    <li>La temperatura más baja registrada es <b>16°C</b></li>
                    <li>La temperatura promedio es <b>25°C</b></li>
                    <h3><span>4</span>Eventos</h3>
                    <li>Se han detectado <b>20</b> eventos de temperatura fuera de rango</li>
                    <li>Se han detectdo <b>450</b> eventos de proximidad a la puerta gatera</li>
                    <li>El promedio de eventos por dia es de <b>235</b></li>
                </div>
            </div>
        </section>

        <!--============= FOTOS DE MASCOTAS DEL CLIENTE /*TRATAR DE AÑADIR FUNCIONALIDAD*/ =================-->
        <div class="wave3" style="height: 150px; overflow: hidden">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #6055ac"></path>
            </svg>
        </div>
        <section class="Mascotas">
            <div class="contenedor">
                <h2 class="titulo2">Tus mascotas</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/gatos__.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/corazon.png" alt="">
                            <p>¡Fantástico!</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/gato___.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/corazon.png" alt="">
                            <p>¡Adorable!</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/gato__.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/corazon.png" alt="">
                            <p>¡Hermoso!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave3" style="height: 150px; overflow: hidden">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #fff"></path>
                </svg>
            </div>
        </section>

        <!--============== INFORMACIÓN PARA GENERAR CONFIANZA CON EL CLIENTE O BUENO NI IDEA ================-->

        <section class="clientes contenedor">
            <h2 class="titulo1">Clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/cliente1.gif" alt="">
                    <div class="contenido-texto-card">
                        <h4>Rick Sanchez</h4>
                        <p> "si me hubieran dicho esto antes todo seria diferente" </p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/cliente2.gif" alt="">
                    <div class="contenido-texto-card">
                        <h4>Morty Smith</h4>
                        <p>"El mejor producto para mi querido compañero, no puedo de la emoción"</p>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== MÁS INFORMACIÓN DE NOSOTROS *PONGO CUALQUIER COSA QUE ONDA BROOOOO* ===============-->
        <div class="wave3" style="height: 150px; overflow: hidden">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #f2f2f2"></path>
            </svg>
        </div>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo1">¿Garantías?</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/undraw_walking_outside_re_56xo.svg" alt="">
                        <h3>Temperatura tiempo real</h3>
                        <p>Una sección para ver la temperatura de tu hogar en tiempo real</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/undraw_completing_re_i7ap.svg" alt="">
                        <h3>Activa cuando quieras</h3>
                        <p>Tu decides si dejar nuestro MICHI KIT en modo automatico o manual</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/undraw_starlink_3r0a.svg" alt="">
                        <h3>Seguridad ante todo</h3>
                        <p>Nuestro sistema guarda todos los registros captados para que puedas verificarlos cuando lo necesites.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--============= FINAL DE LA PAGINA // FORMA DE CONTACTO =================-->

    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>+569 1234 5678</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>gatitos.molones@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicación</h4>
                <p>Chile | Valparaíso</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; MortyPh | Esteban Oñate</h2>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>