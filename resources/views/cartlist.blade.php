@extends('master')
@section("content")
<div class="custom-product">

    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h2 class="text-center">Result For Products</h2>
        <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
        @foreach($products as $item)
        <div class="row searched-item cart-list-devider">
          <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
          <img class="trending-image" src="{{$item->gallery}}">
         </a>
         <br><br>
          </div>
          <div class="col-sm-4">
          <div class="">
            <h2>{{$item->name}}</h2>
            <h4>{{$item->description}}</h4>
          </div>
          </div>
          <div class="col-sm-3">
              <a href="/removecart/{{$item->cart_id}}" class="btn btn-info"><i class="fa fa-trash" style="color:red;"></i>Remove From Cart</a>
          </div>
        </div>
        @endforeach 
        <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
      </div> 
    </div>
</div>
@endsection