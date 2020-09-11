
@extends('layouts.bootstrapStyle')
@section('content')

<div class="jumbotron text-center">
    <h1>Meals Showcase</h1>
</div>

</div class="container">
    <div class="row">
        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('order_error'))
            <div style="color: orange; "><strong><em>{{ Session::get('order_error') }}</em></strong></div>
        @endif
        @foreach($data as $item)
            <div class="col-sm-4">
                <img src="{{asset('photos/'.$item->photo)}}" width="300" height="250" style="margin-top:30px">
                <h3>{{$item->title}}</h3>
                <a href="{{url('look_content/'.$item->id)}}"><button type="button" class="btn btn-info">See more....</button></a>
            </div>
        @endforeach
    </div>
    <br> <br>  <br>
</div>

            
@yield('admin')

@endsection
