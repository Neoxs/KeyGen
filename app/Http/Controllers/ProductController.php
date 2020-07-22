<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    // @desc    GET all products
    // @route   GET /products
    // @action  index
    // @access  Public
    public function index()
    {
        // Fetch only the latest 10 products
        $products = Product::latest()->paginate(10);

        // Retun feched products only for testing
        return view('products.index', compact('products'));
    }

    // @desc    Add product
    // @route   POST /products
    // @action  store
    // @access  Only Admin
    public function store() {
        // Validating the data
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
