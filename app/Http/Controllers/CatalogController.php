<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class CatalogController extends Controller
{
    public function index()
    {
        
        $products=Products::all();
        return view('catalog',compact('products'));
    }
}
