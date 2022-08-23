@extends('layouts.main')
@section('container')
{{-- {{ $tittle }} --}}

<article class="mb-5">

<h1> {{ $post["tittle"] }} </h1>
<h5>{{ $post["author"] }}</h5>
<p>{{ $post["body"] }}</p>

</article>

<a href="/post"> Back to Post</a>

    
@endsection