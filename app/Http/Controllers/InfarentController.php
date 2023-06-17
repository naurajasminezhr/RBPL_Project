<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class InfarentController extends Controller
{
/*function index(){
        return view('infarent2');
        }*/


    public function showProducts()
    {
        $products = Product::all();

        return view('infarent2', compact('products'));
    }

}
