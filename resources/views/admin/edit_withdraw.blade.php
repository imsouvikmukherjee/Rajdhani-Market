@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Game Types</li>

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
                    <form class="row form-div" action="{{url('withdraw/update')}}/{{encrypt($withdraw->id)}}" method="POST">
                        @csrf
                      <div class="row g-3 align-items-center">
                        <h3>Update Withdraw</h3>
                      </div>
                      <hr>
                      </hr>


                      {{-- <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Name</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$withdraw->name}}" name="name"
                            id="s_open_pana" disabled/>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror

                        </div>
                      </div> --}}

                      {{-- <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Number</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" name="number"
                            id="s_open_pana" value="{{$withdraw->number}}" disabled>
                            @error('number')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div> --}}
                      {{-- <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Balance</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" name="balance"
                            id="s_open_pana" value="{{$withdraw->balance}}" disabled>
                            @error('balance')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div> --}}

                      {{-- <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Amount</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" name="amount"
                            id="s_open_pana" value="{{$withdraw->amount}}" disabled>
                            @error('withdraw')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div> --}}

                      {{-- <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Account</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" name="account"
                            id="s_open_pana" value="{{$withdraw->account}}" disabled></input>
                            @error('account')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div> --}}

                      {{-- <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Date</label>

                        <div class="col-sm-9">
                          <input type="date" class="form-control" spellcheck="false" name="date"
                            id="s_open_pana" value="{{$withdraw->date}}" disabled></input>
                            @error('date')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div> --}}

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Approval_date</label>

                        <div class="col-sm-9">
                          <input type="date" class="form-control" spellcheck="false" name="approval_date"
                            id="s_open_pana" value="{{$withdraw->approval_date}}" ></input>
                            @error('approval_date')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>

                      {{-- <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Approval_time</label>

                        <div class="col-sm-9">
                          <input type="time" class="form-control" spellcheck="false" name="approval_time"
                            id="s_open_pana" value="{{$withdraw->approval_time}}"></input>
                            @error('approval_time')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div> --}}

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Status</label>

                        <div class="col-sm-9">
                          <select name="status" class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="0" {{$withdraw->status == '0'? 'selected': ''}}>Pending</option>
                            <option value="1" {{$withdraw->status == '1'? 'selected': ''}}>Success</option>

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
                      <a href="{{route('withdraw_request')}}"><button type="button" class="btn btn-dark">Go Back</button></a>

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
