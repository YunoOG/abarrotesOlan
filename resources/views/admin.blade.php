
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abarrotes Olán</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body class="darkmode">

    <nav class="main-menu">
        <div>
            <li class="nav-Abarrotes">
                <a href="#">
                    <i class="fa-solid fa-cart-shopping" id="shoppingCart" ></i>
                </a>
            </li>
            <h1>Abarrotes Olán</h1>
        </div>

      <div>

        <ul>
          <li class="nav-item active">
            <a href="#">
                <i class="fa-solid fa-house nav-icon"></i>
              <span class="nav-text">Inicio</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#">
                <i class="fa-solid fa-user nav-icon"></i>
              <span class="nav-text">Accesos</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#">
                <i class="fa-solid fa-list nav-icon"></i>
              <span class="nav-text">Categorías</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa-solid fa-chart-simple nav-icon"></i>
              <span class="nav-text">Productos</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-heart nav-icon"></i>
              <span class="nav-text">Ventas</span>
            </a>
          </li>


      </div>

      <div class="user-info">
        <img
          src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e5a707f4-d5ac-4f30-afd8-4961ae353dbc"
          alt="user" />
        <p>Mia Taylor</p>
      </div>




      <ul>
        <li class="nav-item">
          <a href="#">
            <i class="fa fa-gear nav-icon"></i>
            <span class="nav-text">Ajustes</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="#">
            <i class="fa fa-right-from-bracket nav-icon"></i>
            <span class="nav-text">Salir</span>
          </a>
        </li>
      </ul>
    </nav>

    <section class="content">
        <div class="left-content">


        <!--busqueda


        <div class="search-and-check">
          <form class="search-box">
            <input type="text" placeholder="Search event..." />
            <i class="bx bx-search"></i>
          </form>
          <div class="interaction-control-mobile interactions">
            <i class="fa-regular fa-envelope notified"></i>
            <i class="fa-regular fa-bell notified"></i>
            <div class="toggle" onclick="switchTheme()">
              <div class="mode-icon moon">
                <i class="bx bxs-moon"></i>
              </div>
              <div class="mode-icon sun hidden">
                <i class="bx bxs-sun"></i>
              </div>
            </div>
          </div>
        </div>
        fin de busqueda-->

        <div class="header">


          <picture class="morning-img hidden">
            <img
              class="header-mobile"
              src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/b4f4845f-4dc7-4470-b81a-677f46f211c2"
              alt="" />
            <img
              class="header-tablet"
              src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/8add6e87-577d-44cb-a7bb-18f0e4bd2163"
              alt="" />
            <img
              class="header-desktop"
              src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/cce4084a-01a4-428d-961f-935bafe7a6e3"
              alt="" />
          </picture>
          <h1 class="buenTrabajo">¡Buen trabajo!</h1>
          <div class="container45">

            <div class="content45">
                <div class="text-content45">
                    <h1>Hola, usuario</h1>
                    <p>16 Julio, Martes</p>
                </div>
                <div class="image-content45">
                    <img src="imag/admin2.png" alt="Imagen de usuario">
                </div>
            </div>


          <picture class="night-img">
            <img
              class="header-mobile"
              src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e349d3c2-ee2c-4982-866e-776236508fc9"
              alt="" />
            <img
              class="header-tablet"
              src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/1266c923-a1d3-441a-bbb6-2dc6663b1f8b"
              alt="" />



          </picture>



        </div>


        <div class="upcoming-events">
          <h1>Upcoming Events</h1>
          <div class="event-container">
            <div class="card event-card">
              <div class="event-header">
                <img
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/697ef286-1104-4c6c-91d6-0b2a1e04009b"
                  alt="" />
                <p>March 19, 8:00 PM</p>
                <i class="bx bx-heart like-btn"></i>
              </div>
              <div class="event-content">
                <h2>Acoustic Serenade Under the Stars</h2>
                <p>Skyline Amphitheater</p>
              </div>
              <div class="event-footer">
                <p style="background-color: #e48e2c">Concert</p>
                <div class="btn-group">
                  <button>Buy Ticket</button>
                  <div class="share">
                    <button class="share-btn">
                      <i class="fa-solid fa-share"></i>
                    </button>
                    <ul class="popup">
                      <li>
                        <a href="#" style="color: rgb(79, 153, 213)"
                          ><i class="bx bxl-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" style="color: rgb(34, 173, 34)"
                          ><i class="bx bxl-whatsapp"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card event-card">
              <div class="event-header">
                <img
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/19cc9b1d-0dd6-4e4e-ab5c-1d9efd443953"
                  alt="" />
                <p>March 22, 8:00 PM</p>
                <i class="bx bxs-heart like-btn"></i>
              </div>
              <div class="event-content">
                <h2>Latin Rhythms Fusion</h2>
                <p>Dance Studio X</p>
              </div>
              <div class="event-footer">
                <p style="background-color: #582bac">Workshop</p>
                <div class="btn-group">
                  <button>Buy Ticket</button>
                  <div class="share">
                    <button class="share-btn">
                      <i class="fa-solid fa-share"></i>
                    </button>
                    <ul class="popup">
                      <li>
                        <a href="#" style="color: rgb(79, 153, 213)"
                          ><i class="bx bxl-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" style="color: rgb(34, 173, 34)"
                          ><i class="bx bxl-whatsapp"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card event-card">
              <div class="event-header">
                <img
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/34203989-4778-4e9a-8537-d42c073a458d"
                  alt="" />
                <p>March 26, 10:00 PM</p>
                <i class="bx bx-heart like-btn"></i>
              </div>
              <div class="event-content">
                <h2>Jazz Fusion Night</h2>
                <p>Jazz Haven Lounge</p>
              </div>
              <div class="event-footer">
                <p style="background-color: #e48e2c">Concert</p>
                <div class="btn-group">
                  <button>Buy Ticket</button>
                  <div class="share">
                    <button class="share-btn">
                      <i class="fa-solid fa-share"></i>
                    </button>
                    <ul class="popup">
                      <li>
                        <a href="#" style="color: rgb(79, 153, 213)"
                          ><i class="bx bxl-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" style="color: rgb(34, 173, 34)"
                          ><i class="bx bxl-whatsapp"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card event-card">
              <div class="event-header">
                <img
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/3990b1bd-f34d-4fda-bfc9-d807d9e2f0f6"
                  alt="" />
                <p>March 28, 3:00 PM</p>
                <i class="bx bx-heart like-btn"></i>
              </div>
              <div class="event-content">
                <h2>Clay Sculpting Class</h2>
                <p>Artisan Workshop Space</p>
              </div>
              <div class="event-footer">
                <p style="background-color: #582bac">Workshop</p>
                <div class="btn-group">
                  <button>Buy Ticket</button>
                  <div class="share">
                    <button class="share-btn">
                      <i class="fa-solid fa-share"></i>
                    </button>
                    <ul class="popup">
                      <li>
                        <a href="#" style="color: rgb(79, 153, 213)"
                          ><i class="bx bxl-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" style="color: rgb(34, 173, 34)"
                          ><i class="bx bxl-whatsapp"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card event-card">
              <div class="event-header">
                <img
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/35bab020-129e-4858-9ce7-076f804fdcc5"
                  alt="" />
                <p>April 4, 8:30 PM</p>
                <i class="bx bx-heart like-btn"></i>
              </div>
              <div class="event-content">
                <h2>Timeless Tales Revived</h2>
                <p>Epoch Theater</p>
              </div>
              <div class="event-footer">
                <p style="background-color: #b31a4d">Theatre</p>
                <div class="btn-group">
                  <button>Buy Ticket</button>
                  <div class="share">
                    <button class="share-btn">
                      <i class="fa-solid fa-share"></i>
                    </button>
                    <ul class="popup">
                      <li>
                        <a href="#" style="color: rgb(79, 153, 213)"
                          ><i class="bx bxl-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" style="color: rgb(34, 173, 34)"
                          ><i class="bx bxl-whatsapp"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card event-card">
              <div class="event-header">
                <img
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/13b71f3a-4fe3-4d95-8f83-1bd5722f5108"
                  alt="" />
                <p>April 5, 6:45 PM</p>
                <i class="bx bx-heart like-btn"></i>
              </div>
              <div class="event-content">
                <h2>Abstract Art Class</h2>
                <p>Artistic Horizon Studio</p>
              </div>
              <div class="event-footer">
                <p style="background-color: #582bac">Workshop</p>
                <div class="btn-group">
                  <button>Buy Ticket</button>
                  <div class="share">
                    <button class="share-btn">
                      <i class="fa-solid fa-share"></i>
                    </button>
                    <ul class="popup">
                      <li>
                        <a href="#" style="color: rgb(79, 153, 213)"
                          ><i class="bx bxl-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" style="color: rgb(34, 173, 34)"
                          ><i class="bx bxl-whatsapp"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card event-card">
              <div class="event-header">
                <img
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/566017c5-9b68-4b35-a14f-5d04d43fa408"
                  alt="" />
                <p>April 6, 9:00 PM</p>
                <i class="bx bxs-heart like-btn"></i>
              </div>
              <div class="event-content">
                <h2>Harry Potter Film Concert Series</h2>
                <p>Overture Hall</p>
              </div>
              <div class="event-footer">
                <p style="background-color: #e48e2c">Concert</p>
                <div class="btn-group">
                  <button>Buy Ticket</button>
                  <div class="share">
                    <button class="share-btn">
                      <i class="fa-solid fa-share"></i>
                    </button>
                    <ul class="popup">
                      <li>
                        <a href="#" style="color: rgb(79, 153, 213)"
                          ><i class="bx bxl-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" style="color: rgb(34, 173, 34)"
                          ><i class="bx bxl-whatsapp"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card event-card">
              <div class="event-header">
                <img
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/ab202ffd-b0ee-43ee-befb-870fa509cc17"
                  alt="" />
                <p>Jun 23, 1:30 PM</p>
                <i class="bx bx-heart like-btn"></i>
              </div>
              <div class="event-content">
                <h2>Wimbledon Championships - 2024</h2>
                <p>Tennis & Croquet Club</p>
              </div>
              <div class="event-footer">
                <p style="background-color: #4a920f">Sport</p>
                <div class="btn-group">
                  <button>Buy Ticket</button>
                  <div class="share">
                    <button class="share-btn">
                      <i class="fa-solid fa-share"></i>
                    </button>
                    <ul class="popup">
                      <li>
                        <a href="#" style="color: rgb(79, 153, 213)"
                          ><i class="bx bxl-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" style="color: rgb(34, 173, 34)"
                          ><i class="bx bxl-whatsapp"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="reviews">
          <h1>Past Event Reviews</h1>
          <div class="review-container">
            <div class="card review-card">
              <h2>Metal Sculpture Workshop</h2>
              <div class="ratings">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
              </div>
              <p>
                The metal sculpture workshop was a bit tough because shaping the
                metal was harder than expected. It would have been better with
                simpler instructions on how to mold the material.
              </p>
            </div>

            <div class="card review-card">
              <h2>Electro Groove Night</h2>
              <div class="ratings">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
              </div>
              <p>
                The Electro Groove Night was so much fun! The music was awesome,
                and everyone had a great time dancing – a fantastic night out
                for sure!
              </p>
            </div>

            <div class="card review-card">
              <h2>Wimbledon Championships - 2023 (Final)</h2>
              <div class="ratings">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <p>
                Watching the Wimbledon final between Novak Djokovic and Carlos
                Alcaraz was so exciting! The intense match and incredible skills
                of the players made it a thrilling experience that I'll always
                remember.
              </p>
            </div>
          </div>
        </div>
      </div>


    </section>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

    <script src="admin.js"></script>

  </body>


</html>
