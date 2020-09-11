@extends('Admin.Admin_page')
@section('admin')
    <div class="col-md-9">
        <style>
            table, th, td {
            border: 1px solid black;
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
            <h2>These following are the accounts of our clients</h2>
            <p>Please check and analyze their accounts.</p>
        </div>
            <table class="table table-striped"> 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>isAdmin</th>
                        <th>Pre</th>
                        <th>Pro</th>
                        <th>Starter</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                @foreach($data as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>{{ $item->isAdmin }}</td>
                            <td>{{ $item->premium_user }}</td>
                            <td>{{ $item->pro_user }}</td>
                            <td>{{ $item->starter_user }}</td>
                            <td>
                                <a href="{{ url('update_user_info/'.$item->id) }}"><button type="button" class="btn btn-info">Update</button></a>
                            </td>
                            <td>
                                <a href="{{ url('delete_user_info/'.$item->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
    </div>
@endsection