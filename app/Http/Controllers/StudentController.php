<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $get_student_details = Student::get();
        //return $get_student_details;
        return view('student_list', compact('get_student_details'));
    }

    public function addStudent(){
        return view('add-student');
    }

    public function saveStudent(Request $request){
        //dd($request->all());

        //validation part for all requests
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $student_x = new Student();
        $student_x->name = $name;
        $student_x->email = $email;
        $student_x->phone = $phone;
        $student_x->address = $address;
        $student_x->save();

        return redirect()->back()->with('success', 'Student Added Successfully');

    }

    public function editStudent($id){
        $get_student_details = Student::where('id','=',$id)->first();
        return view('edit-student',compact('get_student_details'));
    }

    public function updateStudent(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        Student::where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        ]);

        return redirect()->back()->with('success', 'Student Updated Successfully');

    }

    public function deleteStudent($id){
        Student::where('id','=',$id)->delete();

        return redirect()->back()->with('success', 'Student Deleted Successfully');
    }

}
