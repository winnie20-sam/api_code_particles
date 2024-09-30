<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        // Retrieve all products
        $products = Product::all();

        // Return products as JSON
        return response()->json($products);
    }
}
