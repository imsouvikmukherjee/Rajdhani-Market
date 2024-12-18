@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Starline Games</li>

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
                    <form class="row form-div" action="{{url('starline-games-edit-store')}}/{{encrypt($data->id)}}" method="POST">
                        @csrf
                      <div class="row g-3 align-items-center">
                        <h3>Update Starline Games</h3>
                      </div>
                      <hr>
                      </hr>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Market Name</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$data->name}}" name="market_name"
                            id="s_open_pana"></input>
                            @error('market_name')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Time</label>

                        <div class="col-sm-9">
                          <input type="time" class="form-control" spellcheck="false" value="{{$data->time}}" name="time"
                            id="s_open_pana" />
                            @error('time')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror

                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Open Pana</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$data->open_pana}}" name="open_pana"
                            id="s_open_pana"></input>
                            @error('open_pana')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Open Result</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$data->open_result}}" name="open_result"
                            id="s_open_pana"></input>
                            @error('open_result')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Close Pana</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$data->close_pana}}" name="close_pana"
                            id="s_open_pana"></input>
                            @error('close_pana')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Close Result</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$data->close_result}}" name="close_result"
                            id="s_open_pana"></input>
                            @error('close_result')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Status</label>

                        <div class="col-sm-9">
                          <select name="status" class="form-select" aria-label="Default select example">
                            <option selected>Choose Status</option>
                            <option value="0" {{$data->status == '0'?'selected':''}}>Close</option>
                            <option value="1" {{$data->status == '1'?'selected':''}}>Open</option>
                          </select>
                          @error('status')
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
                      <a href="{{route('starline_games')}}"><button type="button" class="btn btn-dark">Go Back</button></a>

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
