@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
      <table class="table">
  <tbody>
    <tr>
      <th scope="row">Amount</th>
      <td>{{$total}}</td>
    </tr>
    <tr>
      <th scope="row">Tax</th>
      <td>$ 0</td>
    </tr>
    <tr>
      <th scope="row">Delivery</th>
      <td>$ 10</td>
    </tr>    
    <tr>
      <th scope="row">Total Amount</th>
      <td>$ {{$total + 10}}</td>
    </tr>
  </tbody>
</table>

      <div>
        <form action="/orderplace" method="post">
          @csrf
          <div class="form-group">
            <textarea name="address" class="form-control" placeholder="Enter Your Address"></textarea>
          </div>
          <div class="form-group">
            <label for="pwd">Payment Method</label>
            <br>
            <input type="radio" value="cash" name="payment"><span> Online payment</span>
            <br>
            <input type="radio" value="cash"  name="payment"><span> EMI payment</span>
            <br>
            <input type="radio" value="cash" name="payment"><span> Payment Delivery</span>
            <br>
          </div>
          <button type="submit" class="btn btn-warning">Order Now</button>
        </form>
      </div>
    </div>
</div>
@endsection