<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abarrotes Olán</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
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

    <section class="Inicio" id="Inicio">
        <div class="content">
            <h3>El mejor abarrotes</h3>
            <span>Abarrotes Olán</span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A mollitia nesciunt necessitatibus porro quae
                nostrum blanditiis, voluptatibus, vel, fugit cum nihil quo fuga. At architecto numquam possimus
                recusandae atque molestias.</p>
            <a href="#" class="btn">
                <button>Button</button>
            </a>
            <div class="">


            </div>

            <div class="social-container">
                <ul class="example-2">
                  <li class="icon-content">
                    <a href="https://www.facebook.com/" aria-label="Facebook" data-social="facebook">
                      <div class="filled"></div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" xml:space="preserve">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.
            49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58" fill="currentColor"></path>
                      </svg>
                    </a>
                    <div class="tooltip">Facebook</div>
                  </li>
                  <li class="icon-content">
                    <a
                      href="https://www.instagram.com/"
                      aria-label="Instagram"
                      data-social="instagram"
                    >
                      <div class="filled"></div>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-instagram"
                        viewBox="0 0 16 16"
                        xml:space="preserve"
                      >
                        <path
                          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </a>
                    <div class="tooltip">Instagram</div>
                  </li>


                  <li class="icon-content">
                    <a
                    href="https://twitter.com/"
                    aria-label="Twitter"
                    data-social="twitter">

                    <div class="filled"></div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-instagram"
                      viewBox="0 0 16 16"
                      xml:space="preserve"
                    >
                        <path
                        d="M16 3.038a6.54 6.54 0 0 1-1.885.516 3.293 3.293 0 0 0 1.443-1.817 6.557 6.557 0 0 1-2.084.797A3.28 3.28 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.766-3.43 3.287 3.287 0 0 0 1.016 4.381A3.273 3.273 0 0 1 .64 6.575v.041a3.283 3.283 0 0 0 2.632 3.217 3.283 3.283 0 0 1-.865.115 3.295 3.295 0 0 1-.618-.059 3.283 3.283 0 0 0 3.067 2.281A6.588 6.588 0 0 1 .78 13.584 6.32 6.32 0 0 1 0 13.553a9.29 9.29 0 0 0 5.032 1.475c6.037 0 9.341-5 9.341-9.34 0-.143-.003-.284-.01-.425A6.67 6.67 0 0 0 16 3.038"
                        fill="currentColor"></path>
                      </svg>
                    </a>
                    <div class="tooltip">Twitter</div>
                  </li>

                  <li class="icon-content">
                    <a href="https://wa.me/" aria-label="Whatsapp" data-social="whatsapp">
                      <div class="filled"></div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" xml:space="preserve">
                        <path d="M13.601 2.412A7.936 7.936 0 0 0 8.026 0a7.942 7.942 0 0 0-6.888 11.973L0 16l4.16-1.12a7.952 7.952 0 0 0 3.866.984h.003a7.944 7.944 0 0 0 7.943-7.943c0-2.12-.828-4.112-2.37-5.509zM8.026 14.5h-.002a6.507 6.507 0 0 1-3.316-.905l-.238-.143-2.469.664.658-2.41-.156-.249a6.49 6.49 0 1 1 5.523 3.043zm3.656-4.927c-.199-.099-1.17-.578-1.352-.644-.18-.066-.312-.099-.445.099-.132.198-.51.645-.624.779-.114.132-.23.148-.43.049-.199-.099-.836-.308-1.59-.982-.588-.522-.987-1.17-1.103-1.368-.114-.198-.012-.304.086-.403.088-.088.199-.23.298-.345.1-.116.132-.198.199-.33.066-.132.033-.247-.017-.345-.049-.099-.445-1.074-.609-1.472-.161-.387-.323-.334-.445-.34l-.38-.007a.89.89 0 0 0-.647.3c-.222.247-.85.832-.85 2.034 0 1.202.87 2.362.99 2.52.116.153 1.713 2.612 4.148 3.68.579.25 1.03.399 1.38.527.58.184 1.11.158 1.528.096.466-.07 1.17-.478 1.336-.939.165-.461.165-.856.116-.94-.048-.084-.18-.132-.38-.23z" fill="currentColor"></path>
                      </svg>
                    </a>
                    <div class="tooltip">WhatsApp</div>
                  </li>
                </ul>
              </div>
        </div>
    </section>

    <!--informacion-->

    <section class="contentCard">
        <div class="column1">
            <div class="e-card playing card1">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="infotop">
                    <div class="bx bx-store" id="store-btn"></div>
                    <br>Productos seguros
                    <div class="name">Garantizamos su calidad</div>
                </div>
            </div>
            <div class="e-card playing card2">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="infotop">
                    <div class="bx bx-badge-check" id="badge-check"></div>
                    <br>Los mejores productos
                    <div class="name">En todas las ordenes</div>
                </div>
            </div>
        </div>
        <div class="column2">
            <div class="e-card playing card3">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="infotop">
                    <div class="bx bx-user-check" id="user-check"></div>
                    <br>El mejor servicio
                    <div class="name">para nuestros clientes</div>
                </div>
            </div>
            <div class="e-card playing card4">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="infotop">
                    <div class="bx bxs-package" id="bxs-package"></div>
                    <br>Agregar un subtítulo
                    <div class="name">Card 4</div>
                </div>
            </div>
        </div>
        <div class="text-section">
            <h1>Encuentra lo que necesitas con una sonrisa en Abarrotes Olan. </h1>
            <h2>Nos enorgullece ofrecerte una selección de productos frescos
                y a precios justos, todo en un entorno que te hará sentir como
                en casa. Valoramos tu confianza y trabajamos arduamente para
                garantizar que cada visita sea cómoda y eficiente. Nuestro equipo
                está aquí para atender tus necesidades y asegurarse de que encuentres
                todo lo que buscas. Gracias por permitirnos ser parte de tu rutina diaria
                y por elegirnos como tu abarrotes de confianza.</h2>
                <a style="--clr: #7808d0" class="buttonExplore" href="#">
                    <span class="button__icon-wrapper">
                        <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                            <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                        </svg>

                        <svg class="button__icon-svg  button__icon-svg--copy" xmlns="http://www.w3.org/2000/svg" width="10" fill="none" viewBox="0 0 14 15">
                            <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                        </svg>
                    </span>
                    Explorar Más
                </a>
        </div>
    </section>
    <!--fin seccion de informacion-->



    <!--inicio seccion de iconos-->

    <section class="Información" id="Información">

        <h1 class="heading"> <span> Sobre </span> nosotros </h1>

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

                    <div class="btnContent1">
                        <button class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                          </button>
                    </div>
            </div>

        </div>

    </section>
    <!--fin seccion de informacion-->



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





    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
