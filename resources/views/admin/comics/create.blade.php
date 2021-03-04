@extends('layouts.dashboard')
@section('content')

<h1>Crea un nuovo comic</h1>
@if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="form-group" action="{{route ('admin.comics.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @METHOD('POST')
        <label for="title">Titolo del comic: </label>
        <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <div class="form-group">
          <label for="">Cover</label> 
          <input type="file" class="form-control-file" name="cover" placeholder="Add a cover image" aria-describedby="coverHelper">
          <small id="coverHelper" class="form-text text-muted">Add a cover img for this comic</small>

        </div>
        <button class="btn btn-primary mt-2" type="submit" name="button">INVIA</button>
      </form>

@endsection
