
@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <h3>
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a></h3>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    @endforeach

@endsection