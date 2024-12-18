
@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>

    <div class="container text-center mt-4">
        <!-- Logo Section -->
        <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid mb-3" style="max-width: 200px;">

        <!-- Contact Buttons -->
        <div class="row contact-btns mb-4">
            <div class="col">
                <a href="tel:{{$numbers->contact}}" class="btn btn-outline-light w-100 py-2" aria-label="Call 6367223825"><i class="bx bx-phone"></i> {{$numbers->contact}}</a>
            </div>
            <div class="col">
                <a href="https://wa.me/{{$numbers->whatsapp}}" class="btn btn-outline-light w-100 py-2" aria-label="Chat on WhatsApp"><i class="bx bxl-whatsapp"></i> {{$numbers->whatsapp}}</a>
            </div>
        </div>

        <!-- Games Buttons -->
        <div class="row mb-4">
            <div class="col">
                <a href="{{route('starline_markets')}}" class="btn btn-outline-light w-100 py-2" aria-label="Play Starline Games"><i class="bx bx-star"></i> Starline Games</a>
            </div>
            <div class="col">
                <a href="{{route('desawar_market')}}" class="btn btn-outline-light w-100 py-2" aria-label="Play Gali: Disawar"><i class="bx bx-map"></i> Gali: Disawar</a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <a href="{{route('add_balance')}}" class="btn btn-warning w-100 py-2" aria-label="Play Starline Games">Add Points</a>
            </div>
            <div class="col">
                <a href="{{route('withdraw')}}" class="btn btn-warning w-100 py-2" aria-label="Play Gali: Disawar">Withdraw</a>
            </div>
        </div>

        <!-- Market Information Cards -->

        @foreach ($markets as $item)

        <div class="market-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <small>Open: {{$item->start_time}}</small> | <small>Closed: {{$item->close_time}}</small>
                    <h5>{{$item->name}}</h5>

                    <p>{{$item->open_pana ? $item->open_pana:'***'}}-{{$item->open_result ? $item->open_result:'*'}}{{$item->close_result ? $item->close_result:'*'}}-{{$item->close_pana ? $item->close_pana : '***'}}</p>
                    {{-- @php
                        echo $item->id;
                    @endphp --}}
                </div>
                @if($item->status == 0)
                <div class="market-status">Market Close</div>
                @else
                <a href="{{url('user/market-details')}}/{{encrypt($item->id)}}"><div class="market-status bg-success">Market Open</div></a>
                @endif

            </div>
        </div>
        @endforeach




        {{-- <div class="market-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <small>Open: 11:00</small> | <small>Closed: 12:00</small>
                    <h5>Kalyan Morning</h5>
                    <p>********</p>
                </div>
                <div class="market-status">Market Close</div>
            </div>
        </div>
    </div> --}}

@endsection
