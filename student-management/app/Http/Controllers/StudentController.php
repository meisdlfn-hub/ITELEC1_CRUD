<?php

namespace App\Http\Controllers;

use App\Models\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    // EAD: Display all students
    public function index()
    {
        $students = Students::latest()->get();

        return view('students.index', compact('students'));
    }
    //CREATE: Show the form
    public function create()
    {
        return view('students.create');
    }

    //CREATE: Save a new student
    public function store (Request $request)
    {
        $validated = $request->validate([
            'student_number' =>
    'required|string|max:50|unique:students,student_number',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' =>
    'required|email|max:255|unique:students,email',
            'course' => 'required|string|max:255',
        ]);
    }
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
