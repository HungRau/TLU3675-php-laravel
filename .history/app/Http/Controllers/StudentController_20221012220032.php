<?php

namespace App\Http\Controllers;

use App\Models\Student; //add
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $products = ::all(); //fetch all products from DB
        return view('list', ['products' => $products]);
    }
}
