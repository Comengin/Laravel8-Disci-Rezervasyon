<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProccesController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
/*

Route::redirect('/anasayfa', '/home')->name('anasayfa');
*/
Route::get('/home2', function () {
    return view('welcome');
});
//controllere ihtiyac yoksa

Route::get('/services', function () {
    return view('layouts.services');
});


/*
Route::get('/about', function () {
    return view('layouts.about');
});*/
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/home',[HomeController::class,'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/categories',[HomeController::class,'categories'])->name('categories');
Route::post('/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('/tedavi/{id}',[HomeController::class,'tedavi'])->name('tedavi');
Route::get('/categoryservices/{id}',[HomeController::class,'categoryservices'])->name('categoryservices');
Route::get('/tedavilist/{search}',[HomeController::class,'tedavilist'])->name('tedavilist');
Route::post('/gettedavi',[HomeController::class,'gettedavi'])->name('gettedavi');
Route::post('/randevual',[HomeController::class,'randevual'])->name('randevual');
/*
Route::get('/test/{id}', [HomeController::class, 'test'])->where('id', '[0-9]+');
string icin
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
*/
//User
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('user/profile',[UserController::class,'index'])->name('userprofile');
    #Randevu
    Route::prefix('randevu')->group(function (){
        Route::get('/',[RandevuController::class, 'index'])->name('user_randevu');
        Route::get('/yenirandevual',[RandevuController::class, 'yenirandevual'])->name('yenirandevual');
        Route::post('create', [RandevuController::class , 'create'])->name('user_randevu_add');
        Route::post('store', [RandevuController::class , 'store'])->name('user_randevu_store');
        Route::get('edit/{id}',[RandevuController::class, 'edit'])->name('user_randevu_edit');
        Route::post('update/{id}',[RandevuController::class, 'update'])->name('user_randevu_update');
        Route::get('deletemyrandevu/{id}',[RandevuController::class, 'deletemyrandevu'])->name('user_randevu_delete');
        Route::get('show',[RandevuController::class, 'show'])->name('user_randevu_show');

    });
    #Procces
    Route::prefix('procces')->group(function (){
        Route::get('/',[ProccesController::class, 'index'])->name('user_procces');
        Route::post('create', [ProccesController::class , 'create'])->name('user_procces_add');
        Route::post('store', [ProccesController::class , 'store'])->name('user_procces_store');
        Route::get('edit/{id}',[ProccesController::class, 'edit'])->name('user_procces_edit');
        Route::post('update/{id}',[ProccesController::class, 'update'])->name('user_procces_update');
        Route::get('delete/{id}',[ProccesController::class, 'destroy'])->name('user_procces_delete');
        Route::get('show',[ProccesController::class, 'show'])->name('user_procces_show');

    });
});
//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    #admin role
    Route::middleware('admin')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
        //Category
        Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

        #Tedavi
        Route::prefix('tedavi')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\TedaviController::class, 'index'])->name('admin_tedavi');
            Route::get('create',[\App\Http\Controllers\Admin\TedaviController::class, 'create'])->name('admin_tedavi_add');
            Route::post('store',[\App\Http\Controllers\Admin\TedaviController::class, 'store'])->name('admin_tedavi_store');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\TedaviController::class, 'edit'])->name('admin_tedavi_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\TedaviController::class, 'update'])->name('admin_tedavi_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\TedaviController::class, 'destroy'])->name('admin_tedavi_delete');
            Route::get('show',[\App\Http\Controllers\Admin\TedaviController::class, 'show'])->name('admin_tedavi_show');

        });
        #Message
        Route::prefix('message')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show',[\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');

        });
        #Tedavi image gallery
        Route::prefix('image')->group(function () {
            Route::get('create/{tedavi_id}', [\App\Http\Controllers\Admin\ImageController::class , 'create'])->name('admin_image_add');
            Route::post('store/{tedavi_id}', [\App\Http\Controllers\Admin\ImageController::class , 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{tedavi_id}', [\App\Http\Controllers\Admin\ImageController::class , 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class , 'show'])->name('admin_image_show');
        });
        #Setting
        Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
        #Faq
        Route::prefix('faq')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [\App\Http\Controllers\Admin\FaqController::class , 'create'])->name('admin_faq_add');
            Route::post('store', [\App\Http\Controllers\Admin\FaqController::class , 'store'])->name('admin_faq_store');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show',[\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');

        });
        #randevu
        Route::prefix('randevu')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\ProccesController::class, 'index'])->name('admin_randevu');
            Route::get('create', [\App\Http\Controllers\Admin\ProccesController::class , 'create'])->name('admin_randevu_add');
            Route::get('list/{status}', [\App\Http\Controllers\Admin\ProccesController::class , 'list'])->name('admin_randevu_list');
            Route::post('store', [\App\Http\Controllers\Admin\ProccesController::class , 'store'])->name('admin_randevu_store');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\ProccesController::class, 'edit'])->name('admin_randevu_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\ProccesController::class, 'update'])->name('admin_randevu_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\ProccesController::class, 'destroy'])->name('admin_randevu_delete');
            Route::get('show/{id}',[\App\Http\Controllers\Admin\ProccesController::class, 'show'])->name('admin_randevu_show');
        });
        #User
        Route::prefix('user')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('create', [\App\Http\Controllers\Admin\UserController::class , 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class , 'store'])->name('admin_user_store');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}',[\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}',[\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}',[\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}',[\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

        });
        //review
        Route::prefix('review')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });
    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('myprofile');
    Route::get('/myreview',[UserController::class,'myreview'])->name('myreview');
    Route::get('deletemyreview/{id}',[UserController::class, 'deletemyreview'])->name('user_review_delete');
});

Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class, 'logout'])->name('logout');
/*Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
