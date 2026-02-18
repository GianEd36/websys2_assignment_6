<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Problem No.1 routing
Route::get('/student/{id}/{name?}', function ($id,$name = 'Guest') {
    return view('student_profile', [
        'studentId' => $id, 
        'studentName' => $name
    ]);
});
//Problem No. 2 routing
Route::get('/course/{course}/{year?}', function ($course,$year = '1') {
    return view('course_enrollment', [
        'courseName' => $course, 
        'yearLevel' => $year
    ]);
});
//Problem No. 3 routing
Route::get('/ojt/{companyName}/{city}/{allowance?}', function ($companyName,$city,$allowance = 'No') {
    return view('ojt_information', [
        'companyName' => $companyName, 
        'city' => $city,
        'allowance' => $allowance
    ]);
});
//Problem No. 4 routing
Route::get('/event/{workshop}/{participant}/{year?}', function ($workshopName,$participantName,$yearLevel = '1') {
    return view('event_registration', [
        'workshop' => $workshopName, 
        'participant' => $participantName,
        'year' => $yearLevel
    ]);
});