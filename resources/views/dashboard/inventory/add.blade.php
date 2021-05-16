@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/inventory/store" method="POST">
    @csrf
   <div class="form-group">
     <label for="product_amount">Product_amount:</label>
     <input type="integer" class="form-control" placeholder="inter product amount" id="product_amount"
     name="product_amount">
   </div>
   <div class="form-group">
     <label for="product_id">Product_id:</label>
     <input type="integer" class="form-control" placeholder="product_id" id="product_id"
     name="product_id">
   </div>

   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection
