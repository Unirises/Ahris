<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', 'HomeController@index');

Route::get('/blogs', function () {
    return view('blogs');
});

Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/sales', 'UserController@userSales')->name('user-sales');
Route::get('/purchases', 'UserController@userPurchases')->name('user-purchases');
Route::get('/accounting', 'UserController@userAccounting')->name('user-accounting');
Route::get('/reports', 'UserController@userContacts')->name('user-reporting');
Route::get('/contacts', 'UserController@userContacts')->name('user-contacts');
Route::get('/taxes', 'UserController@userTaxes')->name('user-taxes');
Route::get('/settings', 'UserController@userSettings')->name('user-settings');
Route::get('/user/personal-settings', 'UserController@userPersonalSettings')->name('user-personal-settings');
Route::get('/user/company', 'UserController@companyDashboard')->name('user-company');
Route::get('/user/company/organization-settings', 'UserController@companyOrganizationSettings')->name('user-organization-settings');
Route::get('/user/company/charts-of-accounts', 'UserController@companyChartsOfAccounts')->name('user-charts');
Route::get('/user/company/record-customer', 'UserController@companyRecordCustomer')->name('user-record-customer');
Route::get('/user/company/record-product-services', 'UserController@companyRecordProductServices')->name('user-record-product-services');
Route::get('/user/company/record-suppliers', 'UserController@companyRecordSuppliers')->name('user-record-suppliers');
Route::get('/user/company/tax-rate', 'UserController@companyTaxRate')->name('user-tax-rate');
Route::get('/user/company/record-users', 'UserController@companyRecordUsers')->name('user-record-users');

//POST
Route::get('/test', 'UserController@companyTest')->name('user-test');
Route::get('/user/company/{companyID}', 'UserController@logCompany')->name('login-company');

Route::post('/user/update/profile', 'UserController@update')->name('user-profile');
Route::post('/contacts/insert', 'UserController@insertContacts')->name('user-insert-contacts');
Route::post('/user/create/company', 'UserController@createCompany')->name('user-create-company');


Route::get('/logout', 'UserController@logout')->name('user-logout');
// Route::get('/logout', 'UserController@companyRecordProductServices')->name('user');




//Admin Routes
Route::get('/admin/home', 'AdminController@index')->name('admin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin-logout');
// Route::get('/admin-dashboard/home',  [AdminController::class,'adminDashboard'])->name('admin');
Route::get('/admin/ar-admin-profile', [AdminController::class,'adminProfile'])->name('admin-profile');
Route::get('/admin/ar-analytics', [AdminController::class,'adminAnalytics'])->name('admin-analytics');
Route::get('/admin/ar-crashlogs-report', [AdminController::class,'adminCrashLogs'])->name('admin-crashlogs-report');
Route::get('/admin/ar-transaction-overview', [AdminController::class,'adminOverview'])->name('admin-transaction-overview');
Route::get('/admin/ar-user-authentication', [AdminController::class,'adminUserAuth'])->name('admin-user-authentication');
Route::get('/admin/ar-user-control', [AdminController::class,'adminUserControl'])->name('admin-user-control');
Route::get('/admin/ar-web-monitoring', [AdminController::class,'adminMonitoring'])->name('admin-web-monitoring');
Route::get('/admin/ar-web-updates', [AdminController::class,'adminWebUpdates'])->name('admin-web-updates');
// Route::get('/testlogin', function () {
//     return view('login-sample');
// });

// Auth::routes();

// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::resource('/users', 'UsersController', ['except' => ['show','create','store']]);
// });
