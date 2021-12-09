<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recruiting friends</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Recruiting friends</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button onclick="deletePost()">delete</button> 
        </form>
         <h2 class="title">
            {{ $post->title }}
        </h2>
        <small>{{ $post->user->name }}</small>
         <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
                    
            </div>
            <a href="">{{ $post->category->name }}</a>
        </div>
       
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        <script>
            function deletePost(e) {
                'use strict';　
                event.preventDefault();

                if (confirm( '削除すると複元できません。\n本当に削除しますか？')) {
                    document.getElementById ('form_delete').submit();
                }
                
            }
        </script>
    </body>
</html>