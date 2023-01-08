<?php

use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SpecialtyStudentsController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

    Route::get('/', function () {
        return view('frontEndWebsite.index');
    });
    // Route::get('/home', function () {
    //     return view('frontEndWebsite.index');
    // });
    Route::get('/about', function () {
        return view('frontEndWebsite.about');
    });
    Route::get('/contact', function () {
        return view('frontEndWebsite.contact');
    });
    Route::get('/project', function () {
        return view('frontEndWebsite.project');
    });
    Route::get('/programming-acadmic', function () {
        return view('frontEndWebsite.programming-acadmic');
    });
    Route::get('/soon', function () {
        return view('frontEndWebsite.soon');
    });



//Route Table Communication
Route::get('/communication', [CommunicationController::class, "index"])->middleware(['auth', 'verified']);
Route::get('/showcommunication/{id}', [CommunicationController::class, "show"])->middleware(['auth', 'verified'])->name('show_C');
Route::get('/deletecommunication/{id}', [CommunicationController::class, "destroy"])->middleware(['auth', 'verified']);
Route::get('/addcommunication', [CommunicationController::class, "create"])->middleware(['auth', 'verified']);
Route::post('/storecommunication', [CommunicationController::class, "store"]);
Route::get('/editcommunication/{id}', [CommunicationController::class, "edit"])->middleware(['auth', 'verified']);
Route::post('/updateCommunication', [CommunicationController::class, "update"])->middleware(['auth', 'verified']);

//Route Table Employees
Route::get('/employees', [EmployeesController::class, "index"])->middleware(['auth', 'verified']);
Route::get('/showemployees/{id}', [EmployeesController::class, "show"])->middleware(['auth', 'verified'])->name('show_C');
Route::get('/deleteemployees/{id}', [EmployeesController::class, "destroy"])->middleware(['auth', 'verified']);
Route::get('/addemployees', [EmployeesController::class, "create"])->middleware(['auth', 'verified']);
Route::post('/storeemployees', [EmployeesController::class, "store"])->middleware(['auth', 'verified']);
Route::get('/editemployees/{id}', [EmployeesController::class, "edit"])->middleware(['auth', 'verified']);
Route::post('/updateemployees', [EmployeesController::class, "update"])->middleware(['auth', 'verified']);

//Route Table Rooms
Route::get('/rooms', [RoomsController::class, "index"])->middleware(['auth', 'verified']);
Route::get('/showrooms/{id}', [RoomsController::class, "show"])->middleware(['auth', 'verified'])->name('show_C');
Route::get('/deleterooms/{id}', [RoomsController::class, "destroy"])->middleware(['auth', 'verified']);
Route::get('/addrooms', [RoomsController::class, "create"])->middleware(['auth', 'verified']);
Route::post('/storerooms', [RoomsController::class, "store"])->middleware(['auth', 'verified']);
Route::get('/editrooms/{id}', [RoomsController::class, "edit"])->middleware(['auth', 'verified']);
Route::post('/updaterooms', [RoomsController::class, "update"])->middleware(['auth', 'verified']);

//Route Table Courses
Route::get('/courses', [CoursesController::class, "index"])->middleware(['auth', 'verified']);
Route::get('/showcourses/{id}', [CoursesController::class, "show"])->middleware(['auth', 'verified'])->name('show_C');
Route::get('/deletecourses/{id}', [CoursesController::class, "destroy"])->middleware(['auth', 'verified']);
Route::get('/addcourses', [CoursesController::class, "create"])->middleware(['auth', 'verified']);
Route::post('/storecourses', [CoursesController::class, "store"])->middleware(['auth', 'verified']);
Route::get('/editcourses/{id}', [CoursesController::class, "edit"])->middleware(['auth', 'verified']);
Route::post('/updatecourses', [CoursesController::class, "update"])->middleware(['auth', 'verified']);

//Route Table Students
Route::get('/students', [StudentsController::class, "index"])->middleware(['auth', 'verified']);
Route::get('/showstudents/{id}', [StudentsController::class, "show"])->middleware(['auth', 'verified'])->name('show_C');
Route::get('/deletestudents/{id}', [StudentsController::class, "destroy"])->middleware(['auth', 'verified']);
Route::get('/addstudents', [StudentsController::class, "create"])->middleware(['auth', 'verified']);
Route::post('/storestudents', [StudentsController::class, "store"])->middleware(['auth', 'verified']);
Route::get('/editstudents/{id}', [StudentsController::class, "edit"])->middleware(['auth', 'verified']);
Route::post('/updatestudent', [StudentsController::class, "update"])->middleware(['auth', 'verified']);

//Route Table Services
Route::get('/Services', [ServicesController::class, "index"])->middleware(['auth', 'verified']);
Route::get('/showservices/{id}', [ServicesController::class, "show"])->middleware(['auth', 'verified'])->name('show_C');
Route::get('/deleteservices/{id}', [ServicesController::class, "destroy"])->middleware(['auth', 'verified']);
Route::get('/addservice', [ServicesController::class, "create"])->middleware(['auth', 'verified']);
Route::post('/storeservice', [ServicesController::class, "store"])->middleware(['auth', 'verified']);
Route::get('/editservice/{id}', [ServicesController::class, "edit"])->middleware(['auth', 'verified']);
Route::post('/updateservice', [ServicesController::class, "update"])->middleware(['auth', 'verified']);

//Route Table Specialty Students
Route::get('/specialty_students', [SpecialtyStudentsController::class, "index"])->middleware(['auth', 'verified']);
Route::get('/showspecialty/{id}', [SpecialtyStudentsController::class, "show"])->middleware(['auth', 'verified'])->name('show_C');
Route::get('/deletespecialty/{id}', [SpecialtyStudentsController::class, "destroy"])->middleware(['auth', 'verified']);
Route::get('/addspecialty', [SpecialtyStudentsController::class, "create"])->middleware(['auth', 'verified']);
Route::post('/storespecialty', [SpecialtyStudentsController::class, "store"])->middleware(['auth', 'verified']);
Route::get('/editspecialty/{id}', [SpecialtyStudentsController::class, "edit"])->middleware(['auth', 'verified']);
Route::post('/updatespecialty', [SpecialtyStudentsController::class, "update"])->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
