<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Models\Registration;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\RegistrationsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ContactController;

Route::get('/', [AdminController::class, 'courseSummary'])->name('home');


Route::get('/register', [RegistrationController::class, 'form'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');
Route::get('/registrations/create', [RegistrationController::class, 'create'])->name('registrations.create');

Route::get('/thank', function () {
    return view('thank', [
        'name' => request('name'),
        'course' => request('course'),
        'phone' => request('phone')
    ]);
})->name('thank');




Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/table', [AdminController::class, 'table'])->name('admin.table');


Route::get('/export-registrations', [ExportController::class, 'export'])->name('export.registrations');



Route::delete('/admin/dashboard/registrations/{id}', [AdminController::class, 'destroy'])->name('admin.dashboard.destroy');




Route::get('/index', function () {
    return view('index');
})->name('index');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/admin/contact', [AdminController::class, 'index'])->name('admin.contacttable');



