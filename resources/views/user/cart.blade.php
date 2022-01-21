<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/71f2e6313b.js" crossorigin="anonymous"></script>

    

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

                    <li class="nav-item">
                        
                        <a class="nav-link" href="{{'/cart'}}">
                        <i class="fas fa-cart-plus"></i>
                         Cart <span> [{{$count}}] </span> </a>

                     </li>
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
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        
      </div>
    </div>
                @if(session()->has('delete'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"> X </button>
                  {{session()->get('delete')}}
                  </div>
                @endif
                @if(session()->has('OrderComplete'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"> X </button>
                  {{session()->get('OrderComplete')}}
                  </div>
                @endif
   <!-- Show  Products cart-->
   <h2 class="pageHeadeing"> Cart </h2>
    
   <div class="row">
       <div class="col-md-2"></div>
       <div class="col-md-10">
            <table class="table-bordered table-striped table-responsive">
                <thead>
                    <tr class="p-2">
                        <th class="p-2"> Product Name </th>
                        <th class="p-2"> Product Quantity </th>
                        <th class="p-2"> Product Price </th>
                        <th class="p-2">  Action </th>
                    </tr>
                </thead>

                <tbody>
                    <form action="{{url('order')}}" method="post">
                        @csrf
                    @foreach($cart as $carts)
                    <tr >
                        <td class="p-2"> 
                            <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">
                             {{$carts->product_title}}
                         </td>
                        <td class="p-2"> <input type="number" name="quantity[]" value="{{$carts->quantity}}" hidden="">
                         {{$carts->quantity}} 
                        </td>

                        <td class="p-2">
                         <input type="number" name="price[]" value="{{$carts->price}}" hidden="">
                         {{$carts->price}}                  

                        </td>

                        <td> <a class="btn btn-danger" href="{{url('delete-cart', $carts->id)}}"> Delete </a> </td>
                    </tr>
                    @endforeach
                    
                </tbody>

              
            </table>
            <button  class="btn btn-success bg-success my-2"> Confirm Order </button>

            </form>
       </div>
       <div class="col-md-2"></div>
   </div>
     

      
      


   
    

    
     <!--  Footer with script -->
     @include('user.footer')


  </body>

</html>
