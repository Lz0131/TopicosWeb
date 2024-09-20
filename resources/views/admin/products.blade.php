@extends('layouts.e-commerce')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3>Datatable using AJAX</h3>
            <select name="cmbCategoryList" id="cmbCategoryList" style="width: 50%;"></select>
            <table id="tblProducts2" class="display" style ="width:100%">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>Size</th>
                    <th>COLOR</th>
                    <th>CATEGORY</th>
                </tr>
                </thead>
                <tbody>
                    
                </tbody>
                
            </table>
        </div>
    </div>
</div>

@endsection