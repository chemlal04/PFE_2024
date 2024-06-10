<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Permission;
use App\Http\Controllers\VolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChambresController;

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','password.confirm'])->group(function () {
    Route::get('display_vol', [VolController::class, 'index'])->name('vols.index');
    Route::get('/display_vol_partner', [UserController::class, 'display_vol_partner'])->name('dash_partner');
    Route::put('/statusUpdate/{vol}', [VolController::class, 'statusUpdate'])->name('approval');
    Route::get('/display_vol', [UserController::class, 'display_vol'])->name('home');
    Route::get('create_flight', [VolController::class, 'create'])->name('vols.create');
    Route::post('flights_creating', [VolController::class, 'store'])->name('vols.store');
    Route::get('vols_edit/{vol}', [VolController::class, 'edit_vols'])->name('vols.edit');
    Route::put('vols/{vol}', [VolController::class, 'update'])->name('vols.update');
    Route::delete('vols/{vol}', [VolController::class, 'destroy'])->name('vols.destroy');
    Route::put('/statusUpdate/{id}', [VolController::class, 'statusUpdate'])->name('statusUpdate');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','password.confirm'])->group(function () {
    Route::get('display_chambre', [ChambresController::class, 'display_chambers'])->name('display_chambres');
    Route::get('/display_chambres_partner', [ChambresController::class, 'display_chambres_partner'])->name('dash_partner_chambres');
    Route::put('/statusUpdateChambre/{vol}', [ChambresController::class, 'statusUpdateChambre'])->name('approval');
    // Route::get('/display_vol', [UserController::class, 'display_vol'])->name('home');
    Route::get('create_chambres', [ChambresController::class, 'create'])->name('create');
    Route::post('chambres_creating', [ChambresController::class, 'store'])->name('chambres.store');
    Route::get('chambres_edit/{chambre}', [ChambresController::class, 'edit_vols'])->name('chambres.edit');
    Route::put('chambres/{chambre}', [ChambresController::class, 'update'])->name('chambres.update');
    Route::delete('chambres/{chambre}', [ChambresController::class, 'destroy'])->name('chambres.destroy');
    Route::put('/statusUpdateChambres/{id}', [ChambresController::class, 'statusUpdate'])->name('statusUpdateChambres');
    Route::get('/status', [VolController::class, 'approval'])->name('approval');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','password.confirm',])->group(function () {
    Route::put('/statusUpdate/{id}', [VolController::class, 'statusUpdate'])->name('statusUpdate');
    Route::get('/status_chambres', [VolController::class, 'approval'])->name('approval');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','password.confirm',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); 
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','password.confirm',])->group(function () {
    Route::get('/billing', function () {
        return view('billing');
    })->name('billing');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','password.confirm',])->group(function () {
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('vols_edit/{vol}', [VolController::class, 'edit_vols'])->name('edit');
Route::put('vols/{vol}', [VolController::class, 'update'])->name('vols.update');

Route::get('/partner', function () {
    return view('welcomepartner');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/home', [App\Http\Controllers\UserController::class, 'home_dash'])->name('components.dashboard_components.admin_vol.home');
Route::get('/discovery', [App\Http\Controllers\UserController::class, 'discovery_dash'])->name('components.dashboard_components.admin_vol.discovery');
Route::get('/community', [App\Http\Controllers\UserController::class, 'community_dash'])->name('components.dashboard_components.admin_vol.community');
Route::get('/coming_soon', [App\Http\Controllers\UserController::class, 'coming_soon_dash'])->name('components.dashboard_components.admin_vol.coming_soon');
