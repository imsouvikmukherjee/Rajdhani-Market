
@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>

    <div class="container text-center mt-4">
        <!-- Logo Section -->


        <!-- Contact Buttons -->


        <div class="row mb-4">
            <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid mb-3" style="max-width: 200px; max-height:200px">
            <div class="col mt-4">
                @foreach($game_types as $game)
               <p class="bg-white text-dark px-2 py-1"><span >👉 {{$game->name}}: {{$game->rate? $game->rate:'N/A'}}</span></p>
               @endforeach
               {{-- <p class="bg-white text-dark px-2 py-1"><span >👉 Single Panna: 10 - 1400</span></p>
               <p class="bg-white text-dark px-2 py-1"><span >👉 Double Panna: 10 - 2800</span></p>
               <p class="bg-white text-dark px-2 py-1"><span >👉 Triple Panna: 10 - 7000</span></p> --}}
            </div>
        </div>

        <!-- Games Buttons -->
        {{-- <div class="row mb-4">
            <div class="col">
                <a href="#" class="btn btn-outline-light w-100 py-2" aria-label="Play Starline Games"><i class="bx bx-star"></i> Starline Games</a>
            </div>
            <div class="col">
                <a href="#" class="btn btn-outline-light w-100 py-2" aria-label="Play Gali: Disawar"><i class="bx bx-map"></i> Gali: Disawar</a>
            </div>
        </div> --}}



        <!-- Market Information Cards -->

        @foreach ($markets as $item)

        <div class="market-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <small>Open: {{$item->time}}</small>
                    <h5>{{$item->name}}</h5>

                    <p>{{$item->open_pana}}-{{$item->open_result}}{{$item->close_result}}-{{$item->close_pana}}</p>
                    {{-- @php
                        echo $item->id;
                    @endphp --}}
                </div>

                @if($item->status == 1)
                <a href="{{url('/starline-games')}}/{{encrypt($item->id)}}"><div class="market-status bg-success">Market Open</div></a>
                @else
                <div class="market-status bg-danger">Market Close</div>
                @endif

            </div>
        </div>
        @endforeach






@endsection
