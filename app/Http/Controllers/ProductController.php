<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // @desc    GET all products
    // @route   GET /products
    // @access  Public
    public function index()
    {
        // Fetch only the latest 10 products
        $products = Product::latest()->paginate(10);

        // Retun feched products only for testing
        return response($products);
    }

    // @desc    Add product
    // @route   POST /products
    // @access  Only Admin
    public function store() {
        // Valide the data
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        // Create new product
        $product = Product::create($data);

        // Return the created product only for testing
        return response($product);
    }
}
