@extends('post.layout.footer')
@section('content')
<form action="{{route('updateContent' , $post->id)}}" method="POST">
    @csrf
    <h1 class="display-4 text-white animated zoomIn">Edit your post</h1>
    <div class="row g-3">
        <div class="col-12">
            Title:<input name="title" type="text" class="form-control bg-light border-0" value="{{$post->title}}" placeholder="title">
        </div>
        <div class="col-12">
            Description:<textarea name="description" class="form-control bg-light border-0" rows="3" placeholder="description">{{$post->description}}</textarea>
        </div>
        <div class="col-12">
            Type<textarea name="type" class="form-control bg-light border-0" rows="3" placeholder="type">{{$post->type}}</textarea>
        </div>
        <div class="col-12">
            Image link:<input name="img" type="text" class="form-control bg-light border-0" value="{{$post->img}}" placeholder="image link">
        </div>
        <div class="col-12">
            <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection