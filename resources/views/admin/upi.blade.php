@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">UPIs</li>

        </ol>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="row market-btn mt-3">
                <div class="col-6">
                  <h3 class="card-title">UPIs</h3>
                </div>
                <!-- <div class="col-sm-4"></div> -->
                <div class="col-6 market-btn-div">
                
                  <div>
                    <a href=""><button type="btn" id="btn1"><i class="bi bi-arrow-clockwise"></i><span>Refresh</span></button></a>
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
                    <form class="row form-div">
                      <div class="row g-3 ">
                        <!-- <div class="col-sm-12 col-md-6 "><h3>Search UPIs</h3></div> -->
                        <div class="col-sm-12 col-md-6 "><a href="" class="sujon1"><i class="bi bi-search"></i><span>Advance Search</span></a></div>
                      </div>
                      <hr>
                      </hr>

                      <div class="form-group row formdiv">
                        <label class="col-sm-3 text-right control-label col-form-label">Name</label>
    
                        <div class="col-sm-5">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
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
                      <a href="upi.html"><button type="button" class="btn btn-outline-danger">Close</button></a>

                    </div>
                    <div class="col-auto ">
                        <a href="upi.html"><button type="button" class="btn btn-outline-dark">Reset</button></a>
  
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
               
              <div class="row">
                <div class="table-responsive mt-5">
                  <div pageindex="1">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th class="align-items-left">Phone Pay</th>
                      <th>Google Pay</th>
                      <th>PayTm</th>
                      <th>Scanner</th>
                          <th class="align-left">Controls</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($upis as $upi)
                        <tr class="align-items-center">
                          <td>{{$upi->phonepay}}</td>
                          <td>{{$upi->googlepay}}</td>
                          <td>{{$upi->paytm}}</td>
                          <td>
                          <img src="{{ asset($upi->scanner) }}" alt="Uploaded Image" width="100px">
                          </td>
                        
                         
                          <td>
                          
                            <a href="{{route('upi-edit', encrypt($upi->id))}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                    

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

 

  @include('admin.footer')