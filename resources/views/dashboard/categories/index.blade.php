@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">Post Categories</h2>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-6">
  <a href="/dashboard/categories/create" class="btn btn-success mb-3 pt-2">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)            
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td class="py-3">
              <div class="d-flex ">
                  <a href="/blog?category={{ $category->slug }}" class="badge bg-info text-dark align-items-center justify-content-center d-flex me-2 py-3"><span data-feather="eye"></span></a>
                  <a href="" class="badge bg-warning text-dark align-items-center justify-content-center d-flex me-2 py-3"><span data-feather="edit"></span></a>
                  <form action="" class="d-inline" method="POST">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger text-dark align-items-center justify-content-center d-flex me-2 py-3" onclick="return confirm('Are you sure Delete this post?')"><span data-feather="x-circle"></span></button>
                </form>
              </div>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection