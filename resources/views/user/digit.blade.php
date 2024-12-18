@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>
    <div class="container text-center mt-4">
        <div class="container  d-flex flex-column justify-content-center align-items-center">
            <div class="text-center mb-4 mt-1">
                <h2 class="mb-4">Left Digit</h2>
                <hr class="mb-4">
            </div>

            <div class="p-3" style="width: 100%; max-width: 500px;">
                <form class="row g-3">
                    <div class="col-12">
                        <div class="input-group input-group-lg">

                            <input type="date" class="form-control border-start-0" id="inputEmail"
                                placeholder="Enter  Game Date" required />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-group input-group-lg">

                            <input type="number" class="form-control border-start-0" id="inputEmail"
                                placeholder="Enter Left Digit" required />
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="input-group input-group-lg">

                            <input type="Number" class="form-control border-start-0" id="inputEmail"
                                placeholder="Enter Point" required />
                        </div>
                    </div>


                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn p-2 w-100 text-white"
                            style="background-color: #eb6001; border-radius: 60px;">Add Bid</button>
                    </div>
                </form>


            </div>
        </div>

    </div>




@endsection
