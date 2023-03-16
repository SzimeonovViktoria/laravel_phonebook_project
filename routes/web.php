<?php

    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;

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

    Route::get( '/', [UserController::class, 'index'] )->name( 'user.index' );
    Route::get( '/add', function(){ return view( "add" ); } )->name( 'user.add' );
    Route::post( 'added-new', [UserController::class, 'store'] )->middleware( 'guest' );
