@extends('user.layout.main')

@Section('main-container')
    <div class="overlay" id="overlay"></div>
    <!--wrapper-->
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <h4 class="text-white my-4">PhonePe Credentials</h4>
        <div class="text-center mb-4 mt-1">

            <img src="{{ asset('user-asset/' . $upi->qr) }}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 300px;">
            <p class="mt-3 text-muted">UPI ID - {{$upi->upi_id}}</p>
            <p class="text-muted">Number - {{$upi->upi_number}}</p>
            <a href="{{ asset('user-asset/' . $upi->qr) }}" download="">Click Here To Download QR</a>
        </div>


    </div>


@endsection
