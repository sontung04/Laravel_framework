@extends('post.layout.footer')
@section('content')
<form action="{{route('updateID')}}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-xl-12">
            <input type="text" name="id" class="form-control bg-light border-0" placeholder="Post ID" style="height: 55px;">
            <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection