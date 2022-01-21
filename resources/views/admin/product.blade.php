
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

        <!-- partial --> 
        <div class="container-fluid page-body-wrapper">
      
        <div class="container">
          <div class="pageheadding flex">
            <h2 class="pageHeadeing flex-1">
               Products
            </h2>
            <h4 class="pageHeadeing flex-1 text-right underline bolder" > <a href="{{url('/add-product')}}"> Add Product </a> </h4>
            </div>
       
        @if(session()->has('delete'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert"> X </button>
        {{session()->get('delete')}}
        </div>
        @endif

        <div class="show-products">
          <div class="row">
           
            <div class="col-md-12">
              <table class=" text-center table-bordered table-striped table-dark .table-responsive{-md|}">
                <thead>
                  <tr>
                    <th> Product Title </th>
                    <th> Product Price </th>
                    <th>  Product Description </th>
                    <th> Product Quantity </th>
                    <th>Product Image </th>                    
                    <th> Details View </th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($products as $product)
                  <tr class="P-0 m-0" >
                    <td class="P-0 m-o"> {{$product->title}} </td>
                    <td class="P-0"> $ {{$product->price}} </td>
                    <td class="P-0"> {{$product->description}} </td>
                    <td class="P-0"> {{$product->qty}} </td>
                    <td class="P-0"> <img class="w-50 borderd" src="/productimage/{{$product->productImage}}" alt="">  </td>                   
                    <td class="P-0">     <a type="button" class="btn btn-info" href="{{url('/single-product', $product->id)}}"> View </a>   
                         <a type="button" class="btn btn-warning" href="{{url('/edit-product', $product->id)}}"> Update </a>    
                        <a type="button" class="btn btn-danger" href="{{url('/delete', $product->id)}}"> Delete </a>    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>  
    </div>    
        <!-- main-panel ends -->
        @include('admin.script')        
      </div>    
  </body>
</html>