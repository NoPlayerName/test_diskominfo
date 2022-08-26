@extends('layouts.main')
@section('container')
{{-- {{ $tittle }} --}}

<article class="mb-5">

<h1> {{ $post->tittle }} </h1>
<h5>By : <a href="" class="text-decoration-none"> {{ $post->user->name }}</a> in
 <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </h5>
{!! $post->body !!}

</article>

<a href="/post"> Back to Post</a>

    
@endsection