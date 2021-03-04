@extends('layouts.dashboard')
@section('content')
<h1>Edit this Comic</h1>
@if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="" action="{{route ('admin.comics.update', ['comic' => $comic->id] )}}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Titolo del comic: </label>
        <input type="text" name="title" id="title" value="{{$comic->title}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="cover">cover del comic: </label>
        <img src="{{ $comic->cover}}" alt="">
        @error('cover')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit" name="button">INVIA</button>
      </form>
@endsection
