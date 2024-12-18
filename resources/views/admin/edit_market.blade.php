@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Markets</li>

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
                    <form class="row form-div" method="post" action="{{url('markets/update')}}/{{encrypt($markets->id)}}">
                      @csrf
                      <div class="row g-3 align-items-center">
                        <h3>Update Market</h3>
                      </div>
                      <hr>
                      </hr>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Name</label>
    
                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$markets->name}}" name="name"
                            id="s_open_pana" />
                            @error('name')
                             <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
     
             <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Result</label>
    
                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$markets->result}}" name="result"
                            id="s_open_pana" />
                            @error('result')
                             <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Url</label>
    
                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="{{$markets->url}}" name="url"
                            id="s_open_pana" />
                            @error('url')
                            <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Start Time</label>
    
                        <div class="col-sm-9">
                       
                          <input type="time" class="form-control" spellcheck="false" value="{{ \Carbon\Carbon::parse($markets->start_time)->format('H:i') }}" name="start_time">

                          @error('start_time')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Close Time</label>
    
                        <div class="col-sm-9">
                       
                          <input type="time" class="form-control" spellcheck="false" value="{{ \Carbon\Carbon::parse($markets->close_time)->format('H:i') }}" name="close_time">
                          @error('close_time')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Status</label>
    
                        <div class="col-sm-9">
                          <select name="status" class="form-select" aria-label="Default select example">
                           
                            <option value="0" {{$markets->status == '0'? 'selected': ''}}>Inactive</option>
                            <option value="1" {{$markets->status == '1'? 'selected': ''}}>Active</option>
                          </select>
                          @error('status')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Monday</label>
    
                        <div class="col-sm-9">
                          <select name="monday" class="form-select" aria-label="Default select example">
                            
                            <option value="0" {{$markets->monday == '0'? 'selected': ''}}>Inactive</option>
                            <option value="1" {{$markets->monday == '1'? 'selected': ''}}>Active</option>

                          </select>
                          @error('monday')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Tuesday</label>
    
                        <div class="col-sm-9">
                          <select name="tuesday" class="form-select" aria-label="Default select example">
                     
                            <option value="0" {{$markets->tuesday == '0'? 'selected': ''}}>Inactive</option>
                            <option value="1" {{$markets->tuesday == '1'? 'selected': ''}}>Active</option>

                          </select>
                          @error('tuesday')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Wednesday</label>
    
                        <div class="col-sm-9">
                          <select name="wednesday" class="form-select" aria-label="Default select example">
                           
                            <option value="0" {{$markets->wednesday == '0'? 'selected': ''}}>Inactive</option>
                            <option value="1" {{$markets->wednesday == '1'? 'selected': ''}}>Active</option>

                          </select>
                          @error('wednesday')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>
                      
                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Thursday</label>
    
                        <div class="col-sm-9">
                          <select name="thursday" class="form-select" aria-label="Default select example">
                           
                            <option value="0" {{$markets->thursday == '0'? 'selected': ''}}>Inactive</option>
                            <option value="1" {{$markets->thursday == '1'? 'selected': ''}}>Active</option>

                          </select>
                          @error('thursday')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Friday</label>
    
                        <div class="col-sm-9">
                          <select name="friday" class="form-select" aria-label="Default select example">
                        
                            <option value="0" {{$markets->friday == '0'? 'selected': ''}}>Inactive</option>
                            <option value="1" {{$markets->friday == '1'? 'selected': ''}}>Active</option>

                          </select>
                          @error('friday')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Saturday</label>
    
                        <div class="col-sm-9">
                          <select name="saturday" class="form-select" aria-label="Default select example">
                        
                            <option value="0" {{$markets->saturday == '0'? 'selected': ''}}>Inactive</option>
                            <option value="1" {{$markets->saturday == '1'? 'selected': ''}}>Active</option>

                          </select>
                          @error('saturday')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Sunday</label>
    
                        <div class="col-sm-9">
                          <select name="sunday" class="form-select" aria-label="Default select example">
                        
                            <option value="0" {{$markets->sunday == '0'? 'selected': ''}}>Inactive</option>
                            <option value="1" {{$markets->sunday == '1'? 'selected': ''}}>Active</option>

                          </select>
                          @error('sunday')
                          <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      </div>

                  </div>
                  <hr></hr>
                  <div class="row g-3 align-items-center mt-1 ">

                    <div class="col-auto ">
                      <button type="submit" class="btn btn-primary">Update</button>

                    </div>
                    <div class="col-auto ">
                      <a href="{{route('markets')}}"><button type="button" class="btn btn-dark">Go Back</button></a>

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