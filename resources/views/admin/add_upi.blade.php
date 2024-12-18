@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Upi</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
    
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            
              <div class="row">
                <div class="table-responsive mt-1">
                  <div pageindex="1">
                    <form class="row form-div" action="{{route('upi-update', encrypt($upi->id))}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                      <div class="row g-3 align-items-center">
                        <h3>Update Upi</h3>
                      </div>
                      <hr>
                      </hr>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Phone Pay</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$upi->phonepay}}" name="phonepay"
                            id="s_open_pana" />
                            @error('phonepay')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
  
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Google Pay</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" name="googlepay"
                            id="s_open_pana" value="{{$upi->googlepay}}"></input>
                            @error('googlepay')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        
                      </div>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">PayTm</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" name="paytm"
                            id="s_open_pana" value="{{$upi->paytm}}"></input>
                            @error('paytm')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Scanner</label>

                        <div class="col-sm-9">
                          <input type="file" class="form-control" spellcheck="false" name="image"
                            id="s_open_pana" value="{{$upi->scanner}}"></input>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        
                      </div>

                  </div>
                  <hr>
                  </hr>
                  <div class="row g-3 align-items-center mt-1">

                    <div class="col-auto ">
                     <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                    <div class="col-auto ">
                      <a href="{{route('games_type')}}"><button type="button" class="btn btn-dark">Go Back</button></a>

                    </div>
                  </div>

                  </form>
                </div>
              </div>
            </div>

            <div class="admin row pt-3">
              <div class="col-sm-12 col-md-2">

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>




  </main><!-- End #main -->


  @include('admin.footer')