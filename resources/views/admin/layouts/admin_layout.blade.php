<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin_panel/plugins/fontawesome-free/css/all.min.css') }}"  crossorigin="anonymous" referrerpolicy="no-referrer" >
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin_panel/dist/css/adminlte.min.css') }}">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
    </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('img/ombuds_logo.png')  }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ՄԻՊ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Name Last Name</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-light fa-newspaper"></i>
                <p>
                    Նորություններ
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('news.index') }}" class="nav-link">
                        <p>Բոլոր Նորությունները</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news.create') }}" class="nav-link">
                        <i class="fas fa-plus-square"></i>
                        <p>Ավելացնել Նորություն</p>
                    </a>
                </li>

            </ul>
        </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-sticky-note"></i>
                <p>
                    Էջեր
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('page.index') }}" class="nav-link">
                        <p>Բոլոր Էջերը</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('page.create') }}" class="nav-link">
                        <i class="fas fa-plus-square"></i>
                        <p>Ավելացնել Էջ</p>
                    </a>
                </li>

            </ul>
        </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-sticky-note"></i>
                <p>
                    Ենթաէջ
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('tab.index') }}" class="nav-link">
                        <p>Բոլոր Ենթաէջերը</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tab.create') }}" class="nav-link">
                        <i class="fas fa-plus-square"></i>
                        <p>Ավելացնել Ենթաէջ</p>
                    </a>
                </li>

            </ul>
        </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-sticky-note"></i>
                <p>
                    Աուդիո և վիդեո
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('media.index') }}" class="nav-link">
                        <p>Բոլոր ֆայլերը</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('media.create') }}" class="nav-link">
                        <i class="fas fa-plus-square"></i>
                        <p>Ավելացնել ֆայլ</p>
                    </a>
                </li>

            </ul>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
<!-- /.content-wrapper -->


<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="{{ asset('admin_panel/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('admin_panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<!-- AdminLTE -->
<script src="{{ asset('admin_panel/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('admin_panel/dist/js/pages/dashboard3.js')}}"></script>
@yield('scripts')
</body>
</html>
