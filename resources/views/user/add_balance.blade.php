@extends('user.layout.main')

@Section('main-container')
    <div class="overlay" id="overlay"></div>
    <!--wrapper-->
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center mb-4 mt-1">
            {{-- <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;"> --}}
            <h4 class="text-white mt-2">Add Balance</h4>
            <hr class="mb-4">
        </div>

        <div class="p-1" style="width: 100%; max-width: 500px;">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('add_balance_store') }}" class="row g-3">
                @csrf
                <div class="col-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent">
                            <i class="fadeIn animated bx bx-rupee"></i>
                        </span>

                        <input type="tel" class="form-control border-start-0" id="amountInput" name="amount"
                            placeholder="Enter Amount" />
                    </div>
                </div>

                <div class="container text-center mt-4">
                    <div class="row mb-4">

                        <div class="col-4 my-2">
                            <button type="button" class="btn btn-warning w-100 py-2" style="border-radius: 60px;"
                                data-amount="500">500</button>
                        </div>
                        <div class="col-4 my-2">
                            <button type="button" class="btn btn-warning w-100 py-2" style="border-radius: 60px;"
                                data-amount="1000">1000</button>
                        </div>
                        <div class="col-4 my-2">
                            <button type="button" class="btn btn-warning w-100 py-2" style="border-radius: 60px;"
                                data-amount="2000">2000</button>
                        </div>
                        <div class="col-4 my-2">
                            <button type="button" class="btn btn-warning w-100 py-2" style="border-radius: 60px;"
                                data-amount="3000">3000</button>
                        </div>
                        <div class="col-4 my-2">
                            <button type="button" class="btn btn-warning w-100 py-2" style="border-radius: 60px;"
                                data-amount="5000">5000</button>
                        </div>
                        <div class="col-4 my-2">
                            <button type="button" class="btn btn-warning w-100 py-2" style="border-radius: 60px;"
                                data-amount="10000">10000</button>
                        </div>
                    </div>
                </div>


                <label for="" class="form-label">Select</label>
                <div class="form-check bg-light text-dark py-2 text-center ">
                    <input class="form-check-input m-1" type="radio" style="background-color: #eb6001;" value="0"
                        name="option" id="flexRadioDefault1">
                    <label class="form-check-label mt-1" for="flexRadioDefault1">
                        PhonePe
                    </label>

                </div>

                <div class="form-check bg-light text-dark py-2 text-center">
                    <input class="form-check-input m-1" type="radio" style="background-color: #eb6001;" value="1"
                        name="option" id="flexRadioDefault1">
                    <label class="form-check-label mt-1" for="flexRadioDefault1">
                        Google Pay
                    </label>

                </div>

                <div class="form-check bg-light text-dark py-2 text-center">
                    <input class="form-check-input m-1" type="radio" style="background-color: #eb6001;" value="2"
                        name="option" id="flexRadioDefault1">
                    <label class="form-check-label mt-1" for="flexRadioDefault1">
                        Paytm {{-- <img src="{{url('user-asset/images/paytm.jpg')}}" class="img-fluid" style="height: 40px" width="120px" alt="" srcset=""> --}}
                    </label>

                </div>


                <div class="d-grid">
                    <button type="submit" class="btn p-3" style="background-color: #eb6001; border-radius: 60px;">Add
                        Balance</button>
                </div>
            </form>




        </div>
        <a href="{{route('deposit_history')}}" class="text-center my-3">Click Here To Check Your Deposit History</a>
    </div>


    <script>
        const amountInput = document.getElementById('amountInput');
        const buttons = document.querySelectorAll('[data-amount]');


        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const amount = this.getAttribute('data-amount');
                amountInput.value = amount;
            });
        });
    </script>
@endsection
