<?php

namespace App\Http\Controllers;

use App\Models\Student; //add
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all(); //fetch all products from DB
        return view('student_manage', ['students' => $students]);
    }
}
