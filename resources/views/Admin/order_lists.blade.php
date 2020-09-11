@extends('Admin.Admin_page')
@section('admin')
<div class="col-md-9">
        <style>
            table, th, td {
            /* border: 1px solid black; */
            border-collapse: collapse;
            }
            th, td {
            padding: 5px;
            text-align: left;
            }
            th {
            text-align: left;
            }
        </style>
            @if(Session::has('update_premium_user_success'))
            <div class="alert alert-success">{{Session::get('update_premium_user_success')}}</div>
        @endif
        <div>
            <h2>These following are the meals order lists of our clients</h2>
            <p>Please check and analyze their orders.</p>
        </div>
            <table class="table table-striped"> 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Payment Card</th>
                        <th>Order Name</th>
                        <th>Price</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                @foreach($data as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->user_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->contact }}</td>
                            <td>{{ $item->card_number }}</td>
                            <td>{{ $item->meals_name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <a href="{{ url('delete_order/'.$item->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
    </div>
@endsection