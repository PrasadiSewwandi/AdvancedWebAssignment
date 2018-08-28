<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function index() {

        $students = Student::all();
        return view('students')->with('students', $students);
    }
}
