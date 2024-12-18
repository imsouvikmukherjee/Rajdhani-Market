@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Winning Rates</li>

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
                  <h3 class="card-title">Winning Rates</h3>
                </div>
                <!-- <div class="col-sm-4"></div> -->
                <div class="col-6 market-btn-div">
                  <div>
                    <a href="add-winnings-rate.html"><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add New</span></button></a>
                  </div>
                  <div>
                    <button onclick="hideShow()" type="btn" id="btn1"><i class="bi bi-search"></i><span>Search</span></button>                    

                  </div>
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
                        <div class="col-sm-12 col-md-6 "><h3>Search Winning Rates</h3></div>
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

                      <div class="form-group row formdiv">
                        <label class="col-sm-3 text-right control-label col-form-label">Rates</label>
    
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
                      <a href="winning_rates.html"><button type="button" class="btn btn-outline-danger">Close</button></a>

                    </div>
                    <div class="col-auto ">
                        <a href="winning_rates.html"><button type="button" class="btn btn-outline-dark">Reset</button></a>
  
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
                <div style="margin-top: 30px;"><button type="btn" class="btn btn-primary">Export To Excel</button></div>
              <div class="row">
                <div class="table-responsive mt-5">
                  <div pageindex="1">
                    <table class="table table-striped list table-bordered">
                      <thead>
                        <tr>
                          <th class="align-items-left">Name</th>
                          <th class="align-items-left">Rates</th>
                          <!-- <th class="align-left">Withdraw Query Number</th>
                          <th class="align-left">Withdraw Text</th> -->
                          <!-- <th class="align-left">password</th>
                          <th class="align-left">Recommender</th>
                          <th class="align-left">Registeration date</th>
                          <th class="align-left">Status</th>
                          <th class="align-left">Auto Deposit Status</th> -->
                          <!-- <th class="align-left">Points</th>
                          <th class="align-left">Win</th>
                          <th class="align-left">Date</th> -->
                          <th class="align-left">Controls</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="align-items-center">
                          <td>Swarp</td>
                          <td>Swarp sen</td>
                          <!-- <td>7338962759</td>
                          <td>sahukgcs</td>
                          <td>11/09/2002</td>
                          <td>10000</td>
                          <td>Active</td>
                          <td>Active</a></td>
                          <td>Active</td> -->
                          <!-- <td>Active</td>
                          <td>Active</td>
                          <td>Active</td> -->
                          <td>
                            <a href="" class="btn btn-outline-success"><i class="bi bi-info-circle-fill"></i></a>
                            <a href="" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                            <!-- <a href="" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                            <a href="" class="btn btn-outline-primary"><i class="bi bi-bank"></i></a>
                            <a href="" class="btn btn-outline-warning"><i class="bi bi-wallet"></i></a>
                            <a href="" class="btn btn-outline-info"><i class="bi bi-person-dash-fill"></i></a>
                            <a href="" class="btn btn-outline-dark"><i class="bi bi-clock"></i></a> -->

                          </td>
                        </tr>

                        
                        
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