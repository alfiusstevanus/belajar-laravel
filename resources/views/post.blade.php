@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="my-5">{{ $post->title }}</h2>
            <p>by <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>   
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
        <article class="my-3  fs-5">
            {!! $post->body !!}        
        </article>
        <div>
            <br>
        <a class="text-decoration-none" href="/blog">back</a>
        </div>
        </div>
    </div>
</div>
@endsection