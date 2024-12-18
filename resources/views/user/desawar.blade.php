@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>
    <div class="container text-center mt-4">
        <h2 class="mb-4">{{$market->name}}</h2>
        <hr class="mb-4">
        <div class="row justify-content-center">
            <div class="col-md-3 col-6">
                <a href="{{url('/user/disawar-add-bid')}}/{{$market->name}}/{{'Left Digit'}}">
                <div class="card p-4">
                    <img src="{{url('user-asset/images/controller-icon.png')}}" alt="Left Digit" class="img-fluid card-img">
                    <p class="mt-3">Left Digit</p>
                </div>
            </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="{{url('/user/disawar-add-bid')}}/{{$market->name}}/{{'Right Digit'}}">
                <div class="card p-4">
                    <img src="{{url('user-asset/images/controller-icon.png')}}" alt="Right Digit" class="img-fluid card-img">
                    <p class="mt-3">Right Digit</p>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="{{url('/user/disawar-add-bid')}}/{{$market->name}}/{{'Jodi Digit'}}">
                <div class="card p-4">
                    <img src="{{url('user-asset/images/controller-icon.png')}}" alt="Jodi Digit" class="img-fluid card-img">
                    <p class="mt-3">Jodi Digit</p>
                </div>
                </a>
            </div>
            {{-- <div class="col-md-3 col-6">
                <div class="card p-4">
                    <img src="{{url('user-asset/images/controller-icon.png')}}" alt="Jodi Digit" class="img-fluid card-img">
                    <p class="mt-3">Jodi Digit</p>
                </div>
            </div> --}}
        </div>
    </div>




      @endsection
