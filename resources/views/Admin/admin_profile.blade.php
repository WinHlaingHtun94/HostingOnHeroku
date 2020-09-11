@extends('Admin.Admin_page')
@section('admin')
<div class="container">
       <div class="col-md-7">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            <form action="{{ route('update_account') }}" method="POST">
                @csrf
                @if(Session::has('password'))
                    <div class="alert alert-danger">
                        <strong>{{Session::get('password')}}</strong>
                    </div>
                @endif
                @if(Session::has('Pass_change'))
                    <div class="alert alert-success">
                        <strong>{{Session::get('Pass_change')}}</strong>
                    </div>
                @endif
                @if(Session::has('update'))
                <div class="alert alert-success">
                    <strong>{{Session::get('update')}}</strong>
                </div>
                @endif
               <input type="hidden" name="id" value="{{ $data->id }}">
                <legend>Admin Account</legend>
               
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{ $data->email }}">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Your Address" value="{{ $data->address }}">
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" class="form-control" name="contact" placeholder="Your Email" value="{{ $data->phone_number }}">
                </div>
                <a href="#" data-toggle="modal" data-target="#mypassword">Change Password</a> <br> <br>
                <button type="submit" class="btn btn-info">Change Account Info</button>
            </form>
       </div>
         <!-- for change password -->
         <div class="modal" id="mypassword">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Change Password</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="{{ route('change_password') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Old Password</label>
                                    <input type="password" class="form-control" name="old_password" placeholder="Your old password">
                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password" class="form-control" name="new_password" placeholder="Your new password">
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Your confirm password">
                                </div>
                                <button type="submit" class="btn btn-info">Change</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       <!-- end change password -->
@endsection