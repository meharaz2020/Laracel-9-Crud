@extends('template')
@section('main-content')
<h2>addpost</h2>
<div class="container my-5">
    <form action="{{route('storepost')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-5">
            <label for="title" class="from-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group mb-5">
            <label for="title" class="from-label">Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <input type="submit" value="Add post" class="btn btn-sm btn-primary">
    </form>
</div>
@endsection