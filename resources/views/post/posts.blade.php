@extends('layouts.main')
@section('container')
{{-- {{ $tittle }} --}}

<div class="container">
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <h1 class="mb-3"> {{ $post->tittle }} </h1>
        <p>By : <a href="/author/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> in
         <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top rounded-top" alt="...">
        {!! $post->body !!}
        <a href="/post" class="d-block mt-3"> Back to Post</a>
    </div>
</div>

</div>



    
@endsection