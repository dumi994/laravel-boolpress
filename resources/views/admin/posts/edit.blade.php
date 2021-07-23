@extends('layouts.admin')

@section('content')

<h1>Edit post</h1>
@if($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<form action="{{route('admin.posts.update', $post->id)}}" method="post">
  @csrf
 @method('PUT')
<div class="form-group">
  <label for="title">Title</label>
  <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelperr" placeholder="Add a title" value="{{$post->title}}">
  <small id="titleHelperr" class="form-text text-muted">Type a title for the post, max 255 characters</small>
</div>  

<div class="form-group">
  <label for="image">Cover Image</label>
  <input type="text" class="form-control" name="image" id="image" aria-describedby="imageHelperr" placeholder="Add an image" value="{{$post->image}}">
  <small id="imageHelperr" class="form-text text-muted">Type a image url for the post, max 255 characters</small>
</div>  

<div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="5"> {{ $post->body}}</textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection