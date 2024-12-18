@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li> --}}

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="row market-btn mt-3">
                <div class="col-6">
                  <h3 class="card-title">Users</h3>
                </div>
                <!-- <div class="col-sm-4"></div> -->
                <div class="col-6 market-btn-div">
                  <!-- <div>
                    <a href=""><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add New</span></button></a>
                  </div> -->
                  <div>
                    <button onclick="hideShow()" type="btn" id="btn1"><i class="bi bi-search"></i><span>Search</span></button>
                  </div>
                  <div>
                    <a href="{{route('users')}}"><button type="btn" id="btn1"><i class="bi bi-arrow-clockwise"></i><span>Refresh</span></button></a>
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
                    <form class="row form-div" action="{{route('user_search')}}" method="GET">
                      @csrf
                      <div class="row g-3 ">
                        <div class="col-sm-12 col-md-6 "><h3>Search Users</h3></div>
                        {{-- <div class="col-sm-12 col-md-6 "><a href="" class="sujon1"><i class="bi bi-search"></i><span>Advance Search</span></a></div> --}}
                      </div>


                      <div class="form-group row formdiv ">
                        <label class="col-sm-3 text-right control-label col-form-label">Number</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" placeholder="Search by number" name="searchUser"
                            id="s_open_pana" />
                        </div>
                        <div class="col-auto ">
                          <button type="submit" class="btn btn-outline-success"><i class="bi bi-search"></i><span>Search</span></button>

                        </div>
                      </div>


                  </div>
                  <hr></hr>
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
                {{-- <div style="margin-top: 30px;"><button type="btn" class="btn btn-primary">Export To Excel</button></div> --}}
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
                          <th class="align-items-left">SR No.</th>
                          <th class="align-items-left">Name</th>
                          <th class="align-items-left">Contact No.</th>
                          <th class="align-left">Email</th>
                          <th class="align-left">Balance</th>
                          <th class="align-left">password</th>

                          <th class="align-left">Registeration Date & Time</th>
                          {{-- <th class="align-left">Status</th>
                          <th class="align-left">Auto Deposit Status</th> --}}
                          <!-- <th class="align-left">Points</th>
                          <th class="align-left">Win</th>
                          <th class="align-left">Date</th> -->
                          <th class="align-left">Controls</th>
                        </tr>
                      </thead>

                      <tbody>

                        @foreach($user_data as $key => $item)
                        <tr class="align-items-center">
                          <td>{{$key+1}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->contact}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->balance}}</td>
                          <td>{{$item->demop}}</td>
                          <td>{{$item->created_at}}</td>

                          <!-- <td>Active</td>
                          <td>Active</td>
                          <td>Active</td> -->
                          <td>
                            {{-- <a href="" class="btn btn-outline-success"><i class="bi bi-info-circle-fill"></i></a> --}}
                            <a href="javascript:void(0)" onclick="confirmDelete('{{url('user-delete')}}/{{encrypt($item->id)}}')" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                            <a href="{{url('/user-bank-balance-edit')}}/{{encrypt($item->id)}}" class="btn btn-outline-primary"><i class="bi bi-bank"></i></a>
                            {{-- <a href="" class="btn btn-outline-warning"><i class="bi bi-wallet"></i></a>
                            <a href="" class="btn btn-outline-info"><i class="bi bi-person-dash-fill"></i></a>
                            <a href="" class="btn btn-outline-dark"><i class="bi bi-clock"></i></a> --}}

                          </td>
                        </tr>
                        @endforeach


                      </tbody>

                    </table>
                    <br>
                    {{ $user_data->links('pagination::bootstrap-5') }}
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


  <script>
    function confirmDelete(url) {
      if(confirm('Are you sure you want to delete this user?')){
        window.location.href = url;
      }
      }
  </script>
