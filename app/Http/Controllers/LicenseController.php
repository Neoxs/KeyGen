<?php

namespace App\Http\Controllers;

use App\License;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LicenseController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    // @desc    GET all Licenses
    // @route   GET /licenses
    // @action  index
    // @access  Authenticated users
    public function index()
    {
        $licenses = auth()->user()->keys()->get();

        // Only for testing
        return view('keys.index', compact('licenses'));
    }

    // @desc    Create new License
    // @route   POST /products/{product}/licenses
    // @action  store
    // @access  Authenticated users
    public function store(Product $product)
    {
        // Checking if the user already has an exsiting license for that product
        $oldKey = auth()->user()->keys()->where('product_id', $product->id)->first();
        if ($oldKey === null) {
            $prefix = 'KeyGen-' . Str::slug($product->name) . '-' . Str::slug(auth()->user()->name);
            $key = uniqid($prefix);

            $license = new License();
            $license->user_id = auth()->user()->id;
            $license->product_id = $product->id;
            $license->key = $key;
            $license->save();
        }

        return redirect('/licenses');

    }

    // @desc    Delete License
    // @route   DELETE /licenses/{license}
    // @action  destroy
    // @access  Authenticated users
    public function destroy(License $license)
    {
        $license->delete();
        
        return redirect('/licenses');
    }
}
