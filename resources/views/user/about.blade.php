
@extends('user.layout.main')

@Section('main-container')

    <!-- Overlay for mobile view -->
    <div class="overlay" id="overlay"></div>



        <!-- Market Information Cards -->


       <div class="container">
        <div class="text-center mb-4 mt-4">
            {{-- <img src="{{url('user-asset/images/logo.png')}}" alt="Rajdhani Market Logo" class="img-fluid" style="max-width: 200px;"> --}}
            <h4 class="text-white mt-2">About Rajdhani Market</h4>
            <hr class="mb-4">
        </div>

        {{-- @foreach($notice as $item) --}}

        <div class="row my-5">
            <div class="col-sm-12">
                <div class="market-card">
                    <div class="d-flex justify-content-between align-items-center">

                        <p>Lorem, ipsum dolor sit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum provident inventore obcaecati dolorem animi tempore dolore voluptates sint maiores accusantium! At porro optio animi quia doloremque. Neque beatae perferendis laborum temporibus laudantium eveniet cum, vero accusantium placeat fuga perspiciatis commodi voluptas dolore hic voluptate dignissimos molestias rem porro aperiam sit. Dolores culpa, odio praesentium quasi, inventore, officiis ducimus corporis neque id blanditiis accusamus voluptas ad illo! Veniam eum sed perspiciatis dicta beatae consequuntur libero, est mollitia quos architecto. Molestiae omnis eius labore architecto, quas mollitia dolore perspiciatis nostrum. Suscipit, magni! Quae odit natus sint. Culpa esse magnam distinctio mollitia harum. amet consectetur adipisicing elit. Eveniet sunt dicta iure odio dolorum asperiores ipsa rerum magnam sint, veniam quisquam facilis quod necessitatibus blanditiis vero alias quae. Laboriosam doloremque necessitatibus quibusdam nihil fugiat neque, quo sint repellat placeat et quod unde ullam! Libero ex beatae quam iure reiciendis animi.</p>

                    </div>
                </div>
            </div>
        </div>

       {{-- @endforeach --}}


       </div>





        {{-- <div class="market-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <small>Open: 11:00</small> | <small>Closed: 12:00</small>
                    <h5>Kalyan Morning</h5>
                    <p>********</p>
                </div>
                <div class="market-status">Market Close</div>
            </div>
        </div>
    </div> --}}

@endsection
