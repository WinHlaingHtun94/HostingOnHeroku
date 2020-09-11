@extends('Admin.Admin_page')
@section('admin')
<div class="col-md-1">

</div>
<div class="col-md-8">
 
    <form action="{{ route('insert_meals') }}" method="POST" enctype="multipart/form-data">
        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
           @endforeach
        @csrf
        <legend>Adding Your's Meals</legend>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control"  placeholder="Your Meals Name" name="name">
        </div>
        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" class="form-control" placeholder="Your Meals photo" name="photo">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" placeholder="Price" name="Price">
        </div>
        <button type="submit" class="btn btn-info">Add</button>
    </form>
</div>

@endsection