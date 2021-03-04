@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
      <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
      <div class="trending-wrapper">
        <h2 class="text-center">Result For Products</h2>
        @foreach($products as $item)
        <div class="searched-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="">
            <h2>{{$item['name']}}</h2>
            <h4>{{$item['description']}}</h4>
          </div>
         </a>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection