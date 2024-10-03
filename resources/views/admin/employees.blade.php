@extends('layouts.e-commerce')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3>MongoDB and NodeJS</h3>
            <table id="tblEmployees1" class="display" style ="width:100%">
                <thead>
                    <tr>
                    <th>CVE. EMP</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>SALARY</th>
                    <th>GENDER</th>
                    <th>DEPARTMENT</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($employees as $emp)
                    <tr>
                        <td>{{$emp->cve_emp}}</td>
                        <td>{{$emp->first_name}}</td>
                        <td>{{$emp->email}}</td>
                        <td>{{$emp->salary}}</td>
                        <td>{{$emp->gender}}</td>
                        <td>{{$emp->department}}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
                
            </table>
        </div>
    </div>
</div>

@endsection