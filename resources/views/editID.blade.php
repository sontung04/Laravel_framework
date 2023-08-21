@extends('layout.footer')
@section('content')
<form action="{{route('updateID')}}" method="POST">
    <div class="row g-3">
        <div class="col-xl-12">
            <input type="text" name="ID" class="form-control bg-light border-0" placeholder="Post ID" style="height: 55px;">
    </div>
</form>
@endsection