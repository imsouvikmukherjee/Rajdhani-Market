@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Banners</li>

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
                  <h3 class="card-title">Banners</h3>
                </div>
                <!-- <div class="col-sm-4"></div> -->
                <div class="col-6 market-btn-div">
                  <div>
                    <a href=""><button type="btn" id="btn1"><i class="bi bi-plus-circle"></i><span>Add
                          New</span></button></a>
                  </div>
                  <div>
                    <a href=""><button type="btn" id="btn1"><i class="bi bi-search"></i><span>Search</span></button></a>
                  </div>
                  <div>
                    <a href=""><button type="btn" id="btn1"><i
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



      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div style="margin-top: 30px;"><button type="btn" class="btn btn-primary">Export To Excel</button></div>
              <div class="row">
                <div class="table-responsive mt-5">
                  <div pageindex="1">
                    <form class="row form-div">
                      <div class="row g-3 align-items-center">
                        <h3>Add New Banner</h3>
                      </div>
                      <hr>
                      </hr>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Image</label>

                        <div class="col-sm-9">
                          <input type="file" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Text</label>

                        <div class="col-sm-9">
                          <textarea class="form-control" spellcheck="false" name="s_open_pana"
                            id="s_open_pana"></textarea>
                        </div>
                      </div>


                      <div class="form-group row ">
                        <label class="col-sm-3 text-right control-label col-form-label">Link</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" spellcheck="false" value="" name="s_open_pana"
                            id="s_open_pana" />
                        </div>
                      </div>




                  </div>
                  <hr>
                  </hr>
                  <div class="row g-3 align-items-center mt-1">

                    <div class="col-auto ">
                      <a href="banner.html"><button type="button" class="btn btn-primary">Save</button></a>

                    </div>
                    <div class="col-auto ">
                      <a href="banner.html"><button type="button" class="btn btn-dark">Go Back</button></a>

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