@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/manufacturer/store" method="POST">
      @csrf
   <div class="form-group">
     <label for="name">Name:</label>
     <input type="integer" class="form-control" placeholder="inter name" id="name"
     name="name">
   </div>
   <div class="form-group">
     <label for="adress">Adress:</label>
     <input type="integer" class="form-control" placeholder="adress" id="adress"
     name="adress">
   </div>
   <div class="form-group">
     <label for="mobile">Mobile:</label>
     <input type="integer" class="form-control" placeholder="mobile" id="mobile"
     name="mobile">
   </div>
   <div class="form-group">
     <label for="email">Email:</label>
     <input type="integer" class="form-control" placeholder="email" id="email"
     name="email">
   </div>


   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection
