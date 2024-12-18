{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <!-- <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" /> -->
    <!--plugins-->
    <link href="{{url('user-asset/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{url('user-asset/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{url('user-asset/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{url('user-asset/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{url('user-asset/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{url('user-asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{url('user-asset/css/app.css')}}" rel="stylesheet">
    <link href="{{url('user-asset/css/icons.css')}}" rel="stylesheet">
    <title>Login</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center mb-4 mt-1">
            <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;">
            <h4 class="text-white mt-2">Sign Up</h4>
        </div>

        <div class="p-1" style="width: 100%; max-width: 500px;">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form class="row g-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                        <input type="text" class="form-control border-start-0" name="name" value="{{old('name')}}" id="inputName" placeholder="Enter Your Name" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class="bx bx-mobile-alt"></i></span>
                        <input type="text" class="form-control border-start-0" name="contact" value="{{old('contact')}}" id="inputPhone" placeholder="Enter Phone Number" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class="bx bx-mail-send"></i></span>
                        <input type="email" class="form-control border-start-0" id="inputEmail" name="email" value="{{old('email')}}" placeholder="Enter Email" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class='bx bxs-lock'></i></span>
                        <input type="password" class="form-control border-start-0" id="inputPassword" name="password" placeholder="Enter Password" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class='bx bxs-lock'></i></span>
                        <input type="password" class="form-control border-start-0" id="inputConfirmPassword" name="password_confirmation" placeholder="Confirm Password" />
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn p-3" style="background-color: #eb6001; border-radius: 60px;">Sign Up</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <a href="{{route('login')}}" class="text-light">Log in to your Account</a>
            </div>
        </div>
    </div>

     <!-- Bootstrap JS -->
     <script src="{{url('user-asset/js/bootstrap.bundle.min.js')}}"></script>
     <!--plugins-->
     <script src="{{url('user-asset/js/jquery.min.js')}}"></script>
     <script src="{{url('user-asset/plugins/simplebar/js/simplebar.min.js')}}"></script>
     <script src="{{url('user-asset/plugins/metismenu/js/metisMenu.min.js')}}"></script>
     <script src="{{url('user-asset/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
     <!--app JS-->
     <script src="{{url('user-asset/js/app.js')}}"></script>
 </body>

 </html>
