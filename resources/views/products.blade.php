<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abarrotes Olán</title>
        <link rel="stylesheet" href="{{ asset('css/products.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
<body>
    <header>
        <div class="menu container">
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="imag/abarrotes.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <div class="menu-1">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <img class="logo-2" src="imag/logos.png" alt="">
                <div class="menu-2">
                    <div class="socials">
                        <a href="#">
                            <div class="icons1">
                                <div class="bx bx-search-alt-2" id="search-btn"></div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="icons1">
                                <div class="bx bx-user" id="login-btn" onclick="opneModal()"></div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="icons1">
                                <div class="bx bx-cart" id="carrito.btn"></div>
                            </div>
                        </a>
                        <ul>
                            <li><a href="#">Horario</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="sectionBanner">
        <div>
            <img class="banner" src="imag/banner.png" alt="">

        </div>


    </section>

    <main>
        <aside>
            <h2>Filtrar</h2>
            <div class="filter-section">
                <label>
                    <input type="checkbox"> Descuentos
                </label>
            </div>
            <div class="filter-section">
                <h3>Categoría</h3>
                <ul>
                    <li><a href="#">Refrescos</a></li>
                    <li><a href="#">Agua</a></li>
                    <li><a href="#">Lácteos</a></li>
                    <li><a href="#">Bebidas Alcohólicas</a></li>
                    <li><a href="#">Jugos y Néctares</a></li>
                    <li><a href="#">Bebidas Vegetales</a></li>
                    <li><a href="#">Bebidas Energéticas e Hidratantes</a></li>
                    <li><a href="#">Café y Té</a></li>
                    <li><a href="#">Hogar y Limpieza</a></li>
                    <li><a href="#">Despensa</a></li>
                    <li><a href="#">Cuidado e Higiene Personal</a></li>
                </ul>
            </div>
        </aside>

        <section class="products">
            <h1>Productos</h1>
            <div class="products-grid">
                <div class="product-card">
                    <img src="imag/marmol.jpg" alt="Producto 1">
                    <h3>Agua Purificada Ciel Garrafón de 20 L Retornable</h3>
                    <p>Desde <strong>$36.00</strong></p>
                    <button>Agregar</button>
                </div>
                <div class="product-card">
                    <img src="imag/pan tostado.jpg" alt="Producto 2">
                    <h3>Agua Purificada Retornable Ciel Garrafón 20 L</h3>
                    <p>Desde <strong>$42.00</strong></p>
                    <button>Agregar</button>
                </div>
                <!-- Repite el bloque de card para más productos -->
            </div>
        </section>
    </main>
</body>
</html>
