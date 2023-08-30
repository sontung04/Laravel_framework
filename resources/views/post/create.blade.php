@extends('post.layout.footer')
@section('content')
<form action="{{route('store')}}" method="POST">
 @csrf
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-12">
            <div class="col-lg-12">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Submit a post</h5>
                </div>
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" name="title" class="form-control bg-light border-0" placeholder="Title" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea name="description" class="form-control bg-light border-0" rows="3" placeholder="Description"></textarea>
                            </div>
                            <div class="col-12">
                                <textarea name="type" class="form-control bg-light border-0" row="3" placeholder="Type"></textarea>
                            </div>
                            <div class="col-12">
                                <input name="img" type="text" class="form-control bg-light border-0" placeholder="Image link" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection