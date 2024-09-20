@extends('layouts.e-commerce')

@section('content')

<div class="container-fluid">
    <select name="cboxcategory" id="cboxcategory">
    </select>
    <div class="row">
        <div class="col-md-12">
            <h3>Datatable using AJAX</h3>
            <table id="tblProducts2" class="display" style ="width:100%">
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
                    
                </tbody>
                
            </table>
        </div>
    </div>
</div>

@endsection