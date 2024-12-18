

@include('admin.header')

  <main id="main" class="main">
    <div class="container mt-40">
      <div class="col-12">
        <div class="row">
          <div class="col-md-3">
            <div class="card card mini-stats-wid">
              <a href="{{route('users')}}">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <p class="text-muted fw-medium pt-4 px-4">users</p>
                      <h4 class="mb-0 px-4 text-color">{{$user_count}}</h4>
                    </div>
                    <div class="mini-stat-icon align-self-center">
                      <span class="avatar-title">
                        <i class="bi bi-person-fill "></i>
                      </span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card mini-stats-wid">
              <a href="{{route('games_type')}}">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <p class="text-muted fw-medium pt-4 px-4">Games & Rates</p>
                      <h4 class="mb-0 px-4 text-color">{{$game_types}}</h4>
                    </div>
                    <div class="mini-stat-icon align-self-center">
                      <span class="avatar-title">
                        <i class="bi bi-cloud-arrow-down-fill"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card mini-stats-wid">
              <a href="{{route('withdraw_request')}}">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <p class="text-muted fw-medium pt-4 px-4">Withdraw Count</p>
                      <h4 class="mb-0 px-4 text-color">{{$withdraw}}</h4>
                    </div>
                    <div class="mini-stat-icon align-self-center">
                      <span class="avatar-title">
                        <i class="bi bi-tag-fill"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card mini-stats-wid">
              <a href="{{route('deposit_request')}}">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <p class="text-muted fw-medium pt-4">Deposit Count</p>
                      <h4 class="mb-0 px-4 text-color">{{$deposit_request}}</h4>
                    </div>
                    <div class="mini-stat-icon align-self-center">
                      <span class="avatar-title">
                        <i class="bi bi-currency-rupee"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        
       

      
        
      </div>

      
    </div>




    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
   
   
  </footer><!-- End Footer -->

  @include('admin.footer')