@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')


<h1>Blog Name</h1>
[<a href='/posts/create'>create</a>]
<div class='posts'>
    @foreach ($posts as $post)
        <div class='post'>
            <h2 class='title'>
             <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <a href="">{{ $post->category->name }}</a>
            <p class='body'>{{ $post->body }}</p>
        </div>
    @endforeach
</div>  

<div class='paginate'>
    {{ $posts->links() }}
</div>
 @endsection   
