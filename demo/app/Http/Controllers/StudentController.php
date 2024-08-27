<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// $students=DB::table('students')->get();
class StudentController extends Controller
{
    //

    function index()
    {
        // echo "hello";
        $students=DB::table('students')->get();
        // dump(students);
        // return view('index',['students'=>$students]);
        return view('index',compact('students'));
    }


    function show($id)
    {
       $student=Student::findOrFail($id);
    //    dump($student);
    return view('show',compact('student'));
    }

    function destroy($id)
    {
        $student=Student::findOrFail($id);
        $student->delete();
        return to_route('students.index');
    }

    function create()
    {
        return view('create');
    }

    function store(Request  $request){
    //    dd($request->all());
    $requestedData=request()->all();
    $student=Student::create($requestedData);
    $student->save();
    return to_route('students.show',$student->id);


    }

    function edit($id)
    {
        $student=Student::findOrFail($id);

        return view('edit',compact('student'));
    }

    function update($id)
    {
        $student=Student::findOrFail($id);
        $updatedData=request()->all();
        $student->update($updatedData);
        return to_route('students.index');
    }
}
