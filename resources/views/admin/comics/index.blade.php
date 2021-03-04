@extends('layouts.dashboard')

@section('content')
<h1>Comics list</h1>
<a href="{{route ('admin.comics.create')}}" class="btn btn-success">Create a new comics</a>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Cover</th>
      <th>Title</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($comics as $comic)
    <tr>
      <td scope="row">{{$comic->id}}</td>
      <td>{{$comic->cover}}</td>
      <td>{{$comic->title}}</td>

      <td>
        <a href="{{route ('admin.comics.show', ['comic'=> $comic->id])}}" class="btn btn-primary">View</a>
        <a href="{{route ('admin.comics.edit', ['comic'=> $comic->id])}}" class="btn btn-warning">Edit</a>

        <form class="" action="{{route('admin.comics.destroy', ['comic'=> $comic->id])}}" method="post">
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
