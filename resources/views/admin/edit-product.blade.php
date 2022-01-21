
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
          <h2 class="pageHeadeing">
              Add Product
            </h2>

            
            @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert"> X </button>
        {{session()->get('message')}}
        </div>
        @endif

            <div class="addProductForm">
              <form action="{{url('update-product', $products->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                
               <div class="row">
                 <div class="col-md-3"></div>
                 <div class="col-md-6">
                 <div class="form-group ">
                  <label for="title" > Product Title</label>
                  <input type="text" name="title" value="{{$products->title}}" class="form-control bg-dark text-white">
                </div>

                <div class="form-group">
                  <label for="price"  > Product Price</label>
                  <input type="number" name="price" value="{{$products->price}}" class="form-control bg-dark text-white">
                </div>

                <div class="form-group">
                  <label for="des" > Product Description</label>
                  <input type="text" name="des" value="{{$products->description}}" class="form-control bg-dark text-white">
                </div>

                <div class="form-group">
                  <label for="qty" > Product Quantity</label>
                  <input type="number" name="qty" value="{{$products->qty}}" class="form-control bg-dark text-white">
                </div>

                <div class="form-group">
                    <img src="/productimage/{{$products->productImage}}" alt="">
                  <label for="img"  > Product Image</label>
                  <input type="file" name="img" class="form-control bg-dark text-white">
                </div>

                <div class="form-group">
                  
                  <input type="submit" value="Update" name="submit" class="form-control btn btn-secondary">
                </div>
                 </div>
                 <div class="col-md-3"></div>
               </div>

                
              </form>
            </div>

          </div>
        
       </div>    
        <!-- main-panel ends -->
        @include('admin.script')        
      </div>    
  </body>
</html>