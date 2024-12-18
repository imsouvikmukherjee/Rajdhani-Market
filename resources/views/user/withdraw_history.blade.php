
@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>

    <div class="container text-center mt-4">
        <!-- Logo Section -->
        <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid mb-3" style="max-width: 200px;">

        <div class="text-center mb-4 mt-1">
            {{-- <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;"> --}}
            <h4 class="text-white mt-2">Withdraw History</h4>
            <hr class="mb-4">
        </div>

        <div class="table-responsive">
        <table class="table text-white">
            <thead>
              <tr>
                <th scope="col">Amount</th>
                <th scope="col">Balance</th>
                <th scope="col">Method</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>

                @forEach($data as $item)
              <tr>
                {{-- <th scope="row">{{$item->deposit_id}}</th> --}}
                <td>{{$item->points}}</td>
                <td>{{$item->balance}}</td>
                <td>
                    @if($item->payment_method == 1)
                    <span>PhonePe</span>
                    @elseif($item->payment_method == 2)
                    <span>GooglePay</span>
                    @elseif($item->payment_method == 3)
                    <span>Paytm</span>
                    @else
                    <span>Bank</span>
                    @endif

                </td>
                <td>{{$item->created_at}}</td>
                <td>
                    @if($item->status == 0)
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
