<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Student;

class StudentsCRUDController extends Controller
{
    public function back(){
        return view('index');
    }

    public function index(){
        $data ['students'] = Student::orderBy('id','asc')->paginate(3);

        return view('students.index',$data);
    }

    public function create(){
        return view('students.create');
    }

    

    public function store(Request $request){
        $request->validate([
            'id_student' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'photo' => 'required'
        ]);

        $students = new student;
        $students->id_student = $request->id_student;
        $students->name = $request->name;
        $students->address = $request->address;
        $students->phone = $request->phone;
        $students->email = $request->email;
        $students->photo = $request->photo;

        $file= $request->file('photo');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/'), $filename);
        $students['photo']= $filename;

        $students->save();
        return redirect()->route('students.index')->with('success','สร้างข้อมูลนักเรียนสำเร็จ');
    }

    public function edit(student $student){
        return view('students.edit' , compact('student'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'id_student' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $students = student::find($id);
        $students->id_student = $request->id_student;
        $students->name = $request->name;
        $students->address = $request->address;
        $students->phone = $request->phone;
        $students->email = $request->email;
        $students->save();
        return redirect()->route('students.index')->with('success','อัพเดทข้อมูลนักเรียนสำเร็จ');
    }
    public function destroy(student $student){
        $student->delete();
        return redirect()->route('students.index')->with('success','ลบข้อมูลนักเรียนสำเร็จ');
    }
}
