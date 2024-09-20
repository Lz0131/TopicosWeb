@extends('layouts.e-commerce')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table id="tblProducts" class="display" style ="width:100%">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>Size</th>
                    <th>COLOR</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->sale_price}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>{{$p->size}}</td>
                        <td>{{$p->color}}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>

@endsection