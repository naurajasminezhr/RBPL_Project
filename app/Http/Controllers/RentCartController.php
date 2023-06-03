<?php

namespace App\Http\Controllers;

class RentCartController extends Controller
{
    public function index()
    {
        // Add your logic here to handle the rent cart functionality
        // For example, fetching data from the database and passing it to a view

        return view('rentCart');
    }
}
