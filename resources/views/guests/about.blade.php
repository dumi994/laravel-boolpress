@extends('layouts.app')

@section('content')

<h1> About posts</h1>
<post-component></post-component>
<!-- <post-component text="lorem1"></post-component> -->

<div class="card text-left" v-for="post in posts">
    <img src="holder.js/100px180/" alt="" class="card-img-top">
    <div class="card-body">
        
        <h3 class="card-title">@{{post.title}}</h3>
        <p class="card-text">@{{post.body}}</p>
        <p class="card-text">Category: @{{post.category.name}}</p>
        <p class="card-text">Tag: @{{post.tag}}</p>

    </div>
</div>
@endsection