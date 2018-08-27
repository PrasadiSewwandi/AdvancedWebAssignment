<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;

class LecturersController extends Controller
{
    public function index() {
        $lecturers = Lecturer::all();
        return view('lecturers');
    }
}
