@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>
    <div class="container text-center mt-4">


            <!-- Game Rates Section -->
            <div class="mb-3">
                <div class="row text-center">
                    <div class="col-12">
                        <button class="btn btn-outline-light mt-2 w-100">Single Digit: <strong>10 - 90</strong></button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light  mt-2 w-100">Single Panna: <strong>10 - 1400</strong></button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light  mt-2 w-100">Double Panna: <strong>10 - 2800</strong></button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light  mt-2 w-100">Triple Panna: <strong>10 - 7000</strong></button>
                    </div>
                </div>
            </div>

            <!-- Game Timings Section -->
            <div class="game-list">
                <div class="game-item mb-2 p-3 bg-secondary rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-start">
                            <span class="star">★</span>10.00 AM
                        </div>
                        <div class="text-center">****</div>
                        <div class="text-end">
                            <span class="badge bg-success">Open</span>
                            <i class="bi bi-play-circle-fill text-light"></i>
                        </div>
                    </div>
                </div>

                <div class="game-item mb-2 p-3 bg-secondary rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-start">
                            <span class="star">★</span> 10.00 AM
                        </div>
                        <div class="text-center">****</div>
                        <div class="text-end">
                            <span class="badge bg-danger">Closed</span>
                            <i class="bi bi-stop-circle-fill text-light"></i>
                        </div>
                    </div>
                </div>

                <div class="game-item mb-2 p-3 bg-secondary rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-start">
                            <span class="star">★</span> 02.00 AM
                        </div>
                        <div class="text-center">****</div>
                        <div class="text-end">
                            <span class="badge bg-danger">Closed</span>
                            <i class="bi bi-stop-circle-fill text-light"></i>
                        </div>
                    </div>
                </div>

                <div class="game-item mb-2 p-3 bg-secondary rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-start">
                            <span class="star">★</span> 12.00 AM
                        </div>
                        <div class="text-center">****</div>
                        <div class="text-end">
                            <span class="badge bg-success">Open</span>
                            <i class="bi bi-play-circle-fill text-light"></i>
                        </div>
                    </div>
                </div>

                <div class="game-item mb-2 p-3 bg-secondary rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-start">
                            <span class="star">★</span>18.00 AM
                        </div>
                        <div class="text-center">****</div>
                        <div class="text-end">
                            <span class="badge bg-danger">Closed</span>
                            <i class="bi bi-stop-circle-fill text-light"></i>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <button>Coming Soon</button>
                  </div>
            </div>


    </div>



   @endsection
