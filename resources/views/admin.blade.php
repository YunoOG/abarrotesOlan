
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
        <div  class="nav-Abarrotes-container">
            <li class="nav-Abarrotes">
                <a href="#">
                    <img src="imag/carritoCanva.png" id="carritoCanva" alt="">

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

          <div class="dashboardCard">
            <div class="card green">
                <div class="IconCard">
                    <i class="fa-solid fa-user" id="userCard"></i>
                </div>
                <div class="text">
                    <h2>2</h2>
                    <p>Usuarios</p>
                </div>
            </div>

            <div class="card blue">
                <div class="IconCard">
                    <i class="fa-solid fa-dollar-sign" id="dollarCard"></i>
                </div>
                <div class="text">
                    <h2>0</h2>
                    <p>Ventas</p>
                </div>
            </div>
            <div class="card orange">
                <div class="IconCard">
                    <i class="fa-solid fa-cart-shopping" id="shoppingCard"></i>
                </div>
                <div class="text">
                    <h2>1</h2>
                    <p>Productos</p>
                </div>
            </div>
            <div class="card red">
                <div class="IconCard">
                    <i class="fa-solid fa-list"  id="listCard"></i>
                </div>
                <div class="text">
                    <h2>1</h2>
                    <p>Categorías</p>
                </div>
            </div>



            <div class="dashboard-container">
                <div class="dashboard-card">
                    <div class="card-header">
                        <i class="fa-solid fa-file-alt"></i>
                        <h2>Productos más vendidos</h2>
                    </div>
                    <table class="dashboard-table">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Total vendido</th>
                                <th>Cantidad total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Producto 1</td>
                                <td>100</td>
                                <td>50</td>
                            </tr>
                            <!-- Más filas según sea necesario -->
                        </tbody>
                    </table>
                </div>

                <div class="dashboard-card">
                    <div class="card-header">
                        <i class="fa-solid fa-file-alt"></i>
                        <h2>Últimas ventas</h2>
                    </div>
                    <table class="dashboard-table">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Fecha</th>
                                <th>Venta total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Producto 2</td>
                                <td>12/08/2023</td>
                                <td>200</td>
                            </tr>
                            <!-- Más filas según sea necesario -->
                        </tbody>
                    </table>
                </div>

                <div class="dashboard-card">
                    <div class="card-header">
                        <i class="fa-solid fa-file-alt"></i>
                        <h2>Productos recientemente añadidos</h2>
                    </div>
                    <table class="dashboard-table">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Total vendido</th>
                                <th>Cantidad total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Producto 3</td>
                                <td>300</td>
                                <td>150</td>
                            </tr>
                            <!-- Más filas -->
                        </tbody>
                    </table>
                </div>
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
