<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="{{('/shop')}}">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>


          @foreach($products as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="{{url('product', $product->id)}}"><img class="text-center" style="width: 200px; height:250px;" src="/productimage/{{$product->productImage}}" alt=""></a>
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

        
        </div>
      </div>
    </div>