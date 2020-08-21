<!-- extends from template -->
@extends('layouts.app')

<!-- Looop to display posts -->
@section('content')
<h1>Posts</h1>

<!-- when clicked goes to PostController create() -->
<button id="create">Create post</button>
<a href="{{ route('post.create') }}">create link</a>


<!-- Looop to display posts, getting the data from PostController-->
@foreach($posts as $post)
<article>

    <h2>{{ $post->title }}</h2>
    <img src="{{asset("images/$post->image")}}" alt="post image">
    <p>{{ @substr($post->content,0,100 ) }} ...</p>
    <a href="/posts/{{$post->id}}">See more</a>
    <p>likes</p> <!-- TODO join table query -->
    <p>comments</p> <!-- TODO join table query -->
    @endforeach
</article>
<p>Comments :</p>
<ul>
    @foreach($post->comments as $comment)
    <li>{{$comment->comment}}</li>
    @endforeach
</ul>
<form action="/posts/edit/{{ $post->id}}" method="post">
    @csrf
    <input type="text" name="comment">
    <input type="submit" value="Comment">
</form>
@endforeach

<!-- scripts, can probably extend from template, but for now here -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!-- My script -->
<script>
    $("#create").click(function() {
        $.ajax({
            type: 'get',
            url: "{{ route('post.create') }}"
            //url: "./create",
        });
    })
    /* $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); */
</script>
