@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center">{{$title }} </h1>
  <!--all inventories table -->
      <table class="table table-bordered">
      <thead>
        <tr>
          <th>manufacturer_return_list_id</th>
          <th>date</th>
          <th>total_price</th>
          <th>return_order_num</th>
          <th>manufactorer_id</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>control</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($manufactorerreturnlists as $one)
        <tr>
          <td>{{ $one->manufacturer_return_list_id}}</td>
          <td>{{ $one->date}}</td>
          <td>{{ $one->total_price}}</td>
          <td>{{ $one->return_order_num}}</td>
          <td>{{ $one->manufactorer_id}}</td>
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
