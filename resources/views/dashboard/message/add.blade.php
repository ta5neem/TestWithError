@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/message/store" method="POST">
    @csrf
   <div class="form-group">
     <label for="user_id">user_id:</label>
     <input type="integer" class="form-control" placeholder="inter user_id" id="user_id"
     name="user_id">
   </div>
   <div class="form-group">
     <label for="message">message:</label>
     <input type="integer" class="form-control" placeholder="inter message" id="message"
     name="message">
   </div>



   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection
