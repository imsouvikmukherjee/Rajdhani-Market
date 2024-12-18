@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Games Rate</li>

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
                  <h3 class="card-title">Starline Games Rate</h3>
                </div>
                <!-- <div class="col-sm-4"></div> -->
                <div class="col-6 market-btn-div">
                  <!-- <div>
                    <a href=""><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add New</span></button></a>
                  </div> -->
                  <div>
                    <a href="{{route('add_starline_game_types')}}"><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add New</span></button></a>
                  </div>
                  {{-- <div>

                    <button onclick="hideShow()" type="btn" id="btn1"><i class="bi bi-search"></i><span>Search</span></button>
                  </div>
                  <div>
                    <a href="{{route('games_type')}}"><button type="btn" id="btn1"><i class="bi bi-arrow-clockwise"></i><span>Refresh</span></button></a>
                  </div> --}}
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
                    {{-- <form class="row form-div" action="{{route('game_type.search')}}" method="get">
                      @csrf
                      <div class="row g-3 ">
                        <div class="col-sm-12 col-md-6 "><h3>Search Game Rate</h3></div>

                      </div>
                      <hr>
                      </hr>

                      <div class="form-group row formdiv">
                        <label class="col-sm-2 text-right control-label col-form-label">Name</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="search"
                            id="s_open_pana" />
                        </div>
                        <div class="col-sm-5">
                          <button type="submit" class="btn btn-outline-success"><i class="bi bi-search"></i><span>Search</span></button>
                        </div>

                      </div> --}}





                  </div>
                  <hr></hr>
                  <div class="row g-3 align-items-center mt-1 formbutton">

                    <div class="col-auto ">


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

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  {{session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
                  
              @endif
              <div class="row">
                <div class="table-responsive mt-5">
                  <div pageindex="1">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th class="align-items-left">Name</th>
                          <th class="align-items-left">Rate</th>

                          <th class="align-left">Controls</th>
                        </tr>
                      </thead>

                      <tbody>

                        @foreach($gameTypeData as $game => $gameTypeData)


                        <tr class="align-items-center">
                          <td>{{$game+1}}</td>
                          <td>{{$gameTypeData->name}}</td>
                          <td>{{$gameTypeData->rate}}</td>

                          <td>
                            {{-- <a href="" class="btn btn-outline-success"><i class="bi bi-info-circle-fill"></i></a> --}}
                            {{-- <a href="{{url('game_types/edit')}}/{{encrypt($gameTypeData->id)}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a> --}}
                            <a onclick="confirmDelete('{{url('starline-game-types-delete')}}/{{encrypt($gameTypeData->id)}}')" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                          </td>
                        </tr>

                        @endforeach

                      </tbody>

                    </table>
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

  {{-- <script type="text/javascript">
    function cnfrm (){
        return confirm("Are you sure you want to delete this?");
    }
</script> --}}


<script>
    function confirmDelete(url) {
        if(confirm('Are you sure?')){
            window.location.href = url;
        }
      }
</script>
  @include('admin.footer')
