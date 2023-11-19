<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
{
    $students = [
        ['nim' => '123456', 'nama' => 'John Thor', 'prodi' => 'Informatika'],
        ['nim' => '789012', 'nama' => 'John Wick', 'prodi' => 'Sistem Informasi'],
        ['nim' => '345678', 'nama' => 'John Does', 'prodi' => 'Teknik Komputer'],
        
    ];

    return view('students.index', compact('students'));
}

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Student::create($validatedData);

        return redirect(route('students.index'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $student->update($validatedData);

        return redirect(route('students.index'));
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect(route('students.index'));
    }
}
