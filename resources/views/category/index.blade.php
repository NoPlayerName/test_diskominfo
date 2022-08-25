@extends('layouts.main')
@section('container')
<h1 class="mb-5">{{ $tittle }}</h1>

@foreach ($category as $cat)
<article class="mb-5">

    <h1>
    <a href="/categories/{{ $cat->slug }}" class="text-decoration-none">{{ $cat->name}}</a>
    </h1>
 

</article>
@endforeach
    
@endsection