<?php
include 'config.php';

// if (!isset($_SESSION['username'])) {
//   header("Location: admin-login.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>DISBAR</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >DISBAR
          </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <ul class="navbar-nav ms-auto">
          <a class="navbar-brand" href="#"><i class="bi bi-bell"></i></a>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><a class="dropdown-item" href="admin-login.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="offcanvas offcanvas-start sidebar-nav bg-secondary"tabindex="-1" id="sidebar">
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark my-3">
          <ul class="navbar-nav">
            <li>
              <a href="#" class="nav-link px-3 active mb-2">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <!-- <a href="pesanan.php" class="nav-link px-3 mb-3">
                <span class="me-2"><i class="bi bi-bag"></i></span>
                <span>Pesanan</span>
              </a> -->
            </li>
            <li>
              <a href="./aa/produk.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-archive"></i></span>
                <span>Produk</span>
              </a>
            </li>
            <li>
              <a href="./aa/kategory.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-archive"></i></span>
                <span>Kategory</span>
              </a>
            </li>
            <li>
            <li>
              <a href="keluar.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-archive"></i></span>
                <span>Keluar</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
      </div>
      <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded text-light">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                    <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded text-light">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Penjualan</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                    <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded text-light">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Terkirim</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                    <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded text-light">
                            <div>
                                <h3 class="fs-2">%0</h3>
                                <p class="fs-5">Pendapatan</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Sayur Bayam</td>
                                    <td>JThoriq</td>
                                    <td>Rp.5000</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Ayam Potong</td>
                                    <td>Firman</td>
                                    <td>Rp.28.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Minyak Goreng</td>
                                    <td>Arim</td>
                                    <td>RP 18.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
