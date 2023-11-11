<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin PawonKoe</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/pawonkoe.png')}}" />
  @include('partials.link')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          {{-- LOGO --}}
          <div class="d-inline-flex p-2 align-items-center gap-3">
            <a href="./index.html" class="text-nowrap logo-img">
              <img src="{{asset('images/logos/pawonkoe.png')}}" width="40" alt="" />
            </a>
            <h2 class="padding-left : 10px fs-5 ">PawonKoe</h2>
          </div>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
          
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="/" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard "></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li> 
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MENU ADMIN</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                  <i class="ti ti-credit-card"></i>
                </span>
                <span class="hide-menu">Transaksi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Produk</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-box-multiple"></i>
                </span>
                <span class="hide-menu">Notes PreOrder</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li>
              <h1 class="fs-6 ml-auto">Hi, Admin</h1>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body" >
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block"">Home Page</a>
                  </div>
                  <div class="message-body" >
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block"">Logout</a>
                  </div>
                </div>
                
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="row">
        {{-- Pendapatan --}}
        
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="card" style="background-color: #4bb3f0;">
                <div class="card-body">
                  <div class="row alig n-items-start">
                    <div class="col-8">
                      <h5 class="card-title mb-9 fw-semibold">Jumlah Order</h5>
                      <h4 class="fw-semibold mb-3">752</h4>
                      <div class="d-flex align-items-center pb-1">
                        <p class="text-dark me-1 fs-3 mb-0">+57%</p>
                      </div>
                      <div><p class="fs-3 mb-0 text-white">Bulan terakhir</p></div>
                    </div>
                    <div class="col-4">
                      <div class="d-flex justify-content-end">
                        <div>
                          <i class="text-white ti ti-shopping-cart fs-6 rounded-circle p-6 d-flex align-items-center justify-content-center" style="background-color: blue"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="card" style="background-color: #e7f338;">
                <div class="card-body">
                  <div class="row alig n-items-start">
                    <div class="col-8">
                      <h5 class="card-title mb-9 fw-semibold">Jumlah PreOrder</h5>
                      <h4 class="fw-semibold mb-3">52</h4>
                      <div class="d-flex align-items-center pb-1">
                        <p class="text-dark me-1 fs-3 mb-0">+7%</p>
                      </div>
                      <div><p class="fs-3 mb-0 text-white ">Bulan terakhir</p></div>
                    </div>
                    <div class="col-4">
                      <div class="d-flex justify-content-end">
                        <div>
                          <i class="text-white ti ti-box-multiple fs-6 rounded-circle p-6 d-flex align-items-center justify-content-center" style="background-color: yellow"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="card" style="background-color: #f0514b;">
                <div class="card-body">
                  <div class="row alig n-items-start">
                    <div class="col-8">
                      <h5 class="card-title mb-9 fw-semibold">Jumlah Transaksi</h5>
                      <h4 class="fw-semibold mb-3">834</h4>
                      <div class="d-flex align-items-center pb-1">
                        <p class="text-dark me-1 fs-3 mb-0">+20%</p>
                      </div>
                      <div><p class="fs-3 mb-0 text-white">Bulan terakhir</p></div>
                    </div>
                    <div class="col-4">
                      <div class="d-flex justify-content-end">
                        <div>
                          <i class="text-white ti ti-credit-card fs-6 rounded-circle p-6 d-flex align-items-center justify-content-center" style="background-color: red"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        

      </div>
      </div>
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row" style="margin-top: -100px">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Laporan Penjualan</h5>
                  </div>
                  <div>
                    <select class="form-select">
                      <option value="1">Maret 2023</option>
                      <option value="2">April 2023</option>
                      <option value="3">Mei 2023</option>
                      <option value="4">Juni 2023</option>
                    </select>
                  </div>
                </div>
                <div id="chart"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <div class="card" style="background-color: #4bf095;">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold">Pendapatan</h5>
                        <div><h6 class="fw-semibold mb-3">Rp2.450.000</h6></div>
                        <div class="d-flex align-items-center pb-1">
                          <p class="text-dark me-1 fs-3 mb-0">+10%</p>
                        </div>
                        <div><p class="fs-3 mb-0 text-white">Bulan terakhir</p></div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div>
                            <i class="text-white ti ti-currency-dollar fs-6 rounded-circle p-6 d-flex align-items-center justify-content-center" style="background-color:green"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row" style="margin-top: -100px">
          <h5 class="card-title fw-semibold mb-4">Produk Terlaku</h5>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href=""><img src="{{asset('images/products/cipir.png')}}" class="card-img-top rounded-0" alt="..."></a>
               </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Cipiran Manis</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">Rp15.000<span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href=""><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href=""><img src="{{asset('images/products/keciput.png')}}" class="card-img-top rounded-0" alt="..."></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Keciput Mini</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">Rp25.000 <span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href=""><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href=""><img src="{{asset('images/products/produkcumi.png')}}" class="card-img-top rounded-0" alt="..."></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Rambak Baby Cumi</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">Rp20.000<span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href=""><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href=""><img src="{{asset('images/products/rambak.png')}}" class="card-img-top rounded-0" alt="..."></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Rambak Kulit Cumi</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">Rp18.000<span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href=""><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href=""><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      </div>
    </div>
  </div>
  @include('partials.js')
</body>
</html>