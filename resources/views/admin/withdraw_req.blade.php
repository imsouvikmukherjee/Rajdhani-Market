@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Withdraw Request</li>

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
                  <h3 class="card-title">Withdraw Request</h3>
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
                    <a href="{{route('withdraw_request')}}"><button type="btn" id="btn1"><i class="bi bi-arrow-clockwise"></i><span>Refresh</span></button></a>
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
                    <form class="row form-div" action="{{route('withdraw.search')}}" method="GET">
                      @csrf
                      <div class="row g-3 ">
                        <div class="col-sm-12 col-md-6 "><h3>Search Withdraw Req</h3></div>

                      </div>
                      <hr>
                      </hr>

                      <div class="form-group row formdiv">
                        <label class="col-sm-2 text-right control-label col-form-label">Number</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" placeholder="Search by number" name="search"
                            id="s_open_pana" />
                        </div>

                        <div class="col-sm-5">
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

                          <th class="align-items-left">User Name</th>
                          <th class="align-left">Number</th>
                          <th class="align-left">Balance</th>
                          <th class="align-left">Amount</th>
                          <th class="align-left">Payment Method</th>
                          <th class="align-left">UPI Number</th>
                          <th class="align-left">Account's Holder Name</th>
                          <th class="align-left">Account No.</th>
                          <th class="align-left">IFSC Code</th>
                          <th class="align-left">Bank Name</th>
                          <th class="align-left">Branch</th>

                          <th class="align-left">Approval Date</th>

                          <th class="align-left">Status</th>

                          <th class="align-left">Controls</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($withdrawData as $key => $data)
                        <tr class="align-items-center">
                          {{-- <td>{{$data->id}}</td> --}}
                          <td>{{$data->name}}</td>
                          <td>{{$data->number}}</td>
                          <td>{{$data->balance}}</td>
                          <td>{{$data->points}}</td>

                          <td>
                            @if($data->payment_method == 1)
                                <span>PhonePe</span>
                            @elseif($data->payment_method == 2)
                                <span>Google Pay</span>
                            @elseif($data->payment_method == 3)
                                <span>Paytm</span>
                            @else
                                <span>Bank</span>
                            @endif
                          </td>

                          <td>
                            @if($data->upi_number == null)
                                <span>Not Available</span>
                            @else
                                <span>{{$data->upi_number}}</span>
                            @endif
                          </td>

                          {{-- <td>
                            @if($data->upi_number == null)
                                <span>Not Available</span>
                            @else
                                <span>{{$data->upi_number}}</span>
                            @endif
                          </td> --}}

                          <td>
                            @if($data->accounts_holder_name == null)
                                <span>Not Available</span>
                            @else
                                <span>{{$data->accounts_holder_name}}</span>
                            @endif
                          </td>

                          <td>
                            @if($data->account == null)
                                <span>Not Available</span>
                            @else
                                <span>{{$data->account}}</span>
                            @endif
                          </td>

                          <td>
                            @if($data->ifsc_code == null)
                                <span>Not Available</span>
                            @else
                                <span>{{$data->ifsc_code}}</span>
                            @endif
                          </td>

                          <td>
                            @if($data->bank_name == null)
                                <span>Not Available</span>
                            @else
                                <span>{{$data->bank_name}}</span>
                            @endif
                          </td>

                          <td>
                            @if($data->branch == null)
                                <span>Not Available</span>
                            @else
                                <span>{{$data->branch}}</span>
                            @endif
                          </td>

                          <td>
                            @if($data->approval_date == null)
                                <span>Not Available</span>
                            @else
                                <span>{{$data->approval_date}}</span>
                            @endif
                          </td>

                          <td>
                            @if($data->status == 0)
                                <span class="text-warning">Pending</span>
                            @else
                                <span class="text-success">Success</span>
                            @endif
                          </td>


                          <td>

                            <a href="{{url('withdraw/edit')}}/{{encrypt($data->id)}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                            <a onclick="return cnfrm();" href="{{url('withdraw_request/delete')}}/{{encrypt($data->id)}}" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                          </td>
                        </tr>

                        @endforeach


                      </tbody>

                    </table>
                    {{ $withdrawData->links('pagination::bootstrap-5') }}
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

  <script type="text/javascript">
    function cnfrm (){
        return confirm("Are you sure you want to delete this?");
    }
</script>

  @include('admin.footer')
