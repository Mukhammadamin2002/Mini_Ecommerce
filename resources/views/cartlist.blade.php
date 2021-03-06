@extends('master')
@section("content")
<div class="custom-product">

    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h2 class="text-center">Result For Products</h2>
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
              <button class="btn btn-danger">Remove From Cart</button>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection