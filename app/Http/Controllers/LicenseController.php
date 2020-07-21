<?php

namespace App\Http\Controllers;

use App\License;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LicenseController extends Controller
{
    // @desc    GET all Licenses
    // @route   GET /licenses
    // @action  index
    // @access  Authenticated users
    public function index()
    {
        $licenses = auth()->user()->keys()->get();

        return response($licenses);
    }

    // @desc    Create new License
    // @route   POST /products/{product}/licenses
    // @action  store
    // @access  Authenticated users
    public function store(Product $product)
    {
        $oldKey = auth()->user()->keys()->where('product_id', $product->id)->first();
        if ($oldKey === null) {
            $prefix = 'KeyGen-' . Str::slug($product->name) . '-' . Str::slug(auth()->user()->name);
            $key = uniqid($prefix);

            $license = new License();
            $license->user_id = auth()->user()->id;
            $license->product_id = $product->id;
            $license->key = $key;
            $license->save();

            return response($license);
        }

        return response($oldKey);

    }

    // @desc    Delete License
    // @route   DELETE /licenses/{license}
    // @action  destroy
    // @access  Authenticated users
    public function destroy(License $license)
    {
        $license->delete();

        return response('license was deleted');
    }
}
