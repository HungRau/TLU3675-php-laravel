<?php

namespace App\Http\Controllers;

use App\Models\Student; //add
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $students = Student::all(); //Nhan all du lieu tu DB
        return view('student_manage', ['students' => $students]);
    }
    public function get_student_by_id($id)
    {
        //do
        $students = Student::where('id', $id)->first();
        // $students = Student::find($id);
        return $students;
    }
    public function edit($id)
    {
        $students = Student::find($id);
        return view('student_edit', ['students' => $students]);
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->fullname = $request->input('fullname');
        $student->birthday = $request->input('birthday');
        $student->address = $request->input('address');
        $student->update();
        return "Student Updated Successfully";
        return view('student_manage');
    }
}
