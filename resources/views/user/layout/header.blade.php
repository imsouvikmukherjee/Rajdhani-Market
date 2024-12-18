<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{url('user-asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{url('user-asset/css/app.css')}}" rel="stylesheet">
    <link href="{{url('user-asset/css/rajdhani.css')}}" rel="stylesheet">
    <link href="{{url('user-asset/css/icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css">

    <title>Rajdhani Market</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid d-flex align-items-center">
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" id="toggleSidebar" aria-label="Toggle Sidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ms-2" href="{{route('dashboard')}}">Rajdhani Market</a>
            </div>
            <div class="wallet-container ms-auto" aria-label="Wallet balance">
                <i class="bx bx-wallet-alt" style="font-size: 30px;"></i>
                <span>{{session('balance')}}</span>
            </div>
        </div>
    </nav>

    <!-- Sidebar Menu -->
    <div id="sidebarMenu">
        <div class="text-center mb-1">
            <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid mb-1 mt-1" style="max-width: 70px;">
        </div>
        <p class="text-center text-light">{{session('name')}}</p>
        <ul class="nav flex-column">
            {{-- <li class="nav-item">
                <a class="nav-link text-light" href="#"><i class='bx bxs-user'></i> Profile</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('add_balance')}}"><i class="bx bxs-wallet"></i> Add Fund</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('withdraw')}}"><i class="bx bxs-wallet"></i> Withdraw Fund</a>
            </li>
            <hr class="bg-light">
            {{-- <li class="nav-item">
                <a class="nav-link text-light" href="#"><i class="bx bxs-wallet"></i> Win History</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link text-light" href="{{url('/user/bid-history')}}"><i class="bx bxs-wallet"></i> Bid History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{url('/user/how-to-play')}}"><i class="bx bxs-wallet"></i> How to Play</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{url('/user/game-rate')}}"><i class="bx bxs-wallet"></i> Game Rates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('user_notice')}}"><i class="bx bxs-wallet"></i> Notice</a>
            </li>
            {{-- <hr class="bg-light"> --}}
            <li class="nav-item">
                <a class="nav-link text-light" href="{{url('/user/contact-us')}}"><i class="bx bxs-wallet"></i> Contact Us</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link text-light" href="#"><i class="bx bxs-wallet"></i> Share</a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link text-light" href="#"><i class="bx bxs-wallet"></i> Rating</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('change_password')}}"><i class="bx bxs-wallet"></i> Change Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('about')}}"><i class="bx bxs-wallet"></i> About Rajdhani</a>
            </li>
            <li class="nav-item">
                {{-- <a class="nav-link text-light" href="#"><i class="bx bxs-wallet"></i> Log Out</a> --}}

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    {{-- <x-dropdown-link :href="">
                        {{ __('Log Out') }}
                    </x-dropdown-link> --}}

                    <a class="nav-link text-light" href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      <i class="bx bxs-wallet"></i> Logout
                    </a>
                </form>
            </li>
        </ul>
    </div>
