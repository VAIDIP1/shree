<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SystemsettingController;
use App\Http\Controllers\UserController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

// Admin Authentication Routes
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register/post', [AuthController::class, 'store'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/post-admin-login', [AuthController::class, 'postAdminLogin'])->name('admin.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/validate-email', [AuthController::class, 'validateEmail'])->name('validate-email');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');


    // User Management Routes
    Route::get('admin/all-users', [UserController::class, 'allUsers'])->name('all-users');
});

$admin_url = 'admin/';

//CRUD modules
$crud_module_names = array(

    //Users & Role Management
    'permissions' => PermissionController::class,
    'roles' => RoleController::class,
    'users' => UserController::class,
    
    //Settings
    'systemsettings' => SystemsettingController::class,

);

if (!empty($crud_module_names)) {
    foreach ($crud_module_names as $crud_module_key => $crud_module_value) {

        Route::group(['middleware' => ['auth', 'prevent-back-history']], function () use ($crud_module_key, $crud_module_value, $admin_url) {
            Route::resource($admin_url . $crud_module_key, $crud_module_value);
        });
    }
}

//Import
$import_module_names = array(
    // 'schools.import' => \App\Http\Controllers\SchoolController::class,
);

if (!empty($import_module_names)) {
    foreach ($import_module_names as $import_module_key => $import_module_value) {

        Route::get($import_module_key, [$import_module_value, 'importExportView']);
        Route::post($import_module_key, [$import_module_value, 'import'])->name('import');
    }
}

//Datatable data
$module_names = array(

    //Users & Role Management
    'allpermissions' => PermissionController::class,
    'allroles' => RoleController::class,

    //Settings
    'allsystemsettings' => SystemsettingController::class,

);
if (!empty($module_names)) {
    foreach ($module_names as $module_key => $module_value) {
        Route::get($module_key, [$module_value, $module_key]);
    }
}

//Delete data
$delete_module_names = array(

    //Users & Role Management
    'permissions' => \App\Http\Controllers\PermissionController::class,
    'users' => UserController::class,

    //Settings
    'systemsettings' => \App\Http\Controllers\SystemsettingController::class,

);

if (!empty($delete_module_names)) {
    foreach ($delete_module_names as $delete_module_key => $delete_module_value) {
        Route::get('admin/' . $delete_module_key . '/delete/{id}', [$delete_module_value, 'destroy'])->name($delete_module_key . '.destroy');
    }
}