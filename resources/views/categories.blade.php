@extends('layouts/main')

@section('container')
<h2 class="my-5">Post categories</h2>

<div class="container">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3 bg-dark opacity-75">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
{{-- <ul>
    <li>
        <a href="/categories/{{ $category->slug}}">{{ $category->name }}</a>
    </li>
</ul> --}}
@endsection
