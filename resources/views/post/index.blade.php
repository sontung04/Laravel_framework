@extends('post.layout.footer')
@section('content')
<h1 class="display-4 text-white animated zoomIn">All post</h1>
@endsection
@section('content2')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            @foreach ($posts as $post)
            <div class="testimonial-item bg-light my-4">
                <div class="ps-4">
                    <h6 class="text-primary mb-1">({{$post->id}})<br></h6>
                    <h4 class="text-primary mb-1">{{$post->name}}</h4>
                    <h3 class="mb-0">{{$post->title}}</h3>
                </div>
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src={{$post->img}}>
                    
                </div>
                <div class="pt-4 pb-5 px-5">
                    {{$post->description}}<br>
                    <a href="{{route('detail' , $post->id)}}">More detail</a> <br><br>
                    <a href="{{route('delete' , $post->id)}}">Delete post</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection