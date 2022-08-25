@extends('layouts.main')
@section('container')
{{-- {{ $tittle }} --}}

<article class="mb-5">

<h1> {{ $post->tittle }} </h1>
<h5>By : {{ $post->author }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </h5>
{!! $post->body !!}

</article>

<a href="/post"> Back to Post</a>

    
@endsection