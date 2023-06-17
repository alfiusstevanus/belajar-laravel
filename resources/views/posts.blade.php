@extends('layouts/main')

@section('container')
<h2 class="my-3 text-center">{{ $title }}</h2>
<div class="row mb-3 justify-content-center">
    <div class="col-md-6">
        <form action="/blog">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())
    
{{-- card --}}
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
        <a href="/posts/{{ $posts[0]->slug}}" class="text-decoration-none text-dark"><h5 class="card-title">{{ $posts[0]->title }}</h5></a>
        <p>
            <small class="text-body-secondary">
            by <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a class="text-decoration-none btn btn-primary"  href="/posts/{{ $posts[0]->slug}}">Read more</a>
        <p class="card-text"></p>
        
    </div>
</div>  

{{-- loop  --}}
<div class="container">
    <div class="row">
@foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute bg-dark px-3 py-2"><a class="text-decoration-none text-white" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small class="text-body-secondary">
                    by <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $post->slug}}">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-3">Post not found</p>
@endif
<div class="d-flex justify-content-center my-3">
    {{ $posts->links() }}
</div>
@endsection
