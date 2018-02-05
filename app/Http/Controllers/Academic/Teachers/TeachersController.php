<?php

namespace App\Http\Controllers\Academic\Teachers;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('academic.teachers.index')->with('teachers', $teachers);

    }
}
