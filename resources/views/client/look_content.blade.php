
@extends('layouts.bootstrapStyle')
@section('content')
<br><br><br>        <br>
<div class="container">
    @if(Session::has('err'))
        <div class="alert alert-danger">{{ Session::get('err') }}</div>
    @endif
    <div class="col-md-12">
        <img src="{{asset('photos/'.$data->photo)}}" width="100%" height="auto" style="margin-top: 20px;">
        <legend></legend>
        <style>
            table, th, td {
            font-size: 20px;
            border-collapse: collapse;
            }
            th, td {
            padding: 5px;
            text-align: center;
            }
            th {
            text-align: center;
            }
        </style>
        <table class="table table-striped" > 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Meal Name</th>
                        <th>Price($)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->price }}</td>
                        <td>
                            <a href="#"><button class="btn btn-info" data-toggle="modal" data-target="#myedit" >Order now</button></a> <br> <br>
                        </td>
                    </tr>
                </tbody>
        </table>
        <a href="{{route('look_meal')}}"><button class="btn btn-warning" style="width: 90px; font-size: 20px;">Back</button></a> <br> <br>
    </div>

        <!-- for order info -->
         <div class="modal" id="myedit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header" >
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <img src="{{asset('photos/'.$data->photo)}}" style="text-align:center; width: 98%; height:auto; margin:10px;">  
                            <h3 class="alert alert-success" style="text-align: center;">Meal Name = {{ $data->name }}</h3> 
                            <h3 class="alert alert-success"  style="text-align: center;">Price = {{ $data->price }}$</h3> 
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form  action="{{ route('order_info') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id}}">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="{{ auth()->user()->id }} " name="user_id">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="{{ auth()->user()->name }} " name="user_name">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="{{ auth()->user()->email }} " name="user_email">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="{{ auth()->user()->address }} " name="user_address">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="{{ auth()->user()->phone_number }} " name="user_contact">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="{{ $data->name }} " name="name">
                                </div>
                                <div class="form-group">
                                   <input type="hidden" class="form-control" value="{{ $data->price }}" name="price">
                                </div>
                                <button type="submit" class="btn btn-info" >Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       <!-- end order info -->
         
</div>
@yield('admin')

@endsection
