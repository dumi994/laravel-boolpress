@extends('layouts.app')

@section('content')

<h1> SPA Blog</h1>

<div class="card text-left" v-for="post in posts">
    <img src="holder.js/100px180/" alt="" class="card-img-top">
    <div class="card-body">
        <h3 class="card-title">@{{post.title}}</h3>
        <p class="card-text">@{{post.body}}</p>
        <p class="card-text">Tag: @{{post.tag}}</p>
    </div>
</div>
@endsection