<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/nav.css">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="src/css/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>FDC CORPORATION</title>
</head>

<body>
    <!-- seccion de navegador -->
    <?php include('./src/vista/nav.php') ?>
    <div class="logo">
        <img src="./src/assets/img/logo.png" alt="">
    </div>
    <!-- seccion de servicios -->
    <section class="servicios">
        <div class="contenedor">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                </svg>
            </div>
            <div class="contenido">
                <h1>Mantenimiento</h1>
                <p>
                    Con muchos años en el negocio, hemos visto muchos modelos, tipos y marcas de equipo que necesitan servicio. Los técnicos de FDC CORP asisten a la capacitación de varias marcas. Nuestros vehículos tienen las piezas necesarias para realizar reparaciones a fin de reducir el costo de incurrir en visitas de retorno.
                </p>
            </div>
        </div>
        <div class="contenedor">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                    <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                </svg>
            </div>
            <div class="contenido">
                <h1>Ingeniería</h1>
                <p>
                    El área de ingeniería de FDC CORP realiza, además de los proyectos y estudios sobre distribución, otros trabajos y actividades de consultoría destinados principalmente a automatización industrial, avalados por el prestigio de FDC CORP. </p>
            </div>
        </div>
        <div class="contenedor">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
            </div>
            <div class="contenido">
                <h1>Venta</h1>
                <p>
                    Puede confiar en el equipo de ventas FDC CORP para ofrecer ideas innovadoras y recomendaciones. Nuestros asesores de ventas no solo entienden todos los aspectos técnicos de nuestro producto, sino que lo más importante es cómo funcionan esos productos y sistemas en diversas aplicaciones.
                    No importa qué tamaño de proyecto o presupuesto, FDC puede proporcionar la solución adecuada.
                </p>
            </div>
        </div>
    </section>
    <!-- seccion de servicios -->
    <div class="enlace-mas">
        <a href="#">Mas Servicios</a>
    </div>
    <div class="servicios-enlace">
        <h3>¿Quieres saber que productos distribuimos?</h3>
        <a href="#">VER PRODUCTOS</a>
    </div>
    <section class="container">
        <div class="seccion-index">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./src/assets/img/Aire-Comprimido-Flyer-768x256.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./src/assets/img/Estacionamiento-Flyer-768x256.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./src/assets/img/Equipos-para-taller-Flyer-768x255.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="seccion-info">
            <div class="texto-seccion-index">
                <h3>
                    kärcher - fdc corp
                </h3>
                <p>
                    Los equipos de limpieza de Kärcher aúnan funcionalidad, facilidad de uso y una estética exigente. La empresa se caracteriza por la innovación y el afán de conseguir la mejor solución, que siempre son galardonados con patentes y reconocimientos de instituciones de renombre. Más de 1300 patentes y modelos registrados confirman el espíritu ingenioso y la potencia innovadora de la empresa.
                </p>
            </div>
            <div class="video-seccion-index">
                <video src="./src/assets/video/FDC-Karcher-Comparación-Hidrolavadoras.mp4" controls controlslist="nodownload"></video>
            </div>
        </div>
    </section>
    <?php include('./src/vista/footer.php') ?>
    <script src="./src/js/main.js"> </script>
    <script src="./src/js/terminos.js"> </script>
</body>

</html>