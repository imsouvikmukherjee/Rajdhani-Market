
@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>



        <!-- Market Information Cards -->


       <div class="container">
        <div class="text-center mb-4 mt-4">
            {{-- <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;"> --}}
            <h4 class="text-white mt-2">Notice</h4>
            <hr class="mb-4">
        </div>

        @foreach($notice as $item)

        <div class="row my-5">
            <div class="col-sm-12">
                <div class="market-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="text-center text-white">{{$item->title}}</h5>
                            <hr>
                            <p class="text-white">{{$item->description}}</p>
                            <p class="pt-3">Published_At: {{$item->created_at}}</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

       @endforeach


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
