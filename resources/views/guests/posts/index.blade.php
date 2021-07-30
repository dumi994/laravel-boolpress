@extends('layouts.app')

@section('content')

 <div class="jumbotron">
    <h1 class="display-3 text-center">New Posts</h1>
</div>

<section class="container">

    <div class="row justify-content-center text-center">

        @foreach($posts as $post)
        
            <div class="card justify-content-center" style="width:250px; height:300px;">
                <a href="{{route('posts.show', $post->id)}}">
                    <img class="card-img-top" style="height:150px;" src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}">
                </a>
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <p class="card-text">{{$post->body}}</p>
                </div>
            </div>
      
        @endforeach


    </div>
</section>

@endsection