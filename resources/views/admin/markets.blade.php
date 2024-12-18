

@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Markets</li>

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
                  <h3 class="card-title">Markets</h3>
                </div>
                <!-- <div class="col-sm-4"></div> -->
                <div class="col-6 market-btn-div">
                  <div>
                    <a href="{{route('add_market_view')}}"><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add New</span></button></a>
                  </div>
                  <div>
                    
                    <button onclick="hideShow()" type="btn" id="btn1"><i class="bi bi-search"></i><span>Search</span></button>
                  </div>
                  <div>
                    <a href="{{route('markets')}}"><button type="btn" id="btn1"><i class="bi bi-arrow-clockwise"></i><span>Refresh</span></button></a>
                  </div>
                </div>
              </div>
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
                  
                      <div class="row g-3 ">
                        <div class="col-sm-12 col-md-6 "><h3>Search Markets</h3></div>
                        {{-- <div class="col-sm-12 col-md-6 "><a href="" class="sujon1"><i class="bi bi-search"></i><span>Advance Search</span></a></div> --}}
                      </div>
                      <hr>
                      </hr>
                      <form class="row form-div" action="{{route('search_market')}}" method="get">
                      <div class="form-group row formdiv">
                        <label class="col-sm-2 text-right control-label col-form-label">Name</label>
    
                        <div class="col-sm-6">
                          <input type="text" class="form-control" spellcheck="false" value="" name="search"
                            id="s_open_pana" placeholder="market name"/>
                        </div>
                        <div class="col-sm-4 ">
                          <button type="submit" class="btn btn-success"><i class="bi bi-search"></i><span>Search</span></button>
    
                        </div>
                      </form>
                      </div>

                     

                  </div>
                  <hr></hr>
                  <div class="row g-3 align-items-center mt-1 formbutton">

                   
                 
                  </div>

                 


                  
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
            @if(session('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              {{session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              
            </div>
              
          @endif
            <div class="card-body">
              <div class="row">
                <div class="table-responsive mt-5">
                  <div pageindex="1">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th class="align-items-left">Name</th>
                            <th class="align-left">Result</th>
                          <th class="align-items-left">URL</th>
                          <th class="align-left">Start Time</th>
                          <th class="align-left">Close Time</th>
                          <th class="align-left">Status</th>
                        
                          <th class="align-left">Monday</th>
                          <th class="align-left">Tuesday</th>
                          <th class="align-left">Wednesday</th>
                          <th class="align-left">Thursday</th>
                          <th class="align-left">Friday</th>
                          <th class="align-left">Saturday</th>
                          <th class="align-left">Sunday</th>
                          <th class="align-left">Controls</th>
                        </tr>
                      </thead>

                      <tbody>
                    
                        @foreach ($data as $item => $value)
                        <tr class="align-items-center">
                          <td>{{$value->name}}</td>
                          <td>{{$value->result}}</td>
                          <td>{{$value->url}}</td>
                          <td>{{$value->start_time}}</td>
                          <td>{{$value->close_time}}</td>
                          
                          @if($value->status == 1)
                          <td><a href="{{url('markets/status')}}/{{encrypt($value->id)}}" class="btn btn-success">Active</a></td>
                          @else
                          <td><a href="{{url('markets/status')}}/{{encrypt($value->id)}}" class="btn btn-danger">Inactive</a></td>
                          @endif
 
                          @if($value->monday == 1)
                          <td><a href="{{url('markets/monday/status')}}/{{encrypt($value->id)}}" class="btn btn-success">Active</a></td>
                          @else
                          <td><a href="{{url('markets/monday/status')}}/{{encrypt($value->id)}}" class="btn btn-danger">Inactive</a></td>
                          @endif

                          @if($value->tuesday == 1)
                          <td><a href="{{url('markets/tuesday/status')}}/{{encrypt($value->id)}}" class="btn btn-success">Active</a></td>
                          @else
                          <td><a href="{{url('markets/tuesday/status')}}/{{encrypt($value->id)}}" class="btn btn-danger">Inactive</a></td>
                          @endif

                          @if($value->wednesday == 1)
                          <td><a href="{{url('markets/wednesday/status')}}/{{encrypt($value->id)}}" class="btn btn-success">Active</a></td>
                          @else
                          <td><a href="{{url('markets/wednesday/status')}}/{{encrypt($value->id)}}" class="btn btn-danger">Inactive</a></td>
                          @endif

                          @if($value->thursday == 1)
                          <td><a href="{{url('markets/thursday/status')}}/{{encrypt($value->id)}}" class="btn btn-success">Active</a></td>
                          @else
                          <td><a href="{{url('markets/thursday/status')}}/{{encrypt($value->id)}}" class="btn btn-danger">Inactive</a></td>
                          @endif

                          @if($value->friday == 1)
                          <td><a href="{{url('markets/friday/status')}}/{{encrypt($value->id)}}" class="btn btn-success">Active</a></td>
                          @else
                          <td><a href="{{url('markets/friday/status')}}/{{encrypt($value->id)}}" class="btn btn-danger">Inactive</a></td>
                          @endif

                          @if($value->saturday == 1)
                          <td><a href="{{url('markets/saturday/status')}}/{{encrypt($value->id)}}" class="btn btn-success">Active</a></td>
                          @else
                          <td><a href="{{url('markets/saturday/status')}}/{{encrypt($value->id)}}" class="btn btn-danger">Inactive</a></td>
                          @endif

                          @if($value->sunday == 1)
                          <td><a href="{{url('markets/sunday/status')}}/{{encrypt($value->id)}}" class="btn btn-success">Active</a></td>
                          @else
                          <td><a href="{{url('markets/sunday/status')}}/{{encrypt($value->id)}}" class="btn btn-danger">Inactive</a></td>
                          @endif

                          
                          <td>
                            <a href="{{url('view_market')}}/{{encrypt($value->id)}}" class="btn btn-outline-success"><i class="bi bi-info-circle-fill"></i></a>
                            <a href="{{url('edit_market')}}/{{encrypt($value->id)}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                            <a onclick="return cnfrm();" href="{{url('markets/delete')}}/{{encrypt($value->id)}}" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                          </td>
                        </tr>
                        @endforeach

               
                      </tbody>

                    </table>
                    {{ $data->links('pagination::bootstrap-5') }}
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

 



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script type="text/javascript">
    function cnfrm (){
        return confirm("Are you sure you want to delete this?");
    }
</script>
    
@include('admin.footer')