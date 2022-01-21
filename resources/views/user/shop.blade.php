<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> eCommerce Store: Largest Online Shop|| Buy Big Fish </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{'/'}}"><h2>eCommerce <em>Store</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{'/'}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{'/shop'}}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{'/about'}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{'/contact'}}">Contact Us</a>
              </li>

              <li class="nav-item">
                   @if (Route::has('login'))
              
                    @auth
                    <x-app-layout>
    
                    </x-app-layout>

                    @else
                    <li>  <a  class="nav-link" href="{{ route('login') }}" >Log in</a> </li>

                        @if (Route::has('register'))
                        <li>  <a  class="nav-link" href="{{ route('register') }}" >Register</a>
                            </li>
                        @endif
                    @endauth
                
            @endif
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
      
  
    <!-- Banner Ends Here -->
    <h2 class="pageHeadeing">  Shop </h2>
   <!-- Latest Products -->
   <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Shop </h2>

                @if(session()->has('AddCart'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"> X </button>
                  {{session()->get('AddCart')}}
                  </div>
                @endif
              

              <form action="{{url('search')}}" class="form-inline float-right p-3" method="get">@csrf
                  <input type="search" value="Search" name="search" class="form-control ">
                  <input type="submit" value="Search"  class="btn bg-success  btn-primary">
                </form>


            </div>
          </div>
          @foreach($products as $product)
          <div class="col-md-3">
            <div class="product-item">
              <a href="{{url('product', $product->id)}}"><img class="text-center" style="width: 180px; height:200px;" src="/productimage/{{$product->productImage}}" alt=""></a>
              <div class="down-content">
                <a href="{{url('product', $product->id)}}"><h4> {{$product->title}} </h4></a>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}</p>


                    <!-- Cart section srart -->
                <form action="{{url('add-cart', $product->id)}}" method="post">
                  @csrf
                  <input type="number" name="quantity" value="1" min="1" class="form-control w-50 mb-3" >
                  <input class="btn btn-secondary bg-primary" type="submit" value="Add Cart">
                </form>
                    <!-- Cart section ends -->

               
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>

          @endforeach

          @if(method_exists($products, 'links'))
          <div class="d-flex justify-content-center">
          {!! $products->links() !!}
          </div>
          @endif
        </div>
      </div>
    </div>

     

    
     <!--  Footer with script -->
     @include('user.footer')


  </body>

</html>
