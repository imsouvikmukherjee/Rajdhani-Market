@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Add Notice</li>

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
                    <form class="row form-div" action="{{route('add_notice_store')}}" method="POST">
                        @csrf
                      <div class="row g-3 align-items-center">
                        <h3>Add Notice</h3>
                      </div>
                      <hr>
                      </hr>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Notice Title</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="" name="title"
                            id="s_open_pana" />
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror

                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Description</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" name="description"
                            id="s_open_pana"></input>
                            @error('description')
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
                      <a href="{{route('notice')}}"><button type="button" class="btn btn-dark">Go Back</button></a>

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
