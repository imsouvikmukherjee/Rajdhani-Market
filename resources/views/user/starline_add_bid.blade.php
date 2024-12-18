@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>
    <a href="{{route('starline_markets')}}" class="btn mt-4 ml-4"><i class="fadeIn animated bx bx-arrow-back"></i>Back</a>
    <div class="container text-center mt-4">
        <div class="container  d-flex flex-column justify-content-center align-items-center">
            <div class="text-center mb-4 mt-1">

                <h2 class="mb-4">{{$game_name->name}} ({{$marketname}})</h2>
                {{-- <h2 class="mb-4">{{$marketname}}</h2> --}}
                <hr class="mb-4">
            </div>

            <div class="p-3" style="width: 100%; max-width: 500px;">

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

                <form class="row g-3" action="{{url('starline-games-add-bid-store')}}/{{$marketname}}/{{$game_name->name}}" method="POST">
                    @csrf

                    <div class="col-12">
                        <label for="" class="form-label">Choose Session: </label>
                        <div class="input-group input-group-lg d-block mx-auto">

                    <div class="form-check form-check-inline px-5 py-2 my-2" style="background-color: #eb6001; border-radius: 60px;">
                        <input class="form-check-input " type="radio" name="session" id="inlineRadio1" value="open">
                        <label class="form-check-label" for="inlineRadio1">Open</label>
                      </div>

                      <div class="form-check form-check-inline px-5 py-2 my-2" style="background-color: #eb6001; border-radius: 60px;">
                        <input class="form-check-input" type="radio" name="session" id="inlineRadio1" value="close">
                        <label class="form-check-label" for="inlineRadio1">Close</label>
                      </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-group input-group-lg">

                            <input type="Number" class="form-control border-start-0" id="inputEmail"
                                placeholder="ENTER {{$game_name->name}}" name="game_digit"/>
                        </div>
                    </div>

                     <div class="col-12">
                        <div class="input-group input-group-lg">

                            <input type="number" class="form-control border-start-0" id="inputEmail"
                                placeholder="Enter Amount" name="amount"/>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn p-2 w-100 text-white"
                            style="background-color: #eb6001; border-radius: 60px;">Add Bid</button>
                    </div>
                </form>


            </div>
        </div>

    </div>




@endsection
