@extends('user.layout.main')

@section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>
    <p class="text-center text-white bg-success py-2">Withdraw Available From 06:00 AM to 11:00 PM.</p>

    <div class="container text-center mt-4">
        {{-- <h2 class="mb-4">Withdraw Notice</h2> --}}
        {{-- <hr class="mb-4"> --}}
        <div class="text-center mb-4 mt-1">
            {{-- <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;"> --}}
            <h4 class="text-white mt-2">Withdraw Points</h4>
            <hr class="mb-4">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 col-6">
                <div class="card p-4">
                    <img src="{{url('user-asset/phonepe.png')}}" alt="PhonePe Logo" class="img-fluid card-img">
                    <p class="mt-3">PhonePe</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card p-4">
                    <img src="{{url('user-asset/gpay.jpeg')}}" alt="Google Pay Logo" class="img-fluid card-img">
                    <p class="mt-3">Google Pay</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card p-4">
                    <img src="{{url('user-asset/paytm.jpg')}}" alt="Paytm Logo" class="img-fluid card-img">
                    <p class="mt-3">Paytm</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card p-4">
                    <img src="{{url('user-asset/bank.jpg')}}" alt="Bank Logo" class="img-fluid card-img">
                    <p class="mt-3">Bank</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                        {{ session('success') }}

                    </div>
                @endif

                <form action="{{ route('withdraw_store') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-transparent"><i class="bi bi-coin"></i></span>
                            <input type="number" class="form-control border-start-0" id="inputPhone" name="points" value="{{old('points')}}" placeholder="Enter Points" />
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="input-group input-group-lg">
                            <select id="upiSelect" class="form-select input-group-text bg-transparent text-white" name="payment_method" aria-label="Default select example">
                                <option selected disabled>Select Method</option>
                                <option value="1" {{old('payment_method') == 1?'selected':''}}>PhonePe</option>
                                <option value="2" {{old('payment_method') == 2?'selected':''}}>Google Pay</option>
                                <option value="3" {{old('payment_method') == 3?'selected':''}}>Paytm</option>
                                <option value="4" {{old('payment_method') == 4?'selected':''}}>Bank</option>
                            </select>
                        </div>
                    </div>

                    <!-- UPI number input field -->
                    <div id="upiInputField" class="col-12 mt-3" style="display:none;">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-transparent"><i class="bi bi-coin"></i></span>
                            <input type="number" class="form-control border-start-0" id="upiNumber" name="upi_number" placeholder="Enter Your UPI Number" />
                        </div>
                    </div>

                    <!-- Bank details section, automatically shown when Bank option is selected -->
                    <div id="bankDetailsSection" style="display:none;">
                        <div class="col-12 mt-3">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-transparent"><i class="bi bi-coin"></i></span>
                                <input type="text" class="form-control border-start-0" name="accounts_holder_name" placeholder="Enter Account Holder Name" />
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-transparent"><i class="bi bi-coin"></i></span>
                                <input type="number" class="form-control border-start-0" name="account_number" placeholder="Enter Account Number" />
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-transparent"><i class="bi bi-coin"></i></span>
                                <input type="number" class="form-control border-start-0" name="confirm_account_number" placeholder="Confirm Account Number" />
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-transparent"><i class="bi bi-coin"></i></span>
                                <input type="text" class="form-control border-start-0" name="ifsc_code" placeholder="IFSC Code" />
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-transparent"><i class="bi bi-coin"></i></span>
                                <input type="text" class="form-control border-start-0" name="bank_name" placeholder="Bank Name" />
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-transparent"><i class="bi bi-coin"></i></span>
                                <input type="text" class="form-control border-start-0" name="branch" placeholder="Branch Address" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn p-3 w-100 mt-3" style="background-color: #eb6001; border-radius: 60px;">Submit</button>
                </form>

            </div>
            <div class="col-sm-4"></div>
        </div>

        <div class="text-center my-3">
            <a href="{{ route('withdraw_history') }}">Click Here To Check Your Withdraw History</a>
        </div>
    </div>

    <script>
        document.getElementById('upiSelect').addEventListener('change', function() {
            var selectedValue = this.value;
            var upiInputField = document.getElementById('upiInputField');
            var upiNumberInput = document.getElementById('upiNumber');
            var bankDetailsSection = document.getElementById('bankDetailsSection');

            if (selectedValue === '1') {
                upiInputField.style.display = 'block';
                upiNumberInput.placeholder = "Enter PhonePe Number";
                bankDetailsSection.style.display = 'none';
            } else if (selectedValue === '2') {
                upiInputField.style.display = 'block';
                upiNumberInput.placeholder = "Enter Google Pay Number";
                bankDetailsSection.style.display = 'none';
            } else if (selectedValue === '3') {
                upiInputField.style.display = 'block';
                upiNumberInput.placeholder = "Enter Paytm Number";
                bankDetailsSection.style.display = 'none';
            } else if (selectedValue === '4') {
                upiInputField.style.display = 'none';
                bankDetailsSection.style.display = 'block';
            } else {
                upiInputField.style.display = 'none';
                bankDetailsSection.style.display = 'none';
            }
        });
    </script>

@endsection
