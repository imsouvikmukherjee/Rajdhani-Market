<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rajdhani</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Rajdhani</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    {{-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar --> --}}

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->





        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{url('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            {{-- <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Web Designer</span>
            </li> --}}
            {{-- <li>
              <hr class="dropdown-divider">
            </li> --}}

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li> --}}
            {{-- <li>
              <hr class="dropdown-divider">
            </li> --}}

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> --}}

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> --}}

            <li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                <!-- Add any additional fields if needed -->
            </form>
              <a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bi bi-house"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('markets')}}">
          <i class="bi bi-envelope"></i>
          <span>Markets</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('admin.half_sangam')}}">
          <i class="bi bi-envelope"></i>
          <span>Half Sangam</span>
        </a>
      </li>
      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('admin.full_sangam')}}">
          <i class="bi bi-envelope"></i>
          <span>Full Sangam</span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('starline_games')}}">
          <i class="bi bi-envelope"></i>
          <span>Starline Markets</span>
        </a>
      </li>

      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('starline_game_types')}}">
          <i class="bi bi-envelope"></i>
          <span>Starline Games</span>
        </a>
      </li>


      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('gali')}}">
          <i class="bi bi-envelope"></i>
          <span>Gali Disawar</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{route('games_type')}}">
          <i class="bi bi-journal-album"></i><span>Game Rate</span></i>
        </a>
        <!-- <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul> -->
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('declare_result')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Declare Results</span>
        </a>
        <!-- <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul> -->
      </li><!-- End Tables Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-eye-fill"></i><span>View All Load</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('open_load')}}">
              <i class="bi bi-star-fill"></i><span>View Open Load</span>
            </a>
          </li>
          <li>
            <a href="{{route('close_load')}}">
              <i class="bi bi-star-fill"></i><span>View Close Load</span>
            </a>
          </li> --}}
          <!-- <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li> -->
        {{-- </ul>
      </li><!-- End load Nav --> --}}

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li>End Icons Nav -->

      {{-- <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('winning_history')}}">
            <i class="bi bi-layout-text-window-reverse"></i></i>
          <span>Winning History</span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('bid_history')}}">
            <i class="bi bi-layout-text-window-reverse"></i></i>
          <span>Bid History</span>
        </a>
      </li>

      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{route('withdraw_request')}}">
            <i class="bi bi-layout-text-window-reverse"></i></i>
          <span>Withdraw Request</span>
        </a>
      </li>

      {{-- <li class="nav-heading">Pages</li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('users')}}">
          <i class="bi bi-person-fill"></i>
          <span>Users</span>
        </a>
      </li><!-- End user Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('deposit_request')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Deposit Request</span>
        </a>
      </li><!-- End Deposite Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('notice')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>User Notice</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/number-update')}}/{{1}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Whatsapp</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/qr-update')}}">
            <i class="bi bi-currency-rupee"></i>
          <span>UPI Id</span>
        </a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('games_type')}}">
          <i class="bi bi-card-image"></i>
          <span>Banner</span>
        </a>
      </li><!-- End banner Page Nav --> --}}

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('minimum_limit')}}">
          <i class="bi bi-bar-chart-fill"></i>
          <span>Minimum Limit</span>
        </a>
      </li><!-- End minimum limit Page Nav --> --}}

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('notification')}}">
          <i class="bi bi-bell-fill"></i>
          <span>Notification</span>
        </a>
      </li><!-- End notification Page Nav --> --}}

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('upi')}}">
          <i class="bi bi-currency-rupee"></i>
          <span>UPI's</span>
        </a>
      </li><!-- End Register Page Nav --> --}}

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('winning_rate')}}">
          <i class="bi bi-currency-rupee"></i>
          <span>Winning Rates</span>
        </a>
      </li><!-- End winnings rate Page Nav --> --}}

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('contact')}}">
          <i class="bi bi-person-rolodex"></i>
          <span>Contacts Number</span>
        </a>
      </li><!-- contact Page Nav --> --}}

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li>End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
