@extends('layouts.admin')

@section('content')
<!-- 
<h1>Create a new post</h1>

<form action="{{route('admin.posts.store')}}" method="post"> -->
  <!-- Token non lo scordare altrimenti error! -->
  @csrf
<!-- <div class="form-group">
  <label for="title">Title</label>
  <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelperr" placeholder="Add a title" value="{{old('title')}}">
  <small id="titleHelperr" class="form-text text-muted">Type a title for the post, max 255 characters</small>
</div>  

<div class="form-group">
  <label for="image">Cover Image</label>
  <input type="text" class="form-control" name="image" id="image" aria-describedby="imageHelperr" placeholder="Add an image" value="{{old('image')}}">
  <small id="imageHelperr" class="form-text text-muted">Type a image url for the post, max 255 characters</small>
</div>  

<div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="5"> {{ old('body')}}</textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form> -->

<div class="d-flex justify-content-between">
    <h1>All Posts </h1>
    <div>
        <a class="btn btn-primary" href="{{route('admin.posts.create')}}"> <i class="fas fa-plus-circle fa-sm fa-fw"></i> Add a post</a>
    </div>
</div>


<table class="table table-striped table-inverse ">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>TITLE</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>

        @foreach($posts as $post)

        <tr>
            <td scope="row">{{$post->id}}</td>
            <td> <img width="100" src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}"> </td>
            <td>
                {{$post->title}}
            </td>
            <td class="d-flex">
                <a href="{{route('admin.posts.show', $post->id )}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-sm fa-fw"></i>
                </a>
                <a href="{{route('admin.posts.edit', $post->id )}}" class="btn btn-secondary">
                    <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                </a>

                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-sm fa-fw"></i></button>
                </form>


            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection