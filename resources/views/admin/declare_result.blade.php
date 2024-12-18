@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Declare Results</li>

        </ol> --}}
      </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="row market-btn mt-3">
                <div class="col-6">
                  <h3 class="card-title">Declare Result</h3>
                </div>
                <!-- <div class="col-sm-4"></div> -->
                <div class="col-6 market-btn-div">
                  <div>
                    <a href="{{route('add_result')}}"><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add
                          New</span></button></a>
                  </div>
                  <div>
                    <!-- <a href=""><button type="btn" id="btn1"><i class="bi bi-search"></i><span>Search</span></button></a> -->
                    <button onclick="hideShow()" type="btn" id="btn1"><i
                        class="bi bi-search"></i><span>Search</span></button>
                  </div>
                  <div>
                    <a href="{{route('declare_result')}}"><button type="btn" id="btn1"><i
                          class="bi bi-arrow-clockwise"></i><span>Refresh</span></button></a>
                  </div>
                </div>
              </div>



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


      <div class="row" id="sujon">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="table-responsive mt-3">
                  <div pageindex="1">
                    <form class="row form-div" action="{{route('search_result')}}" method="GET">
                      <div class="row g-3 ">
                        <div class="col-sm-12 col-md-6 ">
                          <h3>Search Declare Results</h3>
                        </div>

                      </div>
                      <hr>
                      </hr>

                      <div class="form-group row formdiv">
                        <label class="col-sm-2 text-right control-label col-form-label">Market</label>

                        <div class="col-sm-6">
                          <select name="search" class="form-select" aria-label="Default select example">
                            <option selected>Choose Market</option>
                            <option value="KALYAN">KALYAN</option>
                            <option value="KALYAN MORNING">KALYAN MORNING</option>
                            <option value="KALYAN NIGHT">KALYAN NIGHT</option>
                            <option value="MADHUR DAY">MADHUR DAY</option>
                            <option value="MADHUR MORNING">MADHUR MORNING</option>
                            <option value="MADHUR NIGHT">MADHUR NIGHT</option>
                            <option value="MAIN BAZAR">MAIN BAZAR</option>
                            <option value="MILAN DAY">MILAN DAY</option>
                            <option value="MILAN MORNING">MILAN MORNING</option>
                            <option value="MILAN NIGHT">MILAN NIGHT</option>
                            <option value="RAJDHANI DAY">RAJDHANI DAY</option>
                            <option value="RAJDHANI NIGHT">RAJDHANI NIGHT</option>
                            <option value="SRIDEVI">SRIDEVI</option>
                            <option value="SRIDEVI NIGHT">SRIDEVI NIGHT</option>
                            <option value="SUPREME DAY">SUPREME DAY</option>
                            <option value="SUPREME NIGHT">SUPREME NIGHT</option>
                            <option value="TIME BAZAR">TIME BAZAR</option>
                          </select>
                        </div>
                        <div class="col-sm-4">
                          <button class="btn btn-success" type="submit">Search</button>
                        </div>
                      </div>


                  </div>
                  <hr>
                  </hr>
                  <div class="row g-3 align-items-center mt-1 formbutton">


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

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="table-responsive mt-5">
                  <div pageindex="1">
                    @if(session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      {{session('success')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>


                          @endif
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th class="align-items-left">Market</th>
                          <th class="align-items-left">Result Date</th>
                          <th class="align-left">Sessions</th>
                          <!--<th class="align-left">Result</th>-->
                        <th class="align-left">Open Pana</th>
                          <th class="align-left">Open Result</th>
                          <th class="align-left">Close Pana</th>
                          <th class="align-left">Close Result</th>
                          <th class="align-left">Controls</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($resultData as $item => $value)
                        <tr class="align-items-center">
                          <td>{{$value->name}}</td>
                          <td>{{$value->date}}</td>
                          @if($value->session == '1')
                          <td><a href=""><button class="btn btn-success">Open</button></a></td>
                          @else
                          <td><a href=""><button class="btn btn-danger">Close</button></a></td>
                          @endif

                          {{-- <!--<td>{{$value->result}}</td>--> --}}
                          <td>{{$value->open_pana}}</td>
                        <td>{{$value->open_result}}</td>
                          <td>{{$value->close_pana}}</td>
                          <td>{{$value->close_result}}</td>
                          <td>
                            <a href="{{url('declare/result_details')}}/{{encrypt($value->id)}}" class="btn btn-outline-success"><i class="bi bi-info-circle-fill"></i></a>
                            <a href="{{url('edit_result')}}/{{encrypt($value->id)}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                            <a onclick="return cnfrm();" href="{{url('declare/delete_result')}}/{{encrypt($value->id)}}" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                            {{-- <a href="" class="btn btn-outline-success"><i
                                class="bi bi-trophy-fill"></i><span>Winners</span></a> --}}
                          </td>
                        </tr>

                        @endforeach

                      </tbody>
                      {{-- {{ $value->onEachSide(5)->links() }} --}}
                    </table>
                    <br>
                    {{ $resultData->links('pagination::bootstrap-5') }}
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


  <script>
    function cnfrm(){
      return confirm('Are you sure you want to delete this result?');
    }
  </script>
  @include('admin.footer')
