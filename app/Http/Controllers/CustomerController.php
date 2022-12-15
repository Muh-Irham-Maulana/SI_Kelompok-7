<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index($request = 5){
        error_log($request);
        $data = Customer::paginate($request);
        return view('content.customers', [
            "customerData" => $data,
            "content" => "customer"
        ]);
    }
}
