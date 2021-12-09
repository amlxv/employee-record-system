<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::resource('/employee', EmployeeController::class)->middleware(['auth']);

Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');


Route::get('/symlinks', function () {
    if (!is_dir('../public/storage')) {
        Artisan::call('storage:link');
        echo "Successfully created!";
    } else {
        return redirect()->route('employee.index');
    }
});

require __DIR__ . '/auth.php';