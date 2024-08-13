<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ApplicantsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/project',[HomeController::class,'project'])->name('project');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/team',[HomeController::class,'team'])->name('team');

Route::get('/single/blog/{slug}',[HomeController::class,'singleBlog'])->name('single.blog');
Route::get('/category/wise/blog/{categoryId}',[HomeController::class,'categoryWiseBlog'])->name('category.wise.blog');
Route::get('/admission_eligibility',[HomeController::class,'admissionEligibility'])->name('admission_eligibility');
Route::post('/save_admission',[HomeController::class,'saveAdmission'])->name('save.admission');
Route::get('/architecture',[HomeController::class,'architecture'])->name('architecture');
Route::get('/electrical',[HomeController::class,'electrical'])->name('electrical');
Route::get('/computer',[HomeController::class,'computer'])->name('computer');
Route::get('/civil',[HomeController::class,'civil'])->name('civil');
Route::get('/tuition_fee',[HomeController::class,'tuitionFee'])->name('tuition_fee');
Route::get('/admission_process',[HomeController::class,'admissionProcess'])->name('admission_process');
Route::get('/scholarship',[HomeController::class,'scholarShip'])->name('scholarship');
Route::get('/pcist',[HomeController::class,'pcIst'])->name('pcist');
Route::get('/ecrcist',[HomeController::class,'ecrcIst'])->name('ecrcist');
Route::get('/library',[HomeController::class,'liBrary'])->name('library');
Route::get('/campus_life',[HomeController::class,'campusLife'])->name('campus_life');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add/category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::post('/new/category',[CategoryController::class,'saveCategory'])->name('new.category');
    Route::get('/manage/category',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::get('/edit/category/{id}',[CategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/update/category',[CategoryController::class,'updateCategory'])->name('update.category');
    Route::get('/delete/category/{id}',[CategoryController::class,'deleteCategory'])->name('delete.category');

    Route::resources(['blogs'=>BlogController::class]);
    Route::resources(['testimonials'=>TestimonialsController::class]);
    Route::resources(['teachers'=>TeachersController::class]);
    Route::get('/admission/applicants',[ApplicantsController::class,'admissionApplicants'])->name('admission.applicants');
    Route::get('/delete/applicants{id}',[ApplicantsController::class,'deleteApplicants'])->name('delete.applicants');



});
