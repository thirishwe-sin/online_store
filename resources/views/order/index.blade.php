@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <a href="{{ url('admin/category/create')}}">
                <button class=" btn btn-success">Create</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>price</th>
                        <th>remark</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>operation</th>
                    </tr>
                </thead>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->remark}}</td>
                        <td>
                           
                        </td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->updated_at}}</td>
                        <td>
                            <a href="{{url('admin/category/'.$order->id.'/edit')}}"><button class="btn btn-warning">Edit</button></a>
                            
                            <a href="{{url('admin/category/'.$order->id.'')}}"><button class="btn btn-primary">Detail</button></a>
                            <form action="{{url('admin/category/'.$order->id.'')}}" method="POST">
                                @csrf
                                @method("DELETE")
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection