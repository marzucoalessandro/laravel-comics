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
      <form class="" action="{{route ('admin.comics.update', ['comic' => $comics->title] )}}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Titolo del comic: </label>
        <input type="text" name="title" id="title" value="{{$comics->title}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="cover">cover del comic: </label>
        <img src="{{ $comics->cover}}" alt="">
        @error('cover')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" name="button">INVIA</button>
      </form>
@endsection
