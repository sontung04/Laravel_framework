@extends('post.layout.footer')
@section('content')
<h1 class="display-4 text-white animated zoomIn">Post Detail</h1>
<h3 class="display-4 text-white animated zoomIn">{{$post->id}}</h3>
@endsection

@section('content2')
<div class="col-lg-8">
    <div class="mb-5">
        <img class="img-fluid w-100 rounded mb-5" src={{$post->img}}>
        <h1 class="mb-4">{{$post->title}}</h1>
        <h2>{{$post->description}}</h2>
        <p>{{$post->type}}</p>
        <h3 class="mb-4"><i>Writter: {{$user}}</i></h3><br>
        <a href="{{route('editContent' , $post->id)}}">Edit this post</a> <br><br>
        <a href="{{route('delete' , $post->id)}}">Delete this post</a> <br><br>

    </div>
</div>
@endsection