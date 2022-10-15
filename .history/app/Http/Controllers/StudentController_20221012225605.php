<?php

namespace App\Http\Controllers;

use App\Models\Student; //add
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all(); //Nhan all du lieu tu DB
        return view('student_manage', ['students' => $students]);
    }
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('student.add');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $newPost = Student::create([
    //         'id' => $request->title,
    //         'fullname' => $request->fullname,
    //         'birthday' => $request->birthday,
    //         'address' => $request->address
    //     ]);

    //     return redirect('student/' . $newPost->id . '/edit');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Student $student)
    // {
    //     return view('student.edit', [
    //         'student' => $student,
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Student $student)
    // {
    //     $student->update([
    //         'id' => $request->title,
    //         'fullname' => $request->fullname,
    //         'birthday' => $request->birthday,
    //         'address' => $request->address
    //     ]);

    //     return redirect('student/' . $student->id . '/edit');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Student $student)
    // {
    //     $student->delete();
    //     return redirect('product/');
    // }
}
