
@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>

    <div class="container text-center mt-4">
        <!-- Logo Section -->
        <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid mb-3" style="max-width: 200px;">

        <div class="text-center mb-4 mt-1">
            {{-- <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;"> --}}
            <h4 class="text-white mt-2">Bid History</h4>
            <hr class="mb-4">
        </div>


        @if ($data->isEmpty())
        <p class="text-center text-muted my-3">No data available</p>
        @else

        <div class="table-responsive">
        <table class="table text-white">
            <thead>
              <tr>
                <th scope="col">Market Name</th>
                <th scope="col">Game</th>
                <th scope="col">Session</th>
                <th scope="col">Digit</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th>
                <th scope="col">Wining Status</th>
              </tr>
            </thead>
            <tbody>

                @forEach($data as $item)
              <tr>
                <td>{{$item->marketname}}</td>
                <td>{{$item->gamename}}</td>
                @if($item->session == 'open')
                <td class="text-success">{{$item->session}}</td>
                @elseif($item->session == 'close')
                <td class="text-danger">{{$item->session}}</td>
                @else
                <td>{{$item->session}}</td>
                @endif


                <td>{{$item->digit}}</td>
                <td>{{$item->amount}}</td>
                <td>{{$item->date}}</td>
                <td>
                    @if($item->win == 1)
                        <span class="text-success">Win</span>
                    @else
                        <span class="text-danger">Try Again</span>
                    @endif
                </td>

              </tr>

            @endforeach

            </tbody>
          </table>
          @endif
        </div>
@endsection
