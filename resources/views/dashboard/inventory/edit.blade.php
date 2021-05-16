@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edit Page</h1>
  <form action="/inventory/store" method="POST">
    @csrf
   <div class="form-group">
     <label for="product_amount">Product_amount:</label>
     <input type="integer" class="form-control" placeholder="inter product amount" id="product_amount"
     name="product_amount" value="{{$inventory->product_amount}}">
   </div>
   <div class="form-group">
     <label for="product_id">Product_id:</label>
     <input type="integer" class="form-control" placeholder="product_id" id="product_id"
     name="product_id" value="{{$inventory->product_id}}">
   </div>

   <button type="submit" class="btn btn-primary">edit</button>
 </form>
</div>
@endsection
