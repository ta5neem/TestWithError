@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/purchase/store" method="POST">
      @csrf
   <div class="form-group">
     <label for="order_num">Order_num:</label>
     <input type="integer" class="form-control" placeholder="inter order_num" id="order_num"
     name="order_num">
   </div>
   <div class="form-group">
     <label for="total_price">Total_price:</label>
     <input type="integer" class="form-control" placeholder="inter total_price" id="total_price"
     name="total_price">
   </div>
   <div class="form-group">
     <label for="manufacturer_id">manufacturer_id:</label>
     <input type="integer" class="form-control" placeholder="inter manufacturer_id" id="manufacturer_id"
     name="manufacturer_id">
   </div>
   <div class="form-group">
     <label for="user_id">user_id:</label>
     <input type="integer" class="form-control" placeholder="inter user_id" id="user_id"
     name="user_id">
   </div>
   <div class="form-group">
     <label for="pay_date">pay_date:</label>
     <input type="integer" class="form-control" placeholder="inter pay_date" id="pay_date"
     name="pay_date">
   </div>


   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection
