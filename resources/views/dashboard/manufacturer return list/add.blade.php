@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/manufaturerreturnlist/store" method="POST">
      @csrf
   <div class="form-group">
     <label for="date">date:</label>
     <input type="integer" class="form-control" placeholder="inter date" id="date"
     name="date">
   </div>
   <div class="form-group">
     <label for="total_price">Total_price:</label>
     <input type="integer" class="form-control" placeholder="inter total_price" id="total_price"
     name="total_price">
   </div>
   <div class="form-group">
     <label for="return_order_num">return_order_num:</label>
     <input type="integer" class="form-control" placeholder="inter return_order_num" id="return_order_num"
     name="return_order_num">
   </div>
   <div class="form-group">
     <label for="manufactorer_id">manufactorer_id:</label>
     <input type="integer" class="form-control" placeholder="inter manufactorer_id" id="manufactorer_id"
     name="manufactorer_id">
   </div>


   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection
