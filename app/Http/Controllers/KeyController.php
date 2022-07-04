<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class KeyController extends Controller
{
    public function index(Request $request)
    {
        $productId = $request->productId;
        $key = $request->key;
        $product = Product::where(['product_id' => $productId, 'key' => $key])->first();
        if ($product) {

            $product->status = 1;
            $product->save();
            return response()->json([
                'success' => true,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'msg' => 'Product and Licence key is invalid',
            ]);
        }
    }

    public function check($host)
    {
        $product = Product::where(['domain' => $host])->first();
        if ($product) {
            return response()->json([
                'success' => true,
                'status' => $product->status
            ]);
        } else {
            return response()->json([
                'success' => false,
                'msg' => 'invalided domain name',
            ]);
        }
    }
}
