<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AdminEmployeesController extends Controller
{
    public function index(){
        $response = Http::get('http://localhost:3000/api/v1/employees');
        $employees = $response->object();
        return view('admin.employees', compact('employees'));
    }
}
