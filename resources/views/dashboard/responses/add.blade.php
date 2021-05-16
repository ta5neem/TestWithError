@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/response/store" method="POST">
      @csrf
   <div class="form-group">
     <label for="response">response:</label>
     <input type="integer" class="form-control" placeholder="inter response" id="response"
     name="response">
   </div>
   <div class="form-group">
     <label for="message_id">message_id:</label>
     <input type="integer" class="form-control" placeholder="inter message_id" id="message_id"
     name="message_id">
   </div>
   <div class="form-group">
     <label for="user_id">user_id:</label>
     <input type="integer" class="form-control" placeholder="inter user_id" id="user_id"
     name="user_id">
   </div>


   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection
