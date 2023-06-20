@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h2 class="my-5">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success pb-5 me-2"><span data-feather="arrow-left"></span> Back to All my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning pb-5 me-2"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
                @method('delete')
                @csrf
                <button class="btn bg-danger text-light pb-5" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>

            @if($post->image)
            <div style="max-height: 400px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-5" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-5" alt="{{ $post->category->name }}">
            @endif
        <article class="my-3  fs-5">
            {!! $post->body !!}        
        </article>
        <div>
        </div>
        </div>
    </div>
</div>

@endsection