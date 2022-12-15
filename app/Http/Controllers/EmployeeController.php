<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index($request = 5){
        error_log($request);
        $data = Employee::paginate($request);
        return view('content.employee-working', [
            "employeeData" => $data,
            "content" => "employee"
        ]);
    }
}
