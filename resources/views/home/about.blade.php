@extends('layouts.main')
@section('container')
<h1>{{ $name }}</h1>
<h2>{{ $email }}</h2>
<img src="{{ $img }}" class="img-thumbnail rounded-circle" style="height: 200px;" alt="{{ $name }}" srcset="">
@endsection

