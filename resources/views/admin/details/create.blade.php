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
      <form class="form-group" action="{{route ('admin.details.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @METHOD('POST')
        <label for="title">Price: </label>
        <input class="form-control" type="text" name="price" id="price" value="{{ old('price')}}">
        @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="title">Description: </label>
        <textarea name="description" id="description" rows="8" cols="80"></textarea>
        <!-- <input class="form-control" type="text" name="description" id="description" value="{{ old('description')}}"> -->
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="title">Designer: </label>
        <input class="form-control" type="text" name="designer" id="designer" value="{{ old('designer')}}">
        @error('designer')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="title">Writer: </label>
        <input class="form-control" type="text" name="writer" id="writer" value="{{ old('writer')}}">
        @error('writer')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="title">Data_publ: </label>
        <input class="form-control" type="date" name="data_publ" id="data_publ" value="{{ old('data_publ')}}">
        @error('data_publ')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="title">Vol_numb: </label>
        <input class="form-control" type="text" name="vol_numb" id="vol_numb" value="{{ old('vol_numb')}}">
        @error('vol_numb')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="title">Size: </label>
        <input class="form-control" type="text" name="size" id="size" value="{{ old('size')}}">
        @error('size')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="title">Page: </label>
        <input class="form-control" type="text" name="page" id="page" value="{{ old('page')}}">
        @error('page')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="title">Rated: </label>
        <input class="form-control" type="text" name="rated" id="rated" value="{{ old('rated')}}">
        @error('rated')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="btn btn-primary mt-2" type="submit" name="button">INVIA</button>
      </form>

@endsection
