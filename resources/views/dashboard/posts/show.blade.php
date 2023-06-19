@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h2 class="my-5">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All my posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn bg-danger text-dark"><span data-feather="x-circle"></span> Delete</a>


            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-5" alt="{{ $post->category->name }}">
        <article class="my-3  fs-5">
            {!! $post->body !!}        
        </article>
        <div>
        </div>
        </div>
    </div>
</div>

@endsection