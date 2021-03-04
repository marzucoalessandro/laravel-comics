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
    @foreach($comic as $comics)
    <tr>
      <td scope="row">{{$comics->id}}</td>
      <td>{{$comics->cover}}</td>
      <td>{{$comics->title}}</td>

      <td>
        <a href="{{route ('admin.comics.show', ['comic'=> $comics->id])}}" class="btn btn-primary">View</a>
        <a href="{{route ('admin.comics.edit', ['comic'=> $comics->id])}}" class="btn btn-warning">Edit</a>

        <form class="" action="{{route('admin.comics.destroy', ['comic'=> $comics->id] )}}" method="post">
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
