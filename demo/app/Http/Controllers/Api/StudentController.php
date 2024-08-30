<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students=Student::all();
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  return view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $requestData=Request()->all();
        $student=Student::create($requestData);
        $student->save();
        return $student;
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
        $requestData=Request()->all();
        $student->update($requestData);
        $student->save();
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        $message="student Deleted Succssfully";
        // return $message;
        // return $student;
        return [$student,$message];
    }
}
