<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        // Protect all methods except login and registration with JWT auth
        $this->middleware('auth:api');
    }

    /**
     * Get all customers.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch all customers
        $customers = Customer::all();

        // Return customers in JSON format
        return response()->json($customers, 200);
    }
}
