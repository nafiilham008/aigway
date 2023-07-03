<?php

use App\Http\Controllers\SearchController;
use App\Http\Livewire\Auth\Forgot\Confirmation;
use App\Http\Livewire\Auth\Forgot\Index as ForgotIndex;
use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard\Banner\Create as BannerCreate;
use App\Http\Livewire\Dashboard\Banner\Index as BannerIndex;
use App\Http\Livewire\Dashboard\Category\Index as CategoryIndex;
use App\Http\Livewire\Dashboard\Product\Create;
use App\Http\Livewire\Dashboard\Product\Detail;
use App\Http\Livewire\Dashboard\Product\Index as ProductIndex;
use App\Http\Livewire\Dashboard\Reseller\Detail as ResellerDetail;
use App\Http\Livewire\Dashboard\Reseller\Index as ResellerIndex;
use App\Http\Livewire\Dashboard\Setting\Index as SettingIndex;
use App\Http\Livewire\Dashboard\Testimony\Index as TestimonyIndex;
use App\Http\Livewire\Dashboard\Testimony\Create as TestimonyCreate;
use App\Http\Livewire\Front\About\Index as AboutIndex;
use App\Http\Livewire\Front\Katalog\Detail as KatalogDetail;
use App\Http\Livewire\Front\Katalog\Index as KatalogIndex;
use App\Http\Livewire\Front\Landing\Index as LandingIndex;
use App\Http\Livewire\Front\Test\Index as TestIndex;
use App\Http\Livewire\Front\Testimony\Index as FrontTestimonyIndex;
use App\Http\Livewire\Maps\Index as MapsIndex;

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

// Dashboard
Route::get('/', LandingIndex::class)->name('index');

// Temp Analytics
Route::get('/test', TestIndex::class)->name('test');

// Katalog
Route::get('/katalog', KatalogIndex::class)->name('index.katalog');
Route::get('/detail/{slug}', KatalogDetail::class)->name('index.katalog.detail');

// About
Route::get('/tentang', AboutIndex::class)->name('index.about');

Route::get('/testimoni', FrontTestimonyIndex::class)->name('index.testimony');

Route::get('/search', [SearchController::class, 'search'])->name('index.search');




Route::get('/maps', MapsIndex::class)->name('index.maps');







Route::get('/login', Login::class)->middleware('guest')->name('login');
Route::get('/register', Register::class)->middleware('guest')->name('register');
Route::post('/register', [Register::class, 'register'])->middleware('guest');
Route::get('/forgot', ForgotIndex::class)->middleware('guest')->name('forgot');
Route::get('/confirmation/{token?}', Confirmation::class)->middleware('guest')->name('confirmation');


Route::middleware(['auth', 'web'])->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', Index::class)->name('dashboard.index');

        // Route::get('/employees/{id}/history', [EmployeeController::class, 'getEmployeeHistory'])->name('employees.history');
        // Route::post('/employees/{id}/history', [EmployeeHistoryController::class, 'store'])->name('employees.history.store');    
        // Route::get('/employees/{employeeId}/history/{educationId}/edit', [EmployeeHistoryController::class, 'edit'])->name('employees.history.edit');
        // Route::put('/employees/{id}/history/{education_id}', [EmployeeHistoryController::class, 'update'])->name('employees.educations.update');
        // Route::post('/employees/{id}/history/delete', [EmployeeHistoryController::class, 'destroy'])->name('employees.history.destroy');


        // Product
        Route::get('products', ProductIndex::class)->name('dashboard.product.index')->middleware('permission:product view');
        Route::get('products/create', Create::class)->name('dashboard.product.create')->middleware('permission:product create');
        Route::get('products/{productId?}/edit', Create::class)->name('dashboard.product.edit')->middleware('permission:product edit, product delete');
        Route::get('products/{productId?}/detail', Detail::class)->name('dashboard.product.detail')->middleware('permission:product view');

        // Category
        Route::get('category', CategoryIndex::class)->name('dashboard.category.index')->middleware('permission:category view');

        // Testimony
        Route::get('testimony', TestimonyIndex::class)->name('dashboard.testimony.index')->middleware('permission:testimony view');
        Route::get('testimony/create', TestimonyCreate::class)->name('dashboard.testimony.create')->middleware('permission:testimony create');
        Route::get('testimony/{testimonyId?}/edit', TestimonyCreate::class)->name('dashboard.testimony.edit')->middleware('permission:testimony edit, testimony delete');


        Route::get('banners', BannerIndex::class)->name('dashboard.banner.index')->middleware('permission:banner view');
        Route::get('banners/create', BannerCreate::class)->name('dashboard.banner.create')->middleware('permission:banner create');
        Route::get('banners/{bannerId?}/edit', BannerCreate::class)->name('dashboard.banner.edit')->middleware('permission:banner edit, banner delete');

        // Settings
        Route::get('resellers', ResellerIndex::class)->name('dashboard.reseller.index')->middleware('permission:reseller view');
        Route::get('resellers/detail/{resellerId?}', ResellerDetail::class)->name('dashboard.reseller.detail')->middleware('permission:reseller view');

        // Admin Setting
        Route::get('settings', SettingIndex::class)->name('dashboard.setting.index')->middleware('permission:setting view');

    });
});
