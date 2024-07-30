<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda de Abarrotes</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <input type="checkbox" name="" id="toggler">
            <label for="toggler" class="fas fa-bars"> </label>

            <a href="#" class="logo">Abarrotes Olán<span>.</span></a>

            <nav class="navbar">
                <a href="#Inicio">Inicio</a>
                <a href="#Información">Información</a>
                <a href="#productos">Productos</a>
                <a href="#review">review</a>
                <a href="#Contactar">Contactar</a>
            </nav>

            <div class="icons">

                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-shopping-cart" id="carrito.btn"></div>
                <div class="fas fa-user" id="login-btn" onclick="openModal()"></div>
            </div>

            <form action="" class="search-form">
                <input type="buscar" id="buscar-box" placeholder="Buscar aquí...">
                <label for="buscar-box" class="fas fa-search"></label>
            </form>

            <div class="shopping-cart"></div>

        </header>

        <section class="Inicio" id="Inicio">
            <div class="content">
                <h3>Tienda de abarrotes</h3>
                <span>Abarrotes Olán</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A mollitia nesciunt necessitatibus porro quae
                    nostrum blanditiis, voluptatibus, vel, fugit cum nihil quo fuga. At architecto numquam possimus
                    recusandae atque molestias.</p>
                <a href="#" class="btn">Compra ahora</a>
            </div>

        </section>



        <!--inicio seccion de iconos-->

        <section class="Información" id="Información">

            <h1 class="heading"> <span> sobre </span> nosotros </h1>

            <div class="row">

                <div class="video-container">
                    <video src="imag/vidio.mp4" loop autoplay muted></video>
                    <h3> El mejor abarrotes</h3>
                </div>

                <div class="content">
                    <h3>¿Por qué nosotros?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit magnam amet ullam dignissimos cupiditate
                        expedita corporis ipsum repellendus, aliquid labore natus ducimus maxime excepturi? Aliquam facilis
                        perferendis ad temporibus ipsa?</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente repudiandae maiores similique
                        aperiam voluptate eum aspernatur perferendis inventore ipsam quos placeat quibusdam, unde doloribus
                        modi aliquid autem. Hic, earum voluptatem.</p>
                    <a href="#" class="btn">Leer más</a>
                </div>

            </div>

        </section>
        <!--fin seccion de informacion-->



        <!--inicio seccion de iconos-->

        <section class="icons-conta">

            <div class="icons">
                <img src="imag/icon1.png" alt="">
                <div class="info">
                    <h3>Envios gratis</h3>
                    <span>en todas las ordenes</span>
                </div>
            </div>

            <div class="icons">
                <img src="imag/icon2.png" alt="">
                <div class="info">
                    <h3>Productos seguros</h3>
                    <span>garantizamos su calidad</span>
                </div>
            </div>

            <div class="icons">
                <img src="imag/icon3.png" alt="">
                <div class="info">
                    <h3>Los mejores productos</h3>
                    <span>en todas las ordenes</span>
                </div>
            </div>

        </section>

        <!--fin seccion de iconos-->

        <!--inicio seccion de productos-->

        <section class="productos" id="productos">

            <h1 class="heading">últimos<span> productos</span></h1>

            <div class="box-container">
                <div class="box">
                    <span class="discount">-10%</span>
                    <div class="image">
                        <img src="imag/zote.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Agregar al carrito</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Jabón zote</h3>
                        <div class="precio"> $12.99 <span>$15.99</span></div>
                    </div>
                </div>

                <div class="box">
                    <span class="discount">-15%</span>
                    <div class="image">
                        <img src="imag/panqué.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Agregar al carrito</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Pan Panqué bimbo</h3>
                        <div class="precio"> $12.99 <span>$15.99</span></div>
                    </div>
                </div>

                <div class="box">
                    <span class="discount">-5%</span>
                    <div class="image">
                        <img src="imag/ruffles.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Agregar al carrito</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Sabritas Ruffles</h3>
                        <div class="precio"> $12.99 <span>$15.99</span></div>
                    </div>
                </div>

                <div class="box">
                    <span class="discount">-15%</span>
                    <div class="image">
                        <img src="imag/panqué.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Agregar al carrito</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Pan Panqué bimbo</h3>
                        <div class="precio"> $12.99 <span>$15.99</span></div>
                    </div>
                </div>

                <div class="box">
                    <span class="discount">-10%</span>
                    <div class="image">
                        <img src="imag/marmol.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Agregar al carrito</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Pan Panqué bimbo marmol</h3>
                        <div class="precio"> $12.99 <span>$15.99</span></div>
                    </div>
                </div>

                <div class="box">
                    <span class="discount">-5%</span>
                    <div class="image">
                        <img src="imag/pan molido.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Agregar al carrito</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Pan molido</h3>
                        <div class="precio"> $12.99 <span>$15.99</span></div>
                    </div>
                </div>

            </div>

        </section>

        <!--fin seccion de productos-->

        <!--inicio seccion de revisar-->
        <section class="review" id="review">
            <h1 class="heading"> cliente <span>revisar</span></h1>

            <div class="box-container">

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eveniet odit porro officia
                        laboriosam, vero voluptatibus sint, delectus incidunt vitae temporibus fugiat facilis quo debitis
                        cupiditate quisquam reiciendis quam officiis?</p>
                    <div class="usuario">
                        <img src="imag/foto1.jpg" alt="">
                        <div class="usuario-info">
                            <h3>Nombre Apellido</h3>
                            <span>Cliente feliz</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eveniet odit porro officia
                        laboriosam, vero voluptatibus sint, delectus incidunt vitae temporibus fugiat facilis quo debitis
                        cupiditate quisquam reiciendis quam officiis?</p>
                    <div class="usuario">
                        <img src="imag/foto2.jpg" alt="">
                        <div class="usuario-info">
                            <h3>Nombre Apellido</h3>
                            <span>Cliente feliz</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eveniet odit porro officia
                        laboriosam, vero voluptatibus sint, delectus incidunt vitae temporibus fugiat facilis quo debitis
                        cupiditate quisquam reiciendis quam officiis?</p>
                    <div class="usuario">
                        <img src="imag/foto3.jpg" alt="">
                        <div class="usuario-info">
                            <h3>Nombre Apellido</h3>
                            <span>Cliente feliz</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eveniet odit porro officia
                        laboriosam, vero voluptatibus sint, delectus incidunt vitae temporibus fugiat facilis quo debitis
                        cupiditate quisquam reiciendis quam officiis?</p>
                    <div class="usuario">
                        <img src="imag/foto4.jpg" alt="">
                        <div class="usuario-info">
                            <h3>Nombre Apellido</h3>
                            <span>Cliente feliz</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eveniet odit porro officia
                        laboriosam, vero voluptatibus sint, delectus incidunt vitae temporibus fugiat facilis quo debitis
                        cupiditate quisquam reiciendis quam officiis?</p>
                    <div class="usuario">
                        <img src="imag/foto5.jpg" alt="">
                        <div class="usuario-info">
                            <h3>Nombre Apellido</h3>
                            <span>Cliente feliz</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eveniet odit porro officia
                        laboriosam, vero voluptatibus sint, delectus incidunt vitae temporibus fugiat facilis quo debitis
                        cupiditate quisquam reiciendis quam officiis?</p>
                    <div class="usuario">
                        <img src="imag/foto6.jpg" alt="">
                        <div class="usuario-info">
                            <h3>Nombre Apellido</h3>
                            <span>Cliente feliz</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>

            </div>

        </section>
        <!--fin seccion de revisar-->


        <!--Inicio seccion de contactar-->

        <section class="Contactar" id="Contactar">
            <h1 class="heading"><span>Contáctenos</span></h1>
            <div class="row">
                <form action="">
                    <input type="text" placeholder="Nombre" class="box">
                    <input type="email" placeholder="Email" class="box">
                    <input type="número" placeholder="Número" class="box">
                    <textarea name="" class="box" placeholder="Mensaje" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="Enviar mensaje" class="btn">
                </form>

                <div class="image">
                    <img src="imag/contactos.jpg" alt="">
                </div>
            </div>

        </section>

        <!--fin seccion de contactar-->


        <!--Inicio seccion de footer-->



        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Enlances rápidos</h3>
                    <a href="#">Inicio</a>
                    <a href="#">Información</a>
                    <a href="#">Productos</a>
                    <a href="#">Review</a>
                    <a href="#">Contactar</a>
                </div>

                <div class="box">
                    <h3>Enlances extras</h3>
                    <a href="#">Mi cuenta</a>
                    <a href="#">Mi pedido</a>
                </div>

                <div class="box">
                    <h3>Ubicaciones</h3>
                    <a href="#">Centro</a>
                    <a href="#">Castellanos</a>
                    <a href="#">Nacajuca</a>
                </div>

                <div class="box">
                    <h3>Información Contacto</h3>
                    <a href="#">+52 9932601892</a>
                    <a href="#">emilyjuliett13@gmail.com</a>
                    <a href="#">Villahermosa, centro</a>
                    <img src="imag/payment.png" alt="">
                </div>

            </div>

            <div class="credit">creado por <span>equipo Tilines</span></div>
        </section>

        <!--Fin seccion de footer-->


        <a href="#" id="loginLink">Iniciar sesión</a>

        <div class="modal" id="loginModal">
            <div class="modal-content">
                <span class="modal-close" onclick="closeModal()">&times;</span>
                <h2>Iniciar sesión</h2>
                <form onsubmit="login(event)">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" required>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" required>

                    <button type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>



        <script src="script.js"></script>

    </body>
</x-app-layout>
