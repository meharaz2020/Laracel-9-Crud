@extends('template')
@section('main-content')
<h2>Edit post</h2>
<div class="container my-5">
    <form action="{{route('updatepost')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="postid" value="{{$post->id}}" id="">
        <div class="form-group mb-5">
            <label for="title" class="from-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group mb-5">
            <label for="title" class="from-label">Current image</label>

            <img style="height: 50px" src="{{asset($post->img_url)}}" alt="">

        </div>
         <div class="form-group mb-5">
            <label for="title" class="from-label">Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <input type="submit" value="Add post" class="btn btn-sm btn-primary">
    </form>
</div>
@endsection