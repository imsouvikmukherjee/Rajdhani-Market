
@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>



        <!-- Market Information Cards -->


       <div class="container">
        <div class="text-center mb-4 mt-4">
            {{-- <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;"> --}}
            <h4 class="text-white mt-2">Contact Us</h4>
            <hr class="mb-4">
        </div>

        {{-- @foreach($notice as $item) --}}

        <div class="row my-5">
            <div class="col-sm-12">
                <div class="market-card">
                    <div class="d-flex justify-content-between align-items-center">

                        <h5 class="text-center my-3">Contact - {{$numbers->contact}}</h5>

                        <h5 class="text-center my-3">Whatsapp - {{$numbers->whatsapp}}</h5>


                    </div>

                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a href="https://web.telegram.org/" class="btn btn-primary" style="border-radius: 60px;">Join Telegram</a>
                </div>
            </div>
        </div>

       {{-- @endforeach --}}


       </div>





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
