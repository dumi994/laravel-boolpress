@extends('layouts.app')


@section('content')

<div class="container">
    <img class="img-fluid" src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}">
    <h1 class="display-1">{{$post->title}}</h1>
    <h5>In 
        @if($post->category)
        <a href="{{route('categories.show', $post->category->slug)}}">{{$post->category ? $post->category->name : 'Uncategorized'}}</a> 
        @else
            {{$post->category ? $post->category->name : 'Uncategorized'}}
        @endif
        Category
    </h5>
    <div class="tags">
        Tag: 
        @forelse($post->tags as $tag)
            <span>{{$tag->name}}</span>
        @empty
            <span>No tags yet</span>
        @endforelse
    </div>
    <p class="lead">{{$post->body}}</p>

    <a href="{{route('posts.index')}}">Back</a>
</div>



@endsection