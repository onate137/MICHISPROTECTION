<!DOCTYPE html>
<html lang="es">

<head>
    <!--============== BUEH EL INICIO DE TODO QUE NO SE VE PARA EL CLIENTE PA ================-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperatura</title>
    <link rel="stylesheet" href="css/temperatura.css">
    <link rel="shortcut icon" href="img/corazon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b1e4374abd.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">

    <!--<script src="https://kit.fontawesome.com/b1e4374abd.js" crossorigin="anonymous"></script> *AUN NO SÉ SI USARLO* -->
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
            <h1>Manten la temperatura ideal</h1>
            <h2>¡Observa la temperatura de tu hogar!</h2>
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

        <div class="love">
            <input id="switch" type="checkbox">
            <label class="love-heart" for="switch">
                <i class="left"></i>
                <i class="right"></i>
                <i class="bottom"></i>
                <div class="round"></div>
            </label>
        </div>

        <div id="main-container">

            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Temperatura</th>
                    </tr>
                </thead>

                <tr>
                    <td>25/04/2021</td>
                    <td>15:06</td>
                    <td>20°C</td>
                </tr>
                <tr>
                    <td>19/05/2021</td>
                    <td>08:54</td>
                    <td>11°C</td>
                </tr>
                <tr>
                    <td>15/07/2021</td>
                    <td>16:30</td>
                    <td>16°C</td>
                </tr>
                <tr>
                    <td>20/09/2021</td>
                    <td>15:56</td>
                    <td>25°C</td>
                </tr>
                <tr>
                    <td>27/12/2021</td>
                    <td>18:16</td>
                    <td>29°C</td>
                </tr>
                <tr>
                    <td>16/01/2022</td>
                    <td>17:47</td>
                    <td>33°C</td>
                </tr>
                <tr>
                    <td>18/02/2022</td>
                    <td>14:31</td>
                    <td>37°C</td>
                </tr>
                <tr>
                    <td>26/04/2022</td>
                    <td>20:36</td>
                    <td>14°C</td>
                </tr>
            </table>
        </div>


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
                            <p>Más gatitos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/gato___.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/corazon.png" alt="">
                            <p>Más gatitos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/gato__.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/corazon.png" alt="">
                            <p>Más gatitos</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--============== INFORMACIÓN PARA GENERAR CONFIANZA CON EL CLIENTE O BUENO NI IDEA ================-->
        <!-- Mascotas / Estado / Función -->

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