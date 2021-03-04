@extends('layouts.dashboard')
@section('content')
<h1>{{ $comic->title }}</h1>
<img src="{{ asset ('storage/' . $comic->cover)}}" alt="superhero">
@endsection
