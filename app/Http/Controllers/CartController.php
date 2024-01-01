<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades;

// MODELS
use App\Models\ProductModel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests; 

class CartController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function getProduct($id){
        $product = ProductModel::find($id);
        if ($product){
            return response()->json.($product);
        }
        else {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
