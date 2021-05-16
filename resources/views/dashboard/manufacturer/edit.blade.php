@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/manufacturer/store" method="POST">
      @csrf
   <div class="form-group">
     <label for="name">Name:</label>
     <input type="integer" class="form-control" placeholder="inter name" id="name"
     name="name"  value="$manufactorers->name">
   </div>
   <div class="form-group">
     <label for="adress">Adress:</label>
     <input type="integer" class="form-control" placeholder="adress" id="adress"
     name="adress" value="$manufactorers->adress">
   </div>
   <div class="form-group">
     <label for="mobile">Mobile:</label>
     <input type="integer" class="form-control" placeholder="mobile" id="mobile"
     name="mobile" value="$manufactorers->mobile">
   </div>
   <div class="form-group">
     <label for="email">Email:</label>
     <input type="integer" class="form-control" placeholder="email" id="email"
     name="email" value="$manufactorers->email">
   </div>


   <button type="submit" class="btn btn-primary">edit</button>
 </form>
</div>
@endsection
