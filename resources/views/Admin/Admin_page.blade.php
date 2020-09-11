@extends('layouts.bootstrapStyle')
@section('content')
<br>
<ul class="list-group col-md-2" id="left-side">
    <a href="{{ route('admin_profile') }}"><li class="list-group-item">Profile</li></a>
    <a href="{{ route('manage_user_level') }}"><li class="list-group-item">Manage User Level</li></a>
    <a href="{{ route('add_meals') }}"><li class="list-group-item">Add Meals</li></a>
    <a href="{{ route('order_lists') }}"><li class="list-group-item">Order Lists</li></a>
</ul>
@yield('admin')
@endsection
