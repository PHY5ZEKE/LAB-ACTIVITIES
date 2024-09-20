<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function register(Request $request)
    {
        $formData = $request->except('_token');

        $egFirstName = $formData['first-name'] ?? null;
        $egLastName = $formData['last-name'] ?? null;
        $egStudentNumber = $formData['studentNumber'] ?? null;
        $egCourse = $formData['course'] ?? null;
        $egGender = $formData['gender'] ?? null;
        $egBirthday = $formData['birthday'] ?? null;
        $egEmail = $formData['email'] ?? null;
        $egContact = $formData['contact'] ?? null;
        $egAdditionalInfo = $formData['additional-info'] ?? null;

        return view('display', compact('egFirstName', 'egLastName', 'egStudentNumber', 'egCourse', 'egGender', 'egBirthday', 'egEmail', 'egContact', 'egAdditionalInfo'));
    }
}


