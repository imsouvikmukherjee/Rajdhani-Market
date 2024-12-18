@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Declare Results</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">




              <!-- <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <h3 class="card-title mb-3 mb-md-0">Markets</h3>
                        <div class=" flex-md-row align-items-center">
                            <button type="btn" class="btn btn-primary mb-2 mb-md-0 mr-md-2 ">Add New</button>
                            <button type="btn" class="btn btn-primary mb-2 mb-md-0 mr-md-2">Search</button>
                            <button type="btn" class="btn btn-primary">Refresh</button>
                        </div>
                    </div>   -->
            </div>
          </div>
        </div>
      </div>




      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="table-responsive mt-5">
                  <div pageindex="1">
                    <form class="row form-div" action="{{route('store_result')}}" method="post">
                      @csrf
                        <div class="row g-3 align-items-center">
                          <h3>Add New Declare Result</h3>
                        </div>
                        <hr>
                        </hr>

                        <div class="form-group row ">
                          <label class="col-sm-3 text-right control-label col-form-label">Market</label>

                          <div class="col-sm-9">


                            <select name="market" class="form-select" aria-label="Default select example">
                              <option selected>Choose Market</option>
                              @foreach($market as $market => $marketData)
                              <option value="{{$marketData->id }}">{{ $marketData->name }}</option>
                              @endforeach
                            </select>
                            @error('market')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>

                        <div class="form-group row ">
                            <label class="col-sm-3 text-right control-label col-form-label">Result Date</label>

                            <div class="col-sm-9">
                              <input type="date" class="form-control" spellcheck="false" value="" name="date"
                                id="s_open_pana" />
                                @error('date')
                                <div class="text-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                          <label class="col-sm-3 text-right control-label col-form-label">Session</label>

                          <div class="col-sm-9">
                            <select name="session" class="form-select" aria-label="Default select example">
                              <option selected>Choose Session</option>
                              <option value="1">Open</option>
                              <option value="0">Close</option>

                            </select>
                            @error('session')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>



                        <!--<div class="form-group row ">-->
                        <!--    <label class="col-sm-3 text-right control-label col-form-label">Result</label>-->

                        <!--    <div class="col-sm-9">-->
                        <!--      <input type="text" class="form-control" spellcheck="false" value="" name="result"-->
                        <!--        id="s_open_pana" />-->
                        <!--        @error('result')-->
                        <!--        <div class="text-danger">{{ $message }}</div>-->
                        <!--       @enderror-->
                        <!--    </div>-->
                        <!--</div>-->
                                  <div class="form-group row ">
                            <label class="col-sm-3 text-right control-label col-form-label">Open Pana</label>

                            <div class="col-sm-9">
                              <input type="text" class="form-control" spellcheck="false" value="" name="open_pana"
                                id="s_open_pana" />
                                @error('open_pana')
                                <div class="text-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>

                 <div class="form-group row ">
                            <label class="col-sm-3 text-right control-label col-form-label">Open Result</label>

                            <div class="col-sm-9">
                              <input type="text" class="form-control" spellcheck="false" value="" name="open_result"
                                id="s_open_pana" />
                                @error('open_result')
                                <div class="text-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                          <label class="col-sm-3 text-right control-label col-form-label">Close Pana</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" spellcheck="false" value="" name="close_pana"
                              id="s_open_pana" />
                              @error('close_pana')
                              <div class="text-danger">{{ $message }}</div>
                             @enderror
                          </div>
                      </div>

                      <div class="form-group row ">
                          <label class="col-sm-3 text-right control-label col-form-label">Close Result</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" spellcheck="false" value="" name="close_result"
                              id="s_open_pana" />
                              @error('close_result')
                              <div class="text-danger">{{ $message }}</div>
                             @enderror
                          </div>
                      </div>



                    </div>
                    <hr></hr>
                    <div class="row g-3 align-items-center mt-1">

                      <div class="col-auto ">
                        <button type="submit" class="btn btn-primary">Submit</button>

                      </div>
                      <div class="col-auto ">
                        <a href="{{route('declare_result')}}"><button type="button" class="btn btn-dark">Go Back</button></a>

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
