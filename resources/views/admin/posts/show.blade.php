@extends('layouts.admin')

@section('content')

<img src="{{asset('storage/' . $post->image)}}" alt="">
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>

<a href="{{route('adminposts.index')}}"><i class="fas fa-arrow-left fa-sm fa-fw"></i> Back</a>
<a href="{{route('adminposts.edit', $post->id)}}">Edit</a>


@endsection