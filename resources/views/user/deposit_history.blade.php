
@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>

    <div class="container text-center mt-4">
        <!-- Logo Section -->
        <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid mb-3" style="max-width: 200px;">

        <div class="text-center mb-4 mt-1">
            {{-- <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;"> --}}
            <h4 class="text-white mt-2">Deposit History</h4>
            <hr class="mb-4">
        </div>

        <div class="table-responsive">
        <table class="table text-white">
            <thead>
              <tr>
                <th scope="col">Deposit ID</th>
                <th scope="col">Amount</th>
                <th scope="col">Method</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>

                @forEach($data as $item)
              <tr>
                <th scope="row">{{$item->deposit_id}}</th>
                <td>{{$item->amount}}</td>
                <td>
                    @if($item->payment_method == 0)
                    <span>PhonePe</span>
                    @elseif($item->payment_method == 1)
                    <span>GooglePay</span>
                    @else
                    <span>Paytm</span>
                    @endif

                </td>
                <td>{{$item->created_at}}</td>
                <td>
                    @if($item->payment_status == 0)
                    <span class="text-warning">In Progress</span>
                    @else
                    <span class="text-success">Success</span>
                    @endif

                </td>
              </tr>

            @endforeach

            </tbody>
          </table>
        </div>
@endsection
