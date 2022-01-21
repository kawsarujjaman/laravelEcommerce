
<!DOCTYPE html>
<html lang="en">
    <head>  
    <base href="/public">
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

        <!-- partial --> 
        <div class="container-fluid page-body-wrapper">
      
        <div class="container">
          <div class="pageheadding flex">
            <h2 class="pageHeadeing flex-1">
               Products
            </h2>
            <h4 class="pageHeadeing flex-1 text-right underline bolder" > <a href="{{url('/add-product')}}"> Add Product </a> </h4>
            </div>
       
     
        <div class="show-products">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <table class="table table-bordered table-striped table-dark .table-responsive{-md|} mb-3">
                <thead>
                  <tr>
                    <th>   </th>
                    <th> Details Information  </th>
                  
                  </tr>
                </thead>

                <tbody>
                
                  
                  <tr>
                    <td> Product Title:  </td>
                    <td> {{$products->title}} </td>                   
                  </tr>

                  <tr>
                    <td> Product Price:  </td>
                    <td> {{$products->price}} </td>                   
                  </tr>

                  <tr>
                    <td> Product Description:  </td>
                    <td> {{$products->des}} </td>                   
                  </tr>

                  <tr>
                    <td> Product Quantity:  </td>
                    <td> {{$products->qty}} </td>                   
                  </tr>

                  <tr>
                    <td> Product Image:  </td>
                    <td>  <img src="/productimage/{{$products->productImage}}" alt="">  </td>                   
                  </tr>
                    
               
                </tbody>
                
              </table>
              <a class="btn btn-warning" href="{{url('edit-product', $products->id)}}" > Update </a>
                  <a class="btn btn-danger" href="{{url('delete', $products->id)}}" > Delete </a>
                  <a class="btn btn-info" href="{{url('')}}" > Active </a>
                  <a class="btn btn-primary" href="{{url('')}}" > Deactive </a>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
      </div>  
    </div>    
        <!-- main-panel ends -->
        @include('admin.script')        
      </div>    
  </body>
</html>