<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{asset('../assets/css/all.min.css')}}"> --}}
  <link href="{{asset('../vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('../assets/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('../assets/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('../assets/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="{{asset('../assets/css/adminlte.min.css')}}"> --}}
  <link href="{{asset('../css/sb-admin-2.min.css')}}" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini page-top">
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
                  <img src="{{asset('img/logo.png')}}" alt="profile" width="65px" />
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
              <h1 class="h3 mb-0 text-gray-800">@yield('judul')</h1>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            @yield('content')

                            <table id="example2" class="table table-bordered table-striped">
                                @yield('tabels')
                            </table>

                            <table id="example1" class="table table-bordered table-striped">
                                @yield('tabel')
                            </table>

                            @yield('links')
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
    <!-- /.content -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Pelabuhan Mulia Raja Napitupulu 2022</span>
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

<!-- jQuery -->
<script src="{{asset('../assets/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('../assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('../assets/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('../assets/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('../assets/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('../assets/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('../assets/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('../assets/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('../assets/jszip/jszip.min.js')}}"></script>
<script src="{{asset('../assets/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('../assets/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('../assets/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('../assets/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('../assets/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "paging": false, "info": false,
      "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "paging": false, "info": false,
      "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type='text/javascript'>
        $(window).load(function(){
            $("#jenis").change(function() {
                console.log($("#jenis option:selected").val());
                if ($("#jenis option:selected").val() == 'Tidak Berkendara') {
                    $('#no_polisi').prop('hidden', 'true');
                } else if ($("#jenis option:selected").val() == 'Gol I (Sepeda Dayung)'){
                    $('#no_polisi').prop('hidden', 'true');
                }else if ($("#jenis option:selected").val() == ''){
                    $('#no_polisi').prop('hidden', 'true');
                }else {
                    $('#no_polisi').prop('hidden', false);
                }
            });
        });
        </script>
</body>
</html>
