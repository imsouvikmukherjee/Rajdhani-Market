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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="table-responsive mt-3">
                  <div pageindex="1">
                    <form class="row form-div" action="{{url('declare/update_result')}}/{{encrypt($result->id)}}" method="post">
                      @csrf
                        <div class="row g-3 align-items-center">
                          <h3>Update Declare Result</h3>
                        </div>
                        <hr>
                        </hr>
  
                        <div class="form-group row ">
                          <label class="col-sm-3 text-right control-label col-form-label">Market</label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" spellcheck="false" value="{{$result->market}}" name="market"
                            id="s_open_pana" disabled/>
                            <input type="hidden" class="form-control" spellcheck="false" value="{{$result->market}}" name="market"
                            id="s_open_pana" />

                            @error('market')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>

                        <div class="form-group row ">
                            <label class="col-sm-3 text-right control-label col-form-label">Result Date</label>
        
                            <div class="col-sm-9">
                              <input type="date" class="form-control" spellcheck="false" value="{{$result->date}}" name="date"
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
                            
                              <option value="1" {{$result->session =='1'? 'selected': ''}}>Open</option>
                              <option value="0" {{$result->session =='0'? 'selected': ''}}>Close</option>
                              
                            </select>
                            @error('session')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>

                        

                        <!--<div class="form-group row ">-->
                        <!--    <label class="col-sm-3 text-right control-label col-form-label">Result</label>-->
        
                        <!--    <div class="col-sm-9">-->
                        <!--      <input type="text" class="form-control" spellcheck="false" value="{{$result->result}}" name="result"-->
                        <!--        id="s_open_pana" />-->
                        <!--        @error('result')-->
                        <!--        <div class="text-danger">{{ $message }}</div>-->
                        <!--       @enderror-->
                        <!--    </div>-->
                        <!--</div>-->
                             <div class="form-group row ">
                            <label class="col-sm-3 text-right control-label col-form-label">Open Pana</label>
        
                            <div class="col-sm-9">
                              <input type="text" class="form-control" spellcheck="false" value="{{$result->open_pana}}" name="open_pana"
                                id="s_open_pana" />
                                @error('open_pana')
                                <div class="text-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>
    
                      <div class="form-group row ">
                            <label class="col-sm-3 text-right control-label col-form-label">Open Result</label>
        
                            <div class="col-sm-9">
                              <input type="text" class="form-control" spellcheck="false" value="{{$result->open_result}}" name="open_result"
                                id="s_open_pana" />
                                @error('open_result')
                                <div class="text-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                          <label class="col-sm-3 text-right control-label col-form-label">Close Pana</label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" spellcheck="false" value="{{$result->close_pana}}" name="close_pana"
                              id="s_open_pana" />
                              @error('close_pana')
                              <div class="text-danger">{{ $message }}</div>
                             @enderror
                          </div>
                      </div>
  
                      <div class="form-group row ">
                          <label class="col-sm-3 text-right control-label col-form-label">Close Result</label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" spellcheck="false" value="{{$result->close_result}}" name="close_result"
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