@include('admin.header')

<main id="main" class="main">

    <div class="pagetitle">
        <nav>
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Deposit</li>

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
                                <h3 class="card-title">Deposit</h3>
                            </div>
                            <!-- <div class="col-sm-4"></div> -->
                            <div class="col-6 market-btn-div">
                                <!-- <div>
                    <a href=""><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add New</span></button></a>
                  </div> -->
                                <div>
                                    <button onclick="hideShow()" type="btn" id="btn1"><i
                                            class="bi bi-search"></i><span>Search</span></button>
                                </div>
                                <div>
                                    <a href="{{route('deposit_request')}}"><button type="btn" id="btn1"><i
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
                                    <form class="row form-div" action="{{ route('deposit.search') }}" method="GET">
                                        @csrf
                                        <div class="row g-3 ">
                                            <div class="col-sm-12 col-md-6 ">
                                                <h3>Search Deposit</h3>
                                            </div>
                                            {{-- <div class="col-sm-12 col-md-6 "><a href="" class="sujon1"><i
                                                        class="bi bi-search"></i><span>Advance Search</span></a></div> --}}
                                        </div>
                                        <hr>
                                        </hr>

                                        <div class="form-group row formdiv ">
                                            <label
                                                class="col-sm-3 text-right control-label col-form-label">Number</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" spellcheck="false"
                                                    value="" placeholder="Search by number" name="search"
                                                    id="s_open_pana" />
                                            </div>
                                            <div class="col-auto ">
                                                <button type="submit" class="btn btn-outline-success"><i
                                                        class="bi bi-search"></i><span>Search</span></button>

                                            </div>
                                        </div>

                                      </form>

                                </div>
                                <hr>
                                </hr>
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
                    <div class="card-body">
                        {{-- <div style="margin-top: 30px;"><button type="btn" class="btn btn-primary">Export To
                                Excel</button></div> --}}
                        <div class="row">
                            <div class="table-responsive mt-5">
                                <div pageindex="1">
                                    <table class="table table-striped list table-bordered">
                                        <thead>
                                            <tr>

                                                <th class="align-items-left">Deposit Id</th>
                                                <th class="align-items-left">Name</th>
                                                <th class="align-left">Number</th>
                                                <th class="align-left">Amount</th>
                                                <th class="align-left">Balance</th>

                                                <th class="align-left">Payment Method</th>
                                                <th class="align-left">Payment Status</th>
                                                <th class="align-left">Date</th>
                                                <!-- <th class="align-left">Approval Time</th>
                          <th class="align-left">Status</th>
                          <th class="align-left">User Balance</th>
                          <th class="align-left">Win</th>
                          <th class="align-left">Date</th> -->
                                                <th class="align-left">Controls</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($depositData as $deposit => $depositData)
                                                <tr class="align-items-center">
                                                    <td>{{ $depositData->deposit_id }}</td>
                                                    <td>{{ $depositData->name }}</td>
                                                    <td>{{ $depositData->number }}</td>
                                                    <td>{{ $depositData->amount }}</td>
                                                    <td>{{ $depositData->balance }}</td>
                                                    <td>
                                                        @if($depositData->payment_status == 0)
                                                            <span class="text-warning">Pending</span>
                                                        @else
                                                            <span class="text-success">Success</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if($depositData->payment_method == 0)
                                                            <span>PhonePe</span>
                                                        @elseif($depositData->payment_method == 1)
                                                            <span>Google Pay</span>
                                                        @else
                                                            <span>Paytm</span>
                                                        @endif
                                                    </td>
                                                    <td>{{$depositData->created_at}}</td>
                                                    <td>
                                                        {{-- <a href="" class="btn btn-outline-success" title="Tooltip on top"><i class="bi bi-info-circle-fill"></i></a> --}}
                                                        <a href="{{ url('deposit/edit') }}/{{ encrypt($depositData->id) }}"
                                                            class="btn btn-outline-primary"><i
                                                                class="bi bi-pencil-square"></i></a>
                                                        <!-- <a href="" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a> -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                {{-- <div>
                                    {{$depositData->links('pagination::bootstrap-5')}}
                                  </div> --}}
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
