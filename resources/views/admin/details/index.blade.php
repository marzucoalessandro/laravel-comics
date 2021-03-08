@extends('layouts.dashboard')

@section('content');
<h1>Comic Details</h1>
<a href="{{route ('admin.details.create')}}" class="btn btn-success">Create a new comic_detail</a>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Price</th>
      <th>Description</th>
      <th>Designer</th>
      <th>Writer</th>
      <th>Date_of_publ</th>
      <th>Vol_numb</th>
      <th>Size</th>
      <th>Page</th>
      <th>Rated</th>
    </tr>
  </thead>
  <tbody>
    @foreach($comicDetail as $detail)
    <tr>
      <td scope="row">{{$detail->id}}</td>
      <td>{{$detail->price}}</td>
      <td>{{$detail->description}}</td>
      <td>{{$detail->designer}}</td>
      <td>{{$detail->writer}}</td>
      <td>{{$detail->data_publ}}</td>
      <td>{{$detail->vol_numb}}</td>
      <td>{{$detail->size}}</td>
      <td>{{$detail->page}}</td>
      <td>{{$detail->rated}}</td>

      <td>
        <a href="{{route ('admin.details.show', ['detail'=> $detail->id])}}" class="btn btn-primary">View</a>
        <a href="{{route ('admin.details.edit', ['detail'=> $detail->id])}}" class="btn btn-warning">Edit</a>

        <form class="" action="{{route('admin.details.destroy', ['detail'=> $detail->id])}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" name="button" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
