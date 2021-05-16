@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center">{{$title }} </h1>
  <!--all inventories table -->
      <table class="table table-bordered">
      <thead>
        <tr>
          <th>manufacturer_id</th>
          <th>name</th>
          <th>adress</th>
          <th>mobile</th>
          <th>email</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>control</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($manufactorers as $one)
        <tr>
          <td>{{ $one->manufacturer_id}}</td>
          <td>{{ $one->name}}</td>
          <td>{{ $one->adress}}</td>
          <td>{{ $one->mobile}}</td>
          <td>{{ $one->email}}</td>
          <td>{{ $one->created_at}}</td>
          <td>{{ $one->updated_at}}</td>
          <td>
            <a tybe="button" class="btn
              btn-success"
              href="/manufacturer/edit/{{ $one->manufacturer_id }}">Edit</a>
            <a tybe="button" class="btn
            btn-danger" href="/manufacturer/delete/{{ $one->manufacturer_id }}">Dalete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
