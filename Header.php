<?php
/**
 * Summary of Header
 */
class Header {
    /**
     * Summary of mostrarHeader
     * @return void
     */
    public function mostrarHeader() {
        // Imprime la estructura básica de un documento HTML con el encabezado y los estilos
        echo '<!DOCTYPE html>
              <html lang="es">
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Centro de Formación Profesional</title>
                <!-- Enlace a Bootstrap desde su repositorio remoto -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
                
                <!-- Estilos personalizados -->
                <style>
                    body {
                        margin-bottom: 70px; /* Ajusta la altura del footer fijo */
                        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; /* Utiliza Helvetica como tipografía predeterminada */
                    }
                    .footer {
                        position: fixed;
                        bottom: 0;
                        width: 100%;
                        background-color: #343a40; /* Color de fondo del footer */
                        color: white; /* Color del texto del footer */
                        padding: 10px 0; /* Espaciado interno del footer */
                    }
                    .navbar-custom {
                        background-color: #37541d !important; /* Cambia el color de fondo del encabezado a blanco */
                        color: #343a40 !important; /* Cambia el color del texto del encabezado a oscuro */
                        padding: 15px 0; /* Ajusta el espaciado interno del encabezado */
                    }
                    .navbar-custom .navbar-nav .nav-link {
                        color: #ffffff !important; /* Cambia el color del texto del menú a oscuro */
                    }
                    
                    /* Estilos adicionales para personalizar el carrusel */
                    #carrusel-container {
                        margin-top: 50px;
                    }
                    .carousel-inner {
                        position: relative;
                        width: 100%;
                        overflow: hidden;
                        height: 150px;
                    }
                </style>
              </head>
              <body>';
        
        // Imprime el encabezado con la barra de navegación y el logotipo
        echo '<header class="container-fluid navbar-custom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <a href="Principal.php"><img src="https://paucasesnovescifp.cat/wp-content/uploads/2023/11/cropped-logo_PAU_AENOR_OK.png" alt="Logo del Pau" class="img-fluid" style="max-height: 50px;"></a>
                        </div>
                        <div class="col-6 text-end">
                            <nav class="navbar navbar-expand-lg navbar-dark">
                                <div class="container-fluid">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Inici</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Centre</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Oferta formativa</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Alumnat</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Profesorat</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Contacte</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
              </header>';
        
        // Imprime el carrusel con imágenes
        echo '<div class="container" id="carrusel-container">
    <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.freepik.com/free-vector/template-banner-online-store-with-shopping-cart-with-purchases-boxes-delivery-from-supermarket-vector-illustration_548887-104.jpg?w=2000&t=st=1701788835~exp=1701789435~hmac=d35b956865746e2f32a7e1b93733a0614acb1eb01e9180747eb1bac78024eb0e" class="d-block w-100" alt="Imagen 1" style="margin-top:-200px">
            </div>
            <div class="carousel-item">
                <img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX31859615.jpg" class="d-block w-100" alt="Imagen 2" style="margin-top:-100px">
            </div>
            <div class="carousel-item">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/004/299/815/small/online-shopping-on-phone-buy-sell-business-digital-web-banner-application-money-advertising-payment-ecommerce-illustration-search-vector.jpg" class="d-block w-100" alt="Imagen 3" style="margin-top:-200px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>';
    }
}

// Crea una instancia de la clase Header y llama al método mostrarHeader
$header = new Header();
$header->mostrarHeader();

?>
