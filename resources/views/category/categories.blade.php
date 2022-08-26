@extends('layouts.main')
@section('container')
{{ $tittle }}

@foreach ($post as $pos)
<article class="mb-5">

    <h1>
    <a href="/posts/{{ $pos->slug }}" class="text-decoration-none">{{ $pos->tittle}}</a>
    </h1>
    <h5>by: <a href="/author/{{ $pos->user->id }}" class="text-decoration-none"> {{ $pos->user->name }}</a> in <a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none">{{ $pos->category->name }}</a></h5>
    <p>{{ $pos->excerpt }}</p>

</article>
@endforeach
    
@endsection