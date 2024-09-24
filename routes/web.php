<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomePageController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Analytics\AnalyticsController;
use App\Http\Controllers\Post\CatergoryController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Consultation\ConsultationController;

Route::get('/', [HomePageController::class, 'index'])->name('homepage');

Route::get('/home', function () {
    return view('dashboard.main');
});

	// Авторизирация
	Route::get('/login', [AuthController::class, 'index'])->name('login');
	Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
	Route::get('/register', [RegistrationController::class, 'show'])->name('registration');
	Route::post('/register', [RegistrationController::class, 'register'])->name('register.post');
	Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
	
	// Статьи
	Route::get('/articles', [PostController::class, 'list'])->name('articles.list');
	Route::get('/article/{id}', [PostController::class, 'show'])->name('articles.item');
	Route::get('/category/{id}', [CatergoryController::class, 'show'])->name('category.item');
	
	// Консультации
	Route::get('/consultation', [ConsultationController::class, 'index'])->name('consult.list');
	Route::get('/consultation/comment', [ConsultationController::class, 'form'])->name('consult.form');
	Route::get('/consultation/detail/{slug}', [ConsultationController::class, 'consultation'])->name('consultation.item');
	Route::post('/consultation/post', [ConsultationController::class, 'create'])->name('consult.create');
	
	// Оплата консультаций
	//Route::get('/payment/consultation/{id}', [PaymentController::class, 'show'])->name('payment.consultation');
	
	
	// Профиль
	Route::get('/profile/{slug}', [\App\Http\Controllers\User\UserController::class, 'show'])->name('user.profile.item');
	
	// Чат
	Route::post('/set-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'setCookie'])->name('set-cookie');
	Route::get('/get-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'getCookie'])->name('get-cookie');
	Route::post('/delete-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'removeCookie'])->name('delete-cookie');
	
Route::middleware(['guest'])->group(function () {
	Route::get('/chat', [\App\Http\Controllers\Chat\ChatController::class, 'endPoint']);
});

// Route::middleware(['auth', 'access'])->group(function () { 	 });



    Route::get('/dashboard', function () {
		return view('dashboard.main');})->name('dashboard.main');
	
	// Статьи
	Route::get('/dashboard/article', [PostController::class, 'index'])->name('dashboard.article');
	Route::get('/dashboard/article/{id}/edit', [PostController::class, 'edit'])->name('dashboard.article.edit');
	Route::post('/dashboard/article/{id}', [PostController::class, 'update'])->name('dashboard.article.update');
	Route::get('/dashboard/article/add-article', [PostController::class, 'store'])->name('dashboard.article.add-article');
	Route::post('/article/create', [PostController::class, 'create'])->name('dashboard.article.create-article');
	Route::get('/article/delete/{id}', [PostController::class, 'destroy'])->name('dashboard.article.destroy');
	
	// Аналитика: статьи
	Route::get('/dashboard/analytics/articles/', [AnalyticsController::class, 'index'])->name('dashboard.analytics');
	Route::get('/dashboard/dashboard/analytics/articles/{id}', [AnalyticsController::class, 'show'])->name('dashboard.analytics.specialization');
	Route::get('/dashboard/analytics/articles/{id}/edit', [AnalyticsController::class, 'edit'])->name('dashboard.analytics.specialization.edit');
	Route::get('/dashboard/analytics/article/{id}/phrase-create', [AnalyticsController::class, 'store'])->name('dashboard.analytics.phrase.add');
	Route::post('/analytics/create', [AnalyticsController::class, 'create'])->name('dashboard.analytics.phrase.create');
	Route::post('/analytics/phrase/{id}', [AnalyticsController::class, 'update'])->name('dashboard.analytics.phrase.update');
	Route::get('/analytics/delete/{id}', [AnalyticsController::class, 'destroy'])->name('dashboard.analytics.phrase.destroy');
	
	// Статьи: категории
	Route::get('/dashboard/categories', [CatergoryController::class, 'index'])->name('dashboard.categories');
	Route::get('/dashboard/article/add-category', function () {return view('dashboard.articles.add-category');})->name('dashboard.article.add-category');
	Route::post('/categories/create', [CatergoryController::class, 'create'])->name('dashboard.article.create-category');
	Route::get('/dashboard/category/{id}/edit', [CatergoryController::class, 'edit'])->name('dashboard.category.edit');
	Route::get('/category/delete/{id}', [CatergoryController::class, 'destroy'])->name('dashboard.category.destroy');
	Route::post('/dashboard/category/{id}', [CatergoryController::class, 'update'])->name('dashboard.category.update');

	// Профиль
	Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboard.user');
	Route::get('/dashboard/user/add-user', [UserController::class, 'store'])->name('dashboard.user.add-user');
	Route::get('/dashboard/user/{id}/edit', [UserController::class, 'edit'])->name('dashboard.user.edit');
	Route::post('/user/create', [UserController::class, 'create'])->name('dashboard.user.create-user');
	Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('dashboard.user.destroy');
	Route::post('/dashboard/user/{id}', [UserController::class, 'update'])->name('dashboard.user.update');
	
	// Консультации
	//Route::get('/dashboard/consultations', function() {return 'ok';})->middleware('can:show')->name('dashboard.consultations');
	Route::get('/dashboard/consultation', [ConsultationController::class, 'dashboard'])->name('dashboard.consultation');
	Route::get('/dashboard/consultation/{id}', [ConsultationController::class, 'show'])->name('dashboard.consultation.item');
	Route::get('/dashboard/consultation/{id}/edit', [ConsultationController::class, 'edit'])->name('dashboard.consultation.edit');
	Route::post('/dashboard/consultation/delete/{id}', [ConsultationController::class, 'destroy'])->name('dashboard.consultation.destroy');
	
	// Чат: оператор
	Route::get('/dashboard/chat', [\App\Http\Controllers\Chat\ChatController::class, 'index'])->name('dashboard.chat');



