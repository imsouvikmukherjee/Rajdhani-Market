@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>
    <a href="{{url('user/dashboard')}}" class="btn mt-4 ml-4"><i class="fadeIn animated bx bx-arrow-back"></i>Back</a>

    <div class="container text-center mt-4">

        <h2 class="mb-4">{{$market_name->name}}</h2>
        {{-- <hr class="mb-4"> --}}
        <div class="row justify-content-center">

            @foreach($game_types as $game)

           <div class="col-md-3 col-6" >
            <a href="{{url('/user/market-game-bid')}}/{{encrypt($game->id)}}/{{$market_name->name}}">
                <div class="card p-4" >
                    <img src="{{url('user-asset/images/controller-icon.png')}}" alt="Left Digit" class="img-fluid card-img">
                    <p class="mt-3">{{$game->name}}</p>
                </div>
            </a>
            </div>

            @endforeach
        </div>
    </div>




      @endsection
