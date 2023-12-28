<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades;

// MODELS
use App\Models\ProductModel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests; 

class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    

}
