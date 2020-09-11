@extends('Admin.Admin_page')
@section('admin')
<div class="col-md-2"></div>
    <div class="col-md-5">
        @if(Session::has('data'))
        {{Session::get('data')}}
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @if(Session::has('validation_error'))
            <div class="alert alert-danger">{{Session::get('validation_error')}}</div>
        @endif
        <form action="{{ route('update_premium_user_info') }}" method="POST">
            @csrf
            <legend><strong>Update Premium Info</strong></legend>
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name }}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $data->email }}">
            </div>
            <div class="form-group">
                <label for="">isAdmin</label>
                <input type="text" class="form-control" name="isAdmin" value="{{ $data->isAdmin }}">
            </div>
            <div class="form-group">
                <label for="">Premium User</label>
                <input type="text" class="form-control" name="premium" value="{{ $data->premium_user }}">
            </div>
            <div class="form-group">
                <label for="">Pro User</label>
                <input type="text" class="form-control" name="pro" value="{{ $data->pro_user }}">
            </div>
            <div class="form-group">
                <label for="">Starter User</label>
                <input type="text" class="form-control" name="starter" value="{{ $data->starter_user }}">
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form> <br>
        <a href="{{ route('manage_user_level') }}"><button class="btn btn-warning" style="width: 70px;">Back</button></a>
    </div>
@endsection