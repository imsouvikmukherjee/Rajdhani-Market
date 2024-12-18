@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Bid History</li>

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
                  <h3 class="card-title">Bid History</h3>
                </div>
                <!-- <div class="col-sm-4"></div> -->
                <div class="col-6 market-btn-div">
                  <!-- <div>
                    <a href=""><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add New</span></button></a>
                  </div> -->
                  {{-- <div>
                    <button onclick="hideShow()" type="btn" id="btn1"><i class="bi bi-search"></i><span>Search</span></button>
                  </div> --}}
                  <div>
                    <a href=""><button type="btn" id="btn1"><i class="bi bi-arrow-clockwise"></i><span>Refresh</span></button></a>
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
                    <form class="row form-div">
                      <div class="row g-3 ">
                        <div class="col-sm-12 col-md-6 "><h3>Search Bid History</h3></div>
                        <div class="col-sm-12 col-md-6 "><a href="" class="sujon1"><i class="bi bi-search"></i><span>Advance Search</span></a></div>
                      </div>
                      <hr>
                      </hr>

                      <div class="form-group row formdiv">
                        <label class="col-sm-3 text-right control-label col-form-label">Userid</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>

                      <div class="form-group row formdiv ">
                        <label class="col-sm-3 text-right control-label col-form-label">Name</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>

                      <div class="form-group row formdiv ">
                        <label class="col-sm-3 text-right control-label col-form-label">phone</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>

                      <div class="form-group row formdiv">
                        <label class="col-sm-3 text-right control-label col-form-label">Market</label>

                        <div class="col-sm-5">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Any</option>
                            <option value="1">12:00 AM</option>
                            <option value="2">12:05 AM</option>
                            <option value="3">12:10 AM</option>
                            <option value="4">12:15 AM</option>
                            <option value="5">12:20 AM</option>
                            <option value="6">12:25 AM</option>
                            <option value="7">12:30 AM</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row formdiv">
                        <label class="col-sm-3 text-right control-label col-form-label">Game</label>

                        <div class="col-sm-5">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Any</option>
                            <option value="1">Open</option>
                            <option value="2">Close</option>

                          </select>
                        </div>
                      </div>

                      <div class="form-group row formdiv">
                        <label class="col-sm-3 text-right control-label col-form-label">Session</label>

                        <div class="col-sm-5">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Any</option>
                            <option value="1">Open</option>
                            <option value="2">Close</option>

                          </select>
                        </div>
                      </div>

                      <div class="form-group row formdiv ">
                        <label class="col-sm-3 text-right control-label col-form-label">Digit</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>

                      <div class="form-group row formdiv ">
                        <label class="col-sm-3 text-right control-label col-form-label">CDigit</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>

                      <div class="form-group row formdiv ">
                        <label class="col-sm-3 text-right control-label col-form-label">Pana</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>

                      <div class="form-group row formdiv ">
                        <label class="col-sm-3 text-right control-label col-form-label">Points</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>

                      <div class="form-group row formdiv ">
                        <label class="col-sm-3 text-right control-label col-form-label">date</label>

                        <div class="col-sm-5">
                          <input type="date" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>


                  </div>
                  <hr></hr>
                  <div class="row g-3 align-items-center mt-1 formbutton">

                    <div class="col-auto ">
                      <button type="button" class="btn btn-outline-success"><i class="bi bi-search"></i><span>Search</span></button>

                    </div>
                    <div class="col-auto ">
                      <a href="bid_history.html"><button type="button" class="btn btn-outline-danger">Close</button></a>

                    </div>
                    <div class="col-auto ">
                        <a href="bid_history.html"><button type="button" class="btn btn-outline-dark">Reset</button></a>

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
                          <th class="align-items-left">Market Name</th>
                          <th class="align-items-left">Game Name</th>
                          <th class="align-left">Digit</th>
                          <th class="align-left">Amount</th>
                          <th class="align-left">Date</th>
                          <th class="align-left">Session</th>
                          <th class="align-left">Username</th>
                          <th class="align-left">Contact</th>
                          <th class="align-left">Email</th>
                          <th class="align-left">Win</th>
                          <th class="align-left">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($bidData as $item => $value)
                        <tr class="align-items-center">
                          <td>{{$value->marketname}}</td>
                          <td>{{$value->gamename}}</td>
                          <td>{{$value->digit}}</td>
                          <td>{{$value->amount}}</td>
                          <td>{{$value->date}}</td>
                          {{-- <td>{{$value->session}}</td> --}}

                    <td>
    @if($value->session == 'open')
        <a href=""><button class="btn btn-success">Open</button></a>
    @elseif($value->session == 'close')
        <a href=""><button class="btn btn-danger">Close</button></a>
    @else
        <p>NULL</p>
    @endif
