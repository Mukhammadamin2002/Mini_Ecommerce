@extends('master')
@section("content")
<div class="custom-product">

    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h2 class="text-center">My Orders</h2>
        @foreach($orders as $order)
        <div class="row searched-order cart-list-devider">
          <div class="col-sm-3">
          <a href="detail/{{$order->id}}">
          <img class="trending-image" src="{{$order->gallery}}">
         </a>
         <br><br>
          </div>
          <div class="col-sm-4">
          <div class="">
            <h2> Name : {{$order->name}}</h2>
            <h4>Delivery Status : {{$order->status}}</h4>
            <h4> Address : {{$order->address}}</h4>
            <h4> Payment Status : {{$order->payment_status}}</h4>
            <h4> Payment Method : {{$order->payment_method}}</h4>
          </div>
          </div>
        </div>
        @endforeach 
      </div> 
    </div>
</div>
<br><br><br><br><br>
@endsection