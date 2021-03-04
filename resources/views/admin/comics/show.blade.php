@extends('layouts.dashboard')
@section('content')
<h1>{{ $comics->title }}</h1>
<img src="{{ $comics->cover}}" alt="">
@endsection
