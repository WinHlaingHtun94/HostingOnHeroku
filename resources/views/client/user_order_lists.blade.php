
@extends('layouts.bootstrapStyle')
@section('content')

</div class="container">
    <div class="container">
        <h2>These following are the your's inquires</h2>
        <p>Please check your's orders and total ammount.</p>
    </div>
    <br>
    <div class="container">
    <table style="width:100%">
                <tr>
                    <th>Meals ID</th>    
                    <th>Order Names</th>
                    <th>Price</th>
                    <th>Delete</th>
                </tr>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item ->meals_id }}</td>
                    <td>{{ $item -> meals_name }}</td>
                    <td>{{ $item -> price }}</td>
                    <td><a href="{{ url('delete_order/'.$item->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr> 
                @endforeach 
                @if(Session::has('delete'))
                    <div class="alert alert-success">{{ Session::get('delete') }}</div>
                @endif
            </table>
            <br>
            <a href="{{route('user_profile')}}"><button class="btn btn-warning" style="width: 90px; font-size: 20px;">Back</button></a> 
    </div>
        
        <br> <br>  <br>
</div>

            
@yield('admin')

@endsection



