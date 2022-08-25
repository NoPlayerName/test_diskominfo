@extends('layouts.main')
@section('container')
{{ $tittle }}

@foreach ($post as $pos)
<article class="mb-5 border-bottom pb-4">

    <h1>
    <a href="/posts/{{ $pos->slug }}" class="text-decoration-none">{{ $pos->tittle}}</a>
    </h1>
    <h5>by: {{ $pos->author }} in {{ $pos->category->name }}</h5>
    <p>{{ $pos->excerpt }}</p>
    <a href="/posts/{{ $pos->slug }}" class="text-decoration-none">Read More</a>
</article>

@endforeach
    
@endsection