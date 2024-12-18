@include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
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
                <a href="{{route('markets')}}" class="mb-4">
                    <button class="btn btn-sm btn-primary"><i class="bi bi-arrow-90deg-left"></i> Back</button>
                  </a>  
                <h3><span>Name : </span> {{$markets->name}}</h3>
                <h3><span>URL : </span> {{$markets->url}}</h3>
                <h3><span>Start Time : </span> {{$markets->start_time}}</h3>
                <h3><span>Close Time : </span> {{$markets->close_time}}</h3>
                @if($markets->status == '1' )
                <h3><span>Status : </span> Active</h3>
                @else
                <h3><span>Status : </span> Inactive</h3>
                @endif
                @if($markets->monday == '1')
                <h3><span>Monday : </span> Active</h3>
                @else
                <h3 style="color: red"><span >Monday : </span> Inactive</h3>
                @endif
                @if($markets->tuesday == '1')
                <h3><span>Tuesday : </span> Active</h3>
                @else
                <h3  style="color: red"><span>Tuesday : </span> Inactive</h3>
                @endif

                @if($markets->wednesday == '1')
                <h3><span>Wednesday : </span> Active</h3>
                @else
                <h3  style="color: red"><span>Wednesday : </span> Inactive</h3>
                @endif
                @if($markets->thursday == '1')
                <h3><span>Thursday : </span> Active</h3>
                @else
                <h3  style="color: red"><span>Thursday : </span> Inactive</h3>
                @endif
                @if($markets->friday == '1')
                <h3><span>Friday : </span> Active</h3>
                @else
                <h3  style="color: red"><span>Friday : </span> Inactive</h3>
                @endif
                @if($markets->saturday == '1')
                <h3><span>Saturday : </span> Active</h3>
                @else
                <h3  style="color: red"><span>Saturday : </span> Inactive</h3>
                @endif
                @if($markets->sunday == '1')
                <h3><span>Sunday : </span> Active</h3>
                @else
                <h3  style="color: red"><span>Sunday : </span> Inactive</h3>
                @endif
           
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