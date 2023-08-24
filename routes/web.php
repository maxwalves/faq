<?php

use App\Http\Controllers\SistemaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FaqController;
use App\Models\Faq;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //$faqs = Faq::all();
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();
        return view('dashboard', ['user'=> $user]);
    })->name('dashboard');
});


   // ROTAS PARA ADM USERS
   Route::get('/users/users', [UsersController::class, 'users'])->middleware('auth');
   Route::get('/users/create', [UsersController::class, 'create'])->middleware('auth');
   Route::get('/users/{id}', [UsersController::class, 'show'])->middleware('auth');
   Route::delete('/users/{id}', [UsersController::class, 'destroy'])->middleware('auth');
   Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->middleware('auth');

   Route::get('/users/editPerfil/{id}', [UsersController::class, 'editPerfil'])->middleware('auth');
   Route::get('/users/editPerfil/{id}/{ordem}', [UsersController::class, 'updatePerfil'])->middleware('auth');

   Route::put('/users/update/{id}', [UsersController::class, 'update'])->middleware('auth');
   Route::post('/users', [UsersController::class,'store'])->middleware('auth');
   Route::get('/sistema', [SistemaController::class,'sistema'])->middleware('auth');


   Route::get('/faqs', [FaqController::class, 'index'])->middleware('auth');
   Route::get('/faqs/create', [FaqController::class, 'create'])->middleware('auth');
   Route::post('/faqs', [FaqController::class, 'store'])->middleware('auth');
   Route::get('/faqs/{id}', [FaqController::class, 'show'])->middleware('auth');
   Route::get('/faqs/edit/{id}', [FaqController::class, 'edit'])->middleware('auth');
   Route::put('/faqs/{id}', [FaqController::class, 'update'])->middleware('auth');
   Route::put('/updateFaq/{id}', [FaqController::class, 'updateFaq'])->middleware('auth');
   Route::delete('/faqs/{id}', [FaqController::class, 'destroy'])->middleware('auth');