@extends('layouts.main')
@section('container')
{{ $tittle }}

@if ($post->count())

<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/posts/{{ $post[0]->slug }}" class="text-decoration-none text-dark ">{{ $post[0]->tittle}}</a></h3>
    <small class="text-muted">
        by: <a href="/author/{{ $post[0]->author->username }}" class="text-decoration-none"> {{ $post[0]->author->name }}</a> in <a href="/categories/{{ $post[0]->category->slug }}" class="text-decoration-none">{{ $post[0]->category->name }}</a>
        {{ $post[0]->created_at->diffForHumans() }}
    </small>
        <p class="card-text">{{ $post[0]->excerpt }}</p>
        <a href="/posts/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read More</a>
  </div>
</div>
    @else
    <P class="text-center fs-4">No Post Found</P>
@endif

<div class="container">
    <div class="row">
        @foreach ($post->skip(1) as $pos)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white rounded" style="background-color: rgba(0, 0, 0, 0.4)"><a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none text-white">{{ $pos->category->name }}</div>
                <img src="https://source.unsplash.com/500x400?{{ $pos->category->name }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <a href="/posts/{{ $pos->slug }}" class="text-decoration-none">{{ $pos->tittle}}</a></h5>
                  <small class="text-muted">
                    By. <a href="/author/{{ $pos->author->username }}" class="text-decoration-none"> {{ $pos->author->name }}</a> 
                    {{ $pos->created_at->diffForHumans() }}
                </small>
                  <p class="card-text">{{ $pos->excerpt }}</p>
                  <a href="/posts/{{ $pos->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection