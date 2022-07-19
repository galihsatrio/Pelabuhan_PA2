<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center bg-info" href="{{asset('/admin')}}">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-user-large"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{asset('/admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">STARTER</div>

        <!-- Nav Item - Profil-->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/profiles')}}">
            <i class="fa-solid fa-circle-user"></i>
            <span>Data Website</span>
          </a>
        </li>

        <!-- Nav Item -Jadwal-->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/pemesanan')}}">
            <i class="fa-solid fa-book"></i>
            <span>Pemesanan</span></a
          >
        </li>

        <!-- Nav Item -Jadwal-->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/kendaraans')}}">
            <i class="fa-solid fa-car"></i>
            <span>Kendaraan</span></a
          >
        </li>

        <!-- Nav Item -  Penumpang-->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/penumpangs')}}">
            <i class="fa-solid fa-clipboard-list"></i>
            <span>Penumpang</span></a
          >
        </li>

        <!-- Nav Item - Pages Informasi -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-newspaper"></i>
            <span>Informasi</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{asset('/beritas')}}">Berita</a>
              <a class="collapse-item" href="{{asset('/informasis')}}">Pengumuman</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - User -->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/users')}}">
            <i class="fa-solid fa-users"></i>
            <span>Akun</span>
          </a>
        </li>

        <!-- Nav Item - Galeri -->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/galeris')}}">
            <i class="fa-solid fa-image"></i>
            <span>Galeri</span>
          </a>
        </li>

        <!-- Nav Item - Pengunjung -->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/')}}">
            <i class="fa-solid fa-house"></i>
            <span>Halaman pengunjung</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
              <i class="fas fa-bars"></i>
            </button>

            <!-- Topbar Logo -->
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-profile dropdown">
                  <img src="img/logo.png" alt="profile" width="65px" />
                  <span class="nav-profile-name">Pelabuhan Mulia Raja Napitupulu</span>
              </li>
            </ul>

            <!-- Navbar Search-->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow mt-3">
                <!-- Dropdown - User Information -->
                <a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#logoutModal"> Keluar </a>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Pesanan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pesan }}</div>
                      </div>
                      <div class="col-auto">
                        <i class="fa-solid fa-ferry fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Penumpang</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $penumpang }}</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fa-solid fa-people-group fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Kendaraan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kendaraan }}</div>
                      </div>
                      <div class="col-auto">
                        <i class="fa-solid fa-car fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Berita</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $berita }}</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fa-solid fa-newspaper fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-6 mb-4">
                    <!-- Informasi -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem" src="img/undraw_posting_photo.svg" alt="..." />
                            </div>
                            <p>
                            Selamat datang admin Selamat datang di Sistem informasi Pelabuhan Mulia Raja Napitupulu. Hal-hal yang anda dapatkan setelah masuk pada halaman admin website kami adalah sebagai berikut :
                            </p>
                            <p>1. Dapat mengelola data profil pada navigasi "Profil"</p>
                            <p>2. Dapat mengelola data kendaraan pada navigasi “Kendaraan”</p>
                            <p>3. Dapat mengelola data penumpang pada navigasi “Penumpang”</p>
                            <p>4. Dapat mengubah dan menghapus data Berita dan data Pengumuman pada navigasi “Kendaraan”</p>
                            <p>5. Dapat mengelola akun penumpang dan akun petugas pada navigasi “Akun”</p>
                            <p>6. Dapat memverifikasi daftar gambar yang sudah diajukan pengunjung website pada “Galeri”</p>
                            <p>7. Dapat mengunjungi halaman pengunjung pada navigasi "Halaman Pengunjung".</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Batas Penumpang & Kendaraan</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem" src="img/undraw_posting_photo.svg" alt="..." />
                            </div>
                            <div class="row justify-content-center mt-4">
                                <div class="col-5">
                                    <div class="h-auto">
                                        <h3 class="mt-4">Batas Penumpang</h3>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="box w-75 bg-primary text-white text-center rounded py-4 mx-auto" data-toggle="modal" data-target="#modalPenumpang" role="button">
                                        <h1 class="my-auto">{{ $batas->batas_penumpang }} <h6>Orang</h6></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-4">
                                <div class="col-5">
                                    <div class="h-auto">
                                        <h3 class="mt-4">Batas Kendaraan</h3>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="box w-75 bg-primary text-white text-center rounded py-4 mx-auto" data-toggle="modal" data-target="#modalKendaraan" role="button">
                                        <h1 class="my-auto">{{ $batas->batas_kendaraan }} <h6>Kendaraan</h6></h1>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Penumpang -->
                            <div class="modal fade" id="modalPenumpang" tabindex="-1" role="dialog" aria-labelledby="modalPenumpangLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Batas Penumpang</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="max-height: 500px; overflow-y: auto">
                                            <div class="row justify-content-center">
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '17' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="17" onclick="batasPenumpang(17)" role="button">
                                                        <h1 class="my-auto">17</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '30' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="30" onclick="batasPenumpang(30)" role="button">
                                                        <h1 class="my-auto">30</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '18' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="18" onclick="batasPenumpang(18)" role="button">
                                                        <h1 class="my-auto">18</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '31' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="31" onclick="batasPenumpang(31)" role="button">
                                                        <h1 class="my-auto">31</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '19' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="19" onclick="batasPenumpang(19)" role="button">
                                                        <h1 class="my-auto">19</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '32' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="32" onclick="batasPenumpang(32)" role="button">
                                                        <h1 class="my-auto">32</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '20' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="20" onclick="batasPenumpang(20)" role="button">
                                                        <h1 class="my-auto">20</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '34' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="34" onclick="batasPenumpang(34)" role="button">
                                                        <h1 class="my-auto">34</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '21' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="21" onclick="batasPenumpang(21)" role="button">
                                                        <h1 class="my-auto">21</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '35' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="35" onclick="batasPenumpang(35)" role="button">
                                                        <h1 class="my-auto">35</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '22' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="22" onclick="batasPenumpang(22)" role="button">
                                                        <h1 class="my-auto">22</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '36' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="36" onclick="batasPenumpang(36)" role="button">
                                                        <h1 class="my-auto">36</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '23' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="23" onclick="batasPenumpang(23)" role="button">
                                                        <h1 class="my-auto">23</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '37' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="37" onclick="batasPenumpang(37)" role="button">
                                                        <h1 class="my-auto">37</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '24' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="24" onclick="batasPenumpang(24)" role="button">
                                                        <h1 class="my-auto">24</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '38' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="38" onclick="batasPenumpang(38)" role="button">
                                                        <h1 class="my-auto">38</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '25' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="25" onclick="batasPenumpang(25)" role="button">
                                                        <h1 class="my-auto">25</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '39' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="39" onclick="batasPenumpang(39)" role="button">
                                                        <h1 class="my-auto">39</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '26' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="26" onclick="batasPenumpang(26)" role="button">
                                                        <h1 class="my-auto">26</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '40' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="40" onclick="batasPenumpang(40)" role="button">
                                                        <h1 class="my-auto">40</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '27' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="27" onclick="batasPenumpang(27)" role="button">
                                                        <h1 class="my-auto">27</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '41' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="41" onclick="batasPenumpang(41)" role="button">
                                                        <h1 class="my-auto">41</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '28' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="28" onclick="batasPenumpang(28)" role="button">
                                                        <h1 class="my-auto">28</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '42' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="42" onclick="batasPenumpang(42)" role="button">
                                                        <h1 class="my-auto">42</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '29' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="29" onclick="batasPenumpang(29)" role="button">
                                                        <h1 class="my-auto">29</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_penumpang == '43' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="43" onclick="batasPenumpang(43)" role="button">
                                                        <h1 class="my-auto">43</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="" method="get" id="formBatasPenumpang"></form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Kendaraan -->
                            <div class="modal fade" id="modalKendaraan" tabindex="-1" role="dialog" aria-labelledby="modalKendaraanLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Batas Kendaraan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="max-height: 500px; overflow-y: auto">
                                            <div class="row justify-content-center">
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '17' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="17" onclick="batasKendaraan(17)" role="button">
                                                        <h1 class="my-auto">17</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '30' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="30" onclick="batasKendaraan(30)" role="button">
                                                        <h1 class="my-auto">30</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '18' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="18" onclick="batasKendaraan(18)" role="button">
                                                        <h1 class="my-auto">18</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '31' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="31" onclick="batasKendaraan(31)" role="button">
                                                        <h1 class="my-auto">31</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '19' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="19" onclick="batasKendaraan(19)" role="button">
                                                        <h1 class="my-auto">19</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '32' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="32" onclick="batasKendaraan(32)" role="button">
                                                        <h1 class="my-auto">32</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '20' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="20" onclick="batasKendaraan(20)" role="button">
                                                        <h1 class="my-auto">20</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '34' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="34" onclick="batasKendaraan(34)" role="button">
                                                        <h1 class="my-auto">34</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '21' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="21" onclick="batasKendaraan(21)" role="button">
                                                        <h1 class="my-auto">21</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '35' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="35" onclick="batasKendaraan(35)" role="button">
                                                        <h1 class="my-auto">35</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '22' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="22" onclick="batasKendaraan(22)" role="button">
                                                        <h1 class="my-auto">22</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '36' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="36" onclick="batasKendaraan(36)" role="button">
                                                        <h1 class="my-auto">36</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '23' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="23" onclick="batasKendaraan(23)" role="button">
                                                        <h1 class="my-auto">23</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '37' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="37" onclick="batasKendaraan(37)" role="button">
                                                        <h1 class="my-auto">37</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '24' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="24" onclick="batasKendaraan(24)" role="button">
                                                        <h1 class="my-auto">24</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '38' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="38" onclick="batasKendaraan(38)" role="button">
                                                        <h1 class="my-auto">38</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '25' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="25" onclick="batasKendaraan(25)" role="button">
                                                        <h1 class="my-auto">25</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '39' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="39" onclick="batasKendaraan(39)" role="button">
                                                        <h1 class="my-auto">39</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '26' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="26" onclick="batasKendaraan(26)" role="button">
                                                        <h1 class="my-auto">26</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '40' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="40" onclick="batasKendaraan(40)" role="button">
                                                        <h1 class="my-auto">40</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '27' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="27" onclick="batasKendaraan(27)" role="button">
                                                        <h1 class="my-auto">27</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '41' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="41" onclick="batasKendaraan(41)" role="button">
                                                        <h1 class="my-auto">41</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '28' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="28" onclick="batasKendaraan(28)" role="button">
                                                        <h1 class="my-auto">28</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '42' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="42" onclick="batasKendaraan(42)" role="button">
                                                        <h1 class="my-auto">42</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '29' ? 'bg-primary text-white' : '' }} rounded text-center py-4 mx-auto" id="29" onclick="batasKendaraan(29)" role="button">
                                                        <h1 class="my-auto">29</h1>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="box w-75 {{ $batas->batas_kendaraan == '43' ? 'bg-primary text-white' : '' }} text-center rounded py-4 mx-auto" id="43" onclick="batasKendaraan(43)" role="button">
                                                        <h1 class="my-auto">43</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="" method="get" id="formBatasKendaraan"></form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Pelabuhan Mulia Raja Napitupulu 2021</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingin mengakhiri sesi ini?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Keluar" jika anda ingin mengakhiri sesi anda saat ini</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="{{route('logout')}}">Keluar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        function batasPenumpang(value) {
            let form = document.getElementById('formBatasPenumpang');
                form.setAttribute("action", "/batas-penumpang/" + value);
                form.submit();
        }

        function batasKendaraan(value) {
            let form = document.getElementById('formBatasKendaraan');
                form.setAttribute("action", "/batas-kendaraan/" + value);
                form.submit();
        }
    </script>
  </body>
</html>