</td>


                         <!-- @if($value->session == 'Open')-->
                         <!-- <td><a href=""><button class="btn btn-success">Open</button></a></td> -->
                         <!-- @endif-->

                         <!-- @if($value->session == 'Close')-->
                         <!-- <td><a href=""><button class="btn btn-danger">Close</button></a></td> -->
                         <!-- @endif-->

                         <!--@if($value->session == 'null')-->
                         <!--<td>NULL</td>-->
                         <!--@endif-->
                         <!--@if($value->session == NULL)-->
                         <!--<td>NULL</td>-->
                         <!--@endif-->
                         <!-- @if($value->session == 'Null')-->
                         <!--<td>NULL</td>-->
                         <!--@endif-->

                          <!-- @if($value->session == 'null')-->
                          <!--<td>Null</td> -->

                          <!--@endif-->
                          <td>{{$value->username}}</td>
                          <td>{{$value->contact}}</td>
                          <td>{{$value->email}}</td>
                          <td>
                            @if($value->win == 1)
                            <button class="btn btn-success btn-sm">Win</button>
                            @else
                            <button class="btn btn-danger btn-sm">Not Win</button>
                            @endif
                          </td>

                          {{-- <td>
                            <a href="{{url('declare/result_details')}}/{{encrypt($value->id)}}" class="btn btn-outline-success"><i class="bi bi-info-circle-fill"></i></a>
                            <a href="{{url('edit_result')}}/{{encrypt($value->id)}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                            <a onclick="return cnfrm();" href="{{url('declare/delete_result')}}/{{encrypt($value->id)}}" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                            <a href="" class="btn btn-outline-success"><i
                                class="bi bi-trophy-fill"></i><span>Winners</span></a>
                          </td> --}}
                          <td>
                            <form action="{{ url('/admin/change-win-status/' . encrypt($value->id)) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Win</button>
                            </form>
                            {{-- <a href="{{url('/admin/change-win-status')}}/{{encrypt($value->id)}}"  class="btn btn-outline-primary">Win</a> --}}
                            <a href="javascript:void(0)" onclick="confirmDelete('{{url('bid-history/delete')}}/{{encrypt($value->id)}}')" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                          </td>
                        </tr>

                        @endforeach

                      </tbody>
                      {{-- {{ $value->onEachSide(5)->links() }} --}}
                    </table>
                    <br>
                    {{ $bidData->links('pagination::bootstrap-5') }}
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
      if(confirm('Are you sure?')){
        window.location.href = url;
      }
      }
  </script>

<script>
    function changeNewsStatus(id){
                       var val1 = id;
                    //    alert(val1);
                   var csrf = $("meta[name='csrf-token']").attr("content");
                  //  alert(val1);
                      $.ajax({
                      type: 'POST',
                      url: '/admin/change-win-status',
                      data: { id: val1,
                           _token: csrf },
                      success: function(response) {

                        // if(response.success){
                      location.reload();
                  // } else {
                  //     alert('Failed to change status');
                  // }

            }
        });
       }
  </script>
