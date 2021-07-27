@extends('layouts.app')


@section('content')

<div class="container">
    <img class="img-fluid" src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}">
    <h1 class="display-1">{{$post->title}}</h1>
    <h5>In {{$post->category ? $post->category->name : 'Uncategorized'}} Category</h5>
    <p class="lead">{{$post->body}}</p>

    <a href="{{route('posts.index')}}">Back</a>
</div>



@endsection