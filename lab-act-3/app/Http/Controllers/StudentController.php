<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function register(Request $request)
    {
        $formData = $request->except('_token');
    
        $userData = [
            'first_name' => $formData['first_name'] ?? null,
            'last_name' => $formData['last_name'] ?? null,
            'studentNumber' => $formData['studentNumber'] ?? null,
            'course' => $formData['course'] ?? null,
            'gender' => $formData['gender'] ?? null,
            'birthday' => $formData['birthday'] ?? null,
            'email' => $formData['email'] ?? null,
            'contact' => $formData['contact'] ?? null,
            'additional_info' => $formData['additional_info'] ?? null,
        ];
    
        // Insert the data into the database
        Student::create($userData);
    
        // Pass the form data to the view
        return view('display', [
            'egFirstName' => $userData['first_name'],
            'egLastName' => $userData['last_name'],
            'egStudentNumber' => $userData['studentNumber'],
            'egCourse' => $userData['course'],
            'egGender' => $userData['gender'],
            'egBirthday' => $userData['birthday'],
            'egEmail' => $userData['email'],
            'egContact' => $userData['contact'],
            'egAdditionalInfo' => $userData['additional_info'],
        ]);
    }
}
