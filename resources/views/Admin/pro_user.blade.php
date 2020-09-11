@extends('layouts.bootstrapStyle')
@section('content')
<div class="col-md-1">

</div>
<div class="col-md-8">
 
    <form action="{{ route('upgrate_to_pro_user') }}" method="POST">
        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @if(Session::has('validation_error'))
            <div class="alert alert-danger">{{Session::get('validation_error')}}</div>
        @endif
        @if(Session::has('payment_error'))
            <div class="alert alert-danger">{{Session::get('payment_error')}}</div>
        @endif
        @csrf
        <legend style="color:violet; font-size:larger;" ><strong>UPGRADE TO PRO USER</strong> </legend>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control"  placeholder="Your Meals Name" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="form-group">
            <label for="">Visa Card or Credit Card Number</label>
            <input type="text" class="form-control"  placeholder="Add your card number" name="payment" >
        </div>
        <div class="form-group">
            <label for="">Pro User</label>
            <input type="text" class="form-control" placeholder="Type '1' to confirm premium user or not type '0'" name="pro_user">
        </div>
        <button type="submit" class="btn btn-info">Confirm</button>
    </form>
    <br>
    <a href="{{ route('shop') }}"><button  class="btn btn-warning">Go back to home</button></a>
</div>

@endsection

