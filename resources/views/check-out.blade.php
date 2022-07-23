@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Order') }}</div>
                <form action="{{ url('buy/now/check/out/'.$item->id)}}" method="POST">
                @csrf
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item-> name}}</td>
                                <td><input type="text" name="quantity"></td>
                                <td><input type="text" name="price" value="{{ $item->price}}"></td>
                            </tr>
                            <tr>
                            </tr>
                            
                        </tbody>
                        
                    </table>
                    <textarea name="remark" id="" cols="30" rows="10"></textarea>

                </div>
                
                <div class="card-footer" style="
                    position: absolute;
                    width: 100%;" >
                    <button type="submit" style="position: relative; float: right" class="btn btn-success ">Checkout</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
