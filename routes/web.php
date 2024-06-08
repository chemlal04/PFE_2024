<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Permission;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/partner', function () {
    return view('welcomePartner');
});

Route::get('/home', [App\Http\Controllers\UserController::class, 'home_dash'])->name('components.dashboard_components.admin_vol.home');
Route::get('/discovery', [App\Http\Controllers\UserController::class, 'discovery_dash'])->name('components.dashboard_components.admin_vol.discovery');
Route::get('/community', [App\Http\Controllers\UserController::class, 'community_dash'])->name('components.dashboard_components.admin_vol.community');
Route::get('/coming_soon', [App\Http\Controllers\UserController::class, 'coming_soon_dash'])->name('components.dashboard_components.admin_vol.coming_soon');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'password.confirm',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); 
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'password.confirm',
])->group(function () {
    Route::get('/billing', function () {
        return view('billing');
    })->name('billing');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'password.confirm',
])->group(function () {
   Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'password.confirm',
])->group(function () {
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
   
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

   Route::resource('users', App\Http\Controllers\UserController::class);
   Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);
  
});
});