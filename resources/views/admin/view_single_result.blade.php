@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Markets</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
  


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row markets_view_page py-3">
                <a href="{{route('declare_result')}}" class="mb-4">
                    <button class="btn btn-sm btn-primary"><i class="bi bi-arrow-90deg-left"></i> Back</button>
                  </a>  
                <h3><span>Market : </span> {{$result->market}}</h3>
                <h3><span>Date : </span> {{$result->date}}</h3>
                @if($result->session == '1')
                <h3 style="color: green"><span>Session : </span> Open</h3>
                @else
                <h3 style="color: red"><span>Session : </span> Closed</h3>
                @endif
                <h3><span>Open_pana : </span> {{$result->open_pana}}</h3>
                <h3><span>Open_result : </span> {{$result->open_result}}</h3>
                <h3><span>Close_pana : </span> {{$result->close_pana}}</h3>
                <h3><span>Close_result : </span> {{$result->close_result}}</h3>
           
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