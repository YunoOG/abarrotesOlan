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

    <section>
        <body class="bg-gray-800 text-white">
            <nav class="bg-gray-900 p-4 mb-6">
              <div
                class="container max-w-6xl mx-auto flex flex-col sm:flex-row gap-8 items-center"
              >
                <!-- Search area -->
                <div class="relative w-full">
                  <input
                    type="text"
                    id="search"
                    class="bg-gray-700 rounded-full p-2 pl-10 transition focus:w-full"
                    placeholder="Search products..."
                  />
                  <svg
                    class="absolute left-2 top-1/2 -translate-y-1/2"
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                  </svg>
                </div>

                <!-- Cart icon -->
                <span class="relative text-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    #
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"
                    />
                    <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                  </svg>
                  <small
                    id="cart-count"
                    class="bg-red-500 text-xs text-white w-4 h-4 absolute -top-2 -right-2 rounded-full"
                    >0</small
                  >
                </span>
              </div>
            </nav>

            <main class="flex flex-col md:flex-row container mx-auto max-w-6xl">
              <div class="space-y-4 p-2 w-full md:max-w-[10rem]">
                <h2 class="text-2xl">Filters</h2>
                <h3 class="text-xl mb-2">Category</h3>
                <div id="filters-container" class="text-xl space-y-2">
                  <div>
                    <input type="checkbox" class="check" id="cameras" />
                    <label for="cameras">Cameras</label>
                  </div>
                  <div>
                    <input type="checkbox" class="check" id="smartphones" />
                    <label for="smartphones">Smartphones</label>
                  </div>
                  <div>
                    <input type="checkbox" class="check" id="games" />
                    <label for="games">Games</label>
                  </div>
                  <div>
                    <input type="checkbox" class="check" id="televisions" />
                    <label for="televisions">Televisions</label>
                  </div>
                </div>
              </div>

              <!-- Products wrapper -->
              <div
                id="products-wrapper"
                class="w-full max-w-4xl mx-auto grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-6 place-content-center p-4"
              ></div>
            </main>

    </section>


    <script src="{{ asset('js/productos.js') }}"></script>

</body>
</html>
