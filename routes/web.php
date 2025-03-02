<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use App\Models\Testmonial;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/** 
* Front Routes
*/
Route::name('front.')->controller(FrontController::class)->group(function () {
    
    Route::post('/subscriber/store','subscriberStore')->name('subscriber.store');
    Route::get('/', 'index')->name('index'); 
    route::get('/about', 'about')->name('about');
    route::get('/service', 'service')->name('service');
    route::get('/contact', 'contact')->name('contact');
});


// Admin Routes

Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->middleware([
    'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'
])->group(function () {
    
    Route::middleware('auth')->group(function () {
        // ====== HOME PAGE
        Route::view('/', 'admin.index')->name('index'); 
        
        // ====== SERVICES
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });

        // ====== FEATURES
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });

        // ====== MESSAGES
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
        });
        
        // ====== SUBSCRIBERS
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
        });

        // ====== TESMONIALS
        Route::controller(TestmonialController::class)->group(function () {
            Route::resource('testmonials', TestmonialController::class);
        });

        // ====== MEMBERS
        Route::controller( MemberController::class)->group(function () {
            Route::resource('members', MemberController::class);
        });   

        // ====== COMPANY
        Route::controller( CompanyController::class)->group(function () {
            Route::resource('companies', CompanyController::class);
        });

        // ====== SETTINGS
        Route::controller( SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class)->only(['index', 'update']);
        });

    
    });

    require __DIR__.'/auth.php';
});

