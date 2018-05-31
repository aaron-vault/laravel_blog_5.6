@extends('layouts.wrapper')

@section('content')

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->description }}</p>

@endsection