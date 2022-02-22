<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Hash;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function createSubmit(Request $req)
    {
        $req->validate(
            [
                "name"=>"required",
                "email"=>"required|email|unique:students,email",
                "password"=>"required",
                "confirm_password"=>"required|same:password"
            ],
            [
                "name.required"=>"Please provide name",
                "email.email"=>"Please enter valid E-mail"
            ]
        );
        $st = new Student();
        $st->name = $req->name;
        $st->email = $req->email;
        $st->password = Hash::make($req->password);
        $st->save();
        return redirect()->route('student.list');
    }

    public function list()
    {
        $data = Student::all();
        return view('students.list')->with('data', $data);
    }

    public function edit(Request $req)
    {
        $student = Student::where('id', $req->id)->first();
        return view('students.edit')->with('student', $student);
    }

    public function editSubmit(Request $req)
    {
        $req->validate(
            [
                "name"=>"required",
                "email"=>"required|email|unique:students,email,".$req->id
            ],
            [
                "name.required"=>"Please provide name",
                "email.email"=>"Please enter valid E-mail"
            ]
        );
        $student = Student::where('id', $req->id)->update(['name'=>$req->name, 'email'=>$req->email]);
        return redirect()->route('student.list');
    }
}
