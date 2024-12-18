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
            <h4 class="text-white mt-2">Login</h4>
        </div>

        <div class="p-1" style="width: 100%; max-width: 500px;">
            <form class="row g-3">
                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class="bx bx-mobile-alt"></i></span>
                        <input type="tel" class="form-control border-start-0" id="inputPhone" placeholder="Enter Phone Number" required />
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class='bx bxs-lock'></i></span>
                        <input type="password" class="form-control border-start-0" id="inputPassword" placeholder="Enter Password" required />
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn p-3" style="background-color: #eb6001; border-radius: 60px;">Login</button>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{route('forgot_password')}}" class="text-light">Forgot Password?</a>

                    </div>
                </div>
            </form>

            <div class="text-center mt-5">
                <a href="{{route('user_register')}}" class="text-light">Don't have an Account?</a>
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
