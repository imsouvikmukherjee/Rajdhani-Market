@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>
    <!--wrapper-->
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center mb-4 mt-1">
            <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;">
            <h4 class="text-white mt-2">Change Password</h4>
        </div>


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        {{ session('success') }}

    </div>
@endif


        <div class="p-3" style="width: 100%; max-width: 500px;">
            <form class="row g-3" action="{{route('user_change_password_store')}}" method="POST">
                @csrf
                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent">
                            <i class="bx bx-mail-send"></i>
                        </span>
                        <input type="password" class="form-control border-start-0" id="inputEmail"
                            placeholder="New Password" name="password" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent">
                            <i class="bx bx-mail-send"></i>
                        </span>
                        <input type="password" class="form-control border-start-0" id="inputEmail"
                            placeholder="Confirm New Password" name="confirm_password" />
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <button type="submit" class="btn p-2 w-100 text-white"
                        style="background-color: #eb6001; border-radius: 60px;">Change</button>
                </div>
            </form>


        </div>
    </div>

    @endsection
