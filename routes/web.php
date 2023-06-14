<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\Admin\FrontendAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Owner\ownerModuleController;
use App\Http\Controllers\Owner\ownerSettingController;
use App\Http\Controllers\Broker\brokerModuleController;
use App\Http\Controllers\MailController;

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

Auth::routes(['verify' => false]);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::post('verifymobile', [HomeController::class, 'verifymobile'])->name('verifymobile');

Route::get('display-user', [frontendController::class, 'display']);

Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::controller(frontendController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('about-us', 'aboutUs')->name('about-us');
    Route::get('contact-us', 'contactUs')->name('contact-us');
    Route::post('contact-us/save', 'contactSave')->name('contact-save');
    Route::get('privacy', 'privacy')->name('privacy');
    Route::get('terms-and-conditions', 'tandc')->name('tandc');
    Route::get('blogs', 'blogs')->name('blogs');
    Route::get('agents', 'agents')->name('agents');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('properties/{id?}', 'properties')->name('properties');
    Route::get('property/detail/{id}', 'propertydetail')->name('propertydetail');
});

Route::get('send-mail', [MailController::class, 'index']);

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
        Route::controller(UserAdminController::class)->group(function () {
            Route::get('/broker', 'broker')->name('admin.broker');
            Route::get('/owner', 'owner')->name('admin.owner');
            Route::get('/add', 'newuser')->name('admin.newuser');
            Route::get('/user', 'user')->name('admin.user');
            Route::get('/edit/{key}', 'edit')->name('admin.edit');
            Route::get('/destroy/{key}', 'destroy')->name('admin.destroy');
            Route::post('/update/name', 'update_name')->name('admin.update_name');
            Route::post('/update/email', 'update_email')->name('admin.update_email');
        Route::post('/update/password','update_password')->name('admin.update_pass');
        });
        Route::controller(FrontendAdminController::class)->group(function () {
            Route::get('/frontend/header/footer', 'headerfooter')->name('admin.headerfooter');
            Route::post('/primarymenu', 'primarymenu')->name('admin.primarymenu');
            Route::post('/footermenu', 'footermenu')->name('admin.footermenu');
            Route::post('/footerabout', 'footerabout')->name('admin.footerabout');
            Route::post('/footercontact', 'footercontact')->name('admin.footercontact');
            Route::post('/sociallinks', 'sociallinks')->name('admin.sociallinks');
            Route::post('/logochange', 'logochange')->name('admin.logochange');
            Route::get('/banner', 'banner')->name('admin.banner');
            Route::post('/banner/add', 'banneradd')->name('admin.banneradd');
            Route::get('/destroy/banner/{key}', 'destroybanner')->name('admin.destroybanner');
            Route::get('/frontend/about', 'aboutusedit')->name('admin.aboutusedit');
            Route::post('/sponser', 'sponser')->name('admin.sponser');
            Route::get('/destroy/sponser/{key}', 'destroysponser')->name('admin.destroysponser');
            Route::get('/blogs', 'adminblogs')->name('admin.blogs');
            Route::post('/blogs/add', 'addblog')->name('admin.addblog');
            Route::get('/blog/destroy/{key}', 'destroyblog')->name('admin.destroyblog');
            Route::get('/settings', 'setting')->name('admin.setting');
        });
    });
});

/*------------------------------------------
--------------------------------------------
All Broker Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:broker'])->group(function () {
    Route::group(['prefix' => 'broker'], function () {
        Route::get('/home', [HomeController::class, 'brokerHome'])->name('broker.home');
        Route::controller(brokerModuleController::class)->group(function () {
            Route::get('/properties/all', 'allProperties')->name('broker.allProperties');
            Route::get('/properties/add', 'addProperties')->name('broker.addProperties');
            Route::post('add-property', 'propertysave')->name('broker.propertysave');
            Route::get('/properties/edit/{id}', 'editProperties')->name('broker.editProperties');
            Route::post('/properties/update/{id}', 'propertyupdate')->name('broker.propertyupdate');
            Route::get('/settings', 'settings')->name('broker.settings');
            Route::post('/username/update', 'updateusername')->name('broker.updateusername');
            Route::post('/email/update', 'updateemail')->name('broker.updateemail');
            Route::post('/phone/update', 'updatenumber')->name('broker.updatenumber');
        });
    });
});

/*------------------------------------------
--------------------------------------------
All Owner Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:owner'])->group(function () {
    Route::group(['prefix' => 'owner'], function () {
        Route::get('/home', [HomeController::class, 'ownerHome'])->name('owner.home');
        Route::controller(ownerModuleController::class)->group(function () {
            Route::get('/properties/all', 'allProperties')->name('owner.allProperties');
            Route::get('/properties/add', 'addProperties')->name('owner.addProperties');
            Route::post('add-property', 'propertysave')->name('owner.propertysave');
            Route::get('/properties/edit/{id}', 'editProperties')->name('owner.editProperties');
            Route::post('/properties/update/{id}', 'propertyupdate')->name('owner.propertyupdate');
            Route::get('/settings', 'settings')->name('owner.settings');
            Route::post('/username/update', 'updateusername')->name('owner.updateusername');
            Route::post('/email/update', 'updateemail')->name('owner.updateemail');
            Route::post('/phone/update', 'updatenumber')->name('owner.updatenumber');
        });
    });
});
