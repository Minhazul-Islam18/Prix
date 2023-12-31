<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\ConfigurePage;
use App\Livewire\Backend\MenuManagement;
use App\Livewire\Backend\PageManagement;
use App\Livewire\Backend\RoleManagement;
use App\Livewire\Backend\UserManagement;
use App\Livewire\Backend\BackupManagement;
use App\Livewire\Backend\DashboardComponent;
use App\Livewire\Backend\GeneralSettings;
use App\Livewire\Backend\MenuBuilder;

Route::get('/dashboard', DashboardComponent::class)->name('dashboard');

//Role Management
Route::get('/roles', RoleManagement::class)->name('roles');
//User Management
Route::get('/users', UserManagement::class)->name('users');
//Backup Management
Route::get('/backups', BackupManagement::class)->name('backups');
//Page Management
Route::get('/frontend-pages', PageManagement::class)->name('frontend-pages');
//create page
Route::get('/create-page', ConfigurePage::class)->name('page.create');
//edit page
Route::get('/edit-page/{id}', ConfigurePage::class)->name('page.edit');
//upload image in page using editor
Route::post('/page-image', PageManagement::class . '@uploadImage')->name('page-image');
//Menu Management
Route::get('/menus', MenuManagement::class)->name('menus');
Route::group(['as' => 'menu.', 'prefix' => 'menus/{id}/'], function () {
    //menu bulder
    Route::get('builder', MenuBuilder::class)->name('builder');
    //ordering menu item
    Route::post('/reorder', MenuBuilder::class . '@updateOrder')->name('reorder-menu');
});
Route::group(['as' => 'settings.', 'prefix' => 'settings'], function () {
    //settings
    Route::get('/general', GeneralSettings::class)->name('general');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
