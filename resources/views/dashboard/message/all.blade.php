
@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center">{{$title }} </h1>
  <!--all inventories table -->
      <table class="table table-bordered">
      <thead>
        <tr>
          <th>message_id</th>
          <th>message</th>
          <th>user_id</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>control</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($message as $one)
        <tr>
          <td>{{ $one->message_id}}</td>
          <td>{{ $one->message}}</td>
          <td>{{ $one->user_id}}</td>
          <td>{{ $one->created_at}}</td>
          <td>{{ $one->updated_at}}</td>
          <td>
            <button tybe="button" class="btn
              btn-success">Edit</button>
            <button tybe="button" class="btn
              btn-danger">Dalete</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
