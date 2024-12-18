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
    <title>Forgot Password</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center mb-4 mt-1">
            <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;">
            <h4 class="text-white mt-2">Forgot Password</h4>
        </div>

        <div class="p-3" style="width: 100%; max-width: 500px;">
            <form class="row g-3">
                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent">
                            <i class="bx bx-mail-send"></i>
                        </span>
                        <input type="email" class="form-control border-start-0" id="inputEmail"
                            placeholder="Enter Email" required />
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <button type="submit" class="btn p-2 w-100 text-white"
                        style="background-color: #eb6001; border-radius: 60px;">Submit</button>
                </div>
            </form>


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
