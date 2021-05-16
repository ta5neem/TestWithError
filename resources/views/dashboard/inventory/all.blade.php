@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center">{{$title }} </h1>
  <!--all inventories table -->
      <table class="table table-bordered">
      <thead>
        <tr>
          <th>inventory_id</th>
          <th>product_amount</th>
          <th>product_id</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>control</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($inventories as $one)
        <tr>
          <td>{{ $one->inventory_id}}</td>
          <td>{{ $one->product_amount}}</td>
          <td>{{ $one->product_id}}</td>
          <td>{{ $one->created_at}}</td>
          <td>{{ $one->updated_at}}</td>
          <td>
            <a tybe="button" class="btn
              btn-success"
              href="/inventory/edit/{{ $one->inventory_id }}">Edit</a>
            <a tybe="button" class="btn
            btn-danger" href="/inventory/delete{{ $one->inventory_id }}">Dalete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
