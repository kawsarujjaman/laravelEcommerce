
<!DOCTYPE html>
<html lang="en">
    <head>  
        @include('admin.head')
    </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, Call <a href="tel:+1234567890"> +123 456 7890 </a></p>
                
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href=""><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
             @include('admin.sidebar')        
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')        
     
            <div class="container-fluid page-body-wrapper">
                <div class="container">
                    <h2 class="pageHeadeing">
                        Order
                    </h2>

                    <table class="table-dark table-bordered table-responsive text-center">
                        <thead>
                            <tr class="bg-dark">
                                <th>Customer Name</th>
                                <th> Phone Number</th>
                                <th> Address</th>
                                <th> Product name</th>
                                <th> Price</th>
                                <th> Quantity</th>
                                <th> Status</th>
                                <th> Action </th>
                        
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($order as $orders)
                        

                            <tr>
                                <td> {{$orders->name}} </td>
                                <td> {{$orders->phone}}</td>
                                <td> {{$orders->address}}</td>
                                <td> {{$orders->product_title}} </td>
                                <td> ${{$orders->price}}</td>
                                <td> {{$orders->quantity}}</td>
                                <td> {{$orders->status}} </td>
                                <td> <a href="{{url('update-status', $orders->id)}}" class="btn btn-success bg-success mx-1 p-1"> Delevered</a> </td>
                            </tr>

                            @endforeach
                            
                        </tbody>
                    </table>
          </div>
        <!-- main-panel ends -->
        @include('admin.script')        

    
  </body>
</html>