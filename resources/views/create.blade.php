@extends('layout.footer')
@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Submit a quote</h5>
                </div>
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
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