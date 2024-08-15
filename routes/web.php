<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\CarAccidentController;

// $jobs = [
//     [
//         "id" => "1",
//         "Job Title" => "Data Analyst",
//         "Salary" => "$20,000"
//     ],
//     [
//         "id" => "2",
//         "Job Title" => "Graphics Designer",
//         "Salary" => "$50,000"
//     ],
//     [
//         "id" => "3",
//         "Job Title" => "IT support",
//         "Salary" => "$33,000"
//     ],
//     [
//         "id" => "4",
//         "Job Title" => "Customer Service Representative",
//         "Salary" => "$18,000"
//     ],

// ];

// Route::get('/', function () use($jobs) {
//     return view(
//         'home',
//         [
//             "jobs" => $jobs
//         ]
//     );
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/job/{id}', function ($id) use($jobs){
       
//         $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
//     return view('job', ['job' => $job]);
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/services', function () {
//     return view('services');
// });

Route::get('/car-accidents', [CarAccidentController::class, 'index']);
