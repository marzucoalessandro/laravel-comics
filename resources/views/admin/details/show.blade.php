@extends('layouts.dashboard')
@section('content')
<h1>View of single comic detail</h1>
<p>{{ $comicDetail->id}}</p>
<p>{{ $comicDetail->price}}</p>
<p>{{ $comicDetail->description}}</p>
<p>{{ $comicDetail->designer}}</p>
<p>{{ $comicDetail->writer}}</p>
<p>{{ $comicDetail->data_publ}}</p>
<p>{{ $comicDetail->vol_numb}}</p>
<p>{{ $comicDetail->size}}</p>
<p>{{ $comicDetail->page}}</p>
<p>{{ $comicDetail->rated}}</p>


@endsection
