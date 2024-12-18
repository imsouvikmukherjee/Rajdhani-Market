@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Update UPI</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

                @if(session('success'))
                <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                    {{ session('success') }}

                </div>
            @endif

              <div class="row">
                <div class="table-responsive mt-1">
                  <div pageindex="1">
                    <form class="row form-div" action="{{ route('upload.qr') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="row g-3 align-items-center">
                        <h3>Update UPI</h3>
                      </div>
                      <hr>
                      </hr>




                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Upload QR</label>

                        <div class="col-sm-9">
                          <input type="file" class="form-control" spellcheck="false"  name="qr_code"
                            id="s_open_pana"></input>
                            @error('qr_code')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">UPI Id</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$data->upi_id}}"  name="upi_id"
                            id="s_open_pana"></input>
                            @error('upi_id')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">UPI Number</label>

                        <div class="col-sm-9">
                          <input type="number" class="form-control" spellcheck="false" value="{{$data->upi_number}}" name="upi_number"
                            id="s_open_pana"></input>
                            @error('upi_number')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>

                  </div>
                  <hr>
                  </hr>
                  <div class="row g-3 align-items-center mt-1">

                    <div class="col-auto ">
                     <button type="submit" class="btn btn-primary">Update</button>

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
