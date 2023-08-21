@extends('layout.footer')
@section('content')
<form action="{{route('updateContent')}}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-12">
            <textarea class="form-control bg-light border-0" rows="3" placeholder="Edit your post"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection