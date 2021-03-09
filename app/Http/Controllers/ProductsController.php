<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $title = "My First Laravel Project";
        $description = "Created by Patrick Maine";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        //direct passing of data array to view
        return view('products.products', ['data' => $data]);
        
        //multiple passing of data
        // return view('products.products', compact('title', 'description'));

        //single passing of data
        // return view('products.products')->with('data', $data);

    }
    
    //passing of array data to view directly with parameter
    public function show($name){

        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.products', ['products' => $data[$name] ?? 'Product ' . $name . ' Not available!']);

    }
}
