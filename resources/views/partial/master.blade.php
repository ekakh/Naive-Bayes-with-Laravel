<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Aplikasi Penerima Bantuan Sosial</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown "><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <!-- <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> -->
              <div class="d-sm-none d-lg-inline-block">Welcome, {{ Auth::user()->nama }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{ route('profile.index') }}" class="dropdown-item has-icon {{ Request::is('profile*') ? 'active' : '' }}">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="{{ route('settings.index') }}" class="dropdown-item has-icon {{ Request::is('settings*') ? 'active' : '' }}">
                <i class="fas fa-cog "></i> Settings
              </a>
              <div class="dropdown-divider {{ Request::is('logout*') ? 'active' : '' }}"></div>
              <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </nav>


      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Bantuan Sosial</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">BS</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Home</li>
            <li><a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li class="menu-header">Menu</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i> <span>Data Masyarakat</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link {{ Request::is('data-calon*') ? 'active' : '' }}" href="{{ route('data-calon.index') }}">Data Calon</a></li>
                <li><a class="nav-link {{ Request::is('data-penerima*') ? 'active' : '' }}" href="{{ route('data-penerima.index') }}">Data Penerima</a></li>
              </ul>
            </li>
            @if (auth()->user()->roles_id == '1')
            <li><a class="nav-link {{ Request::is('kriteria*') ? 'active' : '' }}" href="{{ route('kriteria.index') }}"><i class="fas fa-list"></i> <span>Kriteria</span></a></li>
            <li><a class="nav-link {{ Request::is('analisis*') ? 'active' : '' }}" href="{{ route('analisis.index') }}"><i class="fas fa-chart-area"></i> <span>Analisis Klasifikasi</span></a></li>
            @endif
            <li><a class="nav-link {{ Request::is('laporan*') ? 'active' : '' }}" href="{{ route('laporan.index') }}"><i class="fas fa-print"></i> <span>Laporan</span></a></li>
            @if (auth()->user()->roles_id == '1')
            <li class="menu-header"> Management User </li>
            <li><a class="nav-link {{ Request::is('settings.kelola*') ? 'active' : '' }}" href="{{ route('settings.kelola') }}"><i class="fas fa-user"></i> <span>Kelola User</span></a></li>
            @endif
        </aside>
      </div>


      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Naive Bayes Classifier
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="modalAlertImportCalon" tabindex="-1" role="dialog" aria-labelledby="modalAlertImportCalonTitle" aria-hidden="true">
    <form method="post" action="/calon/import_excel" enctype="multipart/form-data">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Import Data Excel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{ csrf_field() }}
            <p>
              Pastikan file excel sesuai dengan template.
              Download template <a href="{{ asset('file_calon/template.xlsx') }}">disini!</a>
            </p>
            <label>Pilih file excel</label>
            <div class="form-group">
              <input type="file" name="file" required="required" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success"><i class="fas fa-upload"></i> Import</button>
          </div>
        </div>
      </div>
    </form>
  </div>



  <!-- General JS Scripts -->
  <script src="{{ asset('assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/modules/popper.js')}}"></script>
  <script src="{{ asset('assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('assets/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{ asset('assets/modules/chart.min.js')}}"></script>
  <script src="{{ asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/index.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('assets/modules/datatables/datatables.min.js')}}"></script>
  <script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
  <script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/modules-sweetalert.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/bootstrap-modal.js')}}"></script>
  <script src="{{ asset('assets/js/page/modules-datatables.js')}}"></script>

</body>

</html>