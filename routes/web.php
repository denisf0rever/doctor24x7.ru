<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomePageController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Analytics\AnalyticsController;
use App\Http\Controllers\Post\CatergoryController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserCategoryTextController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Consultation\ConsultationController;
use App\Http\Controllers\Consultation\ConsultationFormController;
use App\Http\Controllers\Consultation\DiscussionController;
use App\Http\Controllers\Consultation\ConsultationAnswerController;
use App\Http\Controllers\Consultation\ConsultationCategoryController;
use App\Http\Controllers\Consultation\SubCategoryController;
use App\Http\Controllers\Consultation\CategoryShowcaseController;
use App\Http\Controllers\Consultation\BookingController;
use App\Http\Controllers\Setting\User\UserSettingController;
use App\Http\Controllers\Reviews\ReviewsController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Tariff\TariffController;
use App\Http\Controllers\Chat\ChatController;

use App\Http\Controllers\Test\TestController;

// Тесты
Route::get('/test', [TestController::class, 'index']);

// Старые адреса, убрать через месяц
Route::get('/sitemap', function () {
    return response()->redirectTo('/page/sitemap', 301);
});


Route::get('/', [HomePageController::class, 'index'])->name('homepage');

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
	Route::get('/consultation/detail/{slug}', [ConsultationController::class, 'consultation'])->name('consultation.item');
	Route::post('/consultation/answer', [ConsultationAnswerController::class, 'createPublicAnswer'])->name('consultation.answer');
	Route::post('/consultation/answer/like/{id}', [ConsultationAnswerController::class, 'like'])->name('consultation.like');
	Route::post('/consultation/answer/dislike/{id}', [ConsultationAnswerController::class, 'dislike'])->name('consultation.dislike');
	Route::get('/consultation/online', [ConsultationAnswerController::class, 'online'])->name('consultation.online');
	
	// Консультации: Форма, Создание
	Route::get('/consultation/comment', [ConsultationFormController::class, 'form'])->name('consult.form');
	Route::post('/consultation/create', [ConsultationFormController::class, 'create'])->name('consultation.create');
	
	// Категории консультаций
	Route::get('/consultation/{categorySlug}', [ConsultationCategoryController::class, 'category'])->name('consultation.category');
	Route::get('/consultation/rubric/{categorySlug}/{subcategorySlug}', [ConsultationCategoryController::class, 'subcategory'])->name('consultation.subrubric');
		
	Route::get('/consultation/city/{city}', [ConsultationCategoryController::class, 'city'])->name('consultation.city');
	Route::get('/consultation/{categorySlug}/{city}', [ConsultationCategoryController::class, 'categoryCity'])->name('consultation.categorycity');
	
	// Оплата консультаций
	Route::get('/payment/consultation/{id}', [PaymentController::class, 'show'])->name('payment.consultation');
	Route::get('/payment/answer/{id}', [PaymentController::class, 'payAnswer'])->name('payment.answer');
	Route::post('/payment/consultation', [PaymentController::class, 'create'])->name('payment.consultation.create');
	Route::post('/payment/init', [PaymentController::class, 'init'])->name('payment.consultation.init');	
	
	// Профиль
	Route::get('/profile/{slug}', [\App\Http\Controllers\User\UserController::class, 'show'])->name('user.profile.item');
	
	// Чат
	Route::post('/set-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'setCookie'])->name('set-cookie');
	Route::get('/get-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'getCookie'])->name('get-cookie');
	Route::post('/delete-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'removeCookie'])->name('delete-cookie');
	
	Route::get('/chat/{id}', [\App\Http\Controllers\Chat\ChatController::class, 'show'])->name('chat.item');
	
	// Отзывы
	Route::get('/reviews/create', [ReviewsController::class, 'create'])->name('reviews.create');

	
	// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	// Перенести в дашбоард
	Route::post('/consultation/get-document/{id}', [ConsultationAnswerController::class, 'getDocument'])->name('consultation.get-document');
	Route::post('/consultation/lockAnswer', [ConsultationAnswerController::class, 'lockAnswer'])->name('consultation.block-answer');
	Route::post('/consultation/unlockAnswer', [ConsultationAnswerController::class, 'unlockAnswer'])->name('consultation.unlock-answer');
	Route::get('/consultation/answer/delete', [ConsultationAnswerController::class, 'destroy'])->name('consultation.destroy-answer');
	Route::post('/consultation/answer/top', [ConsultationAnswerController::class, 'top'])->name('consultation.top-answer');
	Route::post('/consultation/content/add', [ConsultationAnswerController::class, 'addContent'])->name('consultation.add-content');
	Route::get('/consultation/content/delete/{id}', [ConsultationAnswerController::class, 'destroyContent'])->name('consultation.destroy-content');

Route::middleware(['auth'])->group(function () { 	 
    Route::get('/dashboard', fn() => view('dashboard.main'))->name('dashboard.main');
	Route::get('/home', fn() => view('dashboard.main'));
	
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
	Route::get('/dashboard/article/categories', [CatergoryController::class, 'index'])->name('dashboard.categories');
	Route::get('/dashboard/article/add-category', function () {return view('dashboard.articles.add-category');})->name('dashboard.article.add-category');
	Route::post('/categories/create', [CatergoryController::class, 'create'])->name('dashboard.article.create-category');
	Route::get('/dashboard/category/{id}/edit', [CatergoryController::class, 'edit'])->name('dashboard.category.edit');
	Route::get('/category/delete/{id}', [CatergoryController::class, 'destroy'])->name('dashboard.category.destroy');
	Route::post('/dashboard/category/{id}', [CatergoryController::class, 'update'])->name('dashboard.category.update');

	// Профиль
	Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboard.user');
	Route::get('/dashboard/user/add-user', [UserController::class, 'store'])->name('dashboard.user.add-user');
	Route::get('/dashboard/setting', [UserSettingController::class, 'index'])->name('dashboard.setting.user');
	Route::post('/dashboard/setting/user', [UserSettingController::class, 'create'])->name('dashboard.setting.user.create');
	Route::post('/dashboard/setting/user/{id}', [UserSettingController::class, 'update'])->name('dashboard.setting.user.update');
	Route::get('/dashboard/user/{id}/edit', [UserController::class, 'edit'])->name('dashboard.user.edit');
	
	Route::get('/dashboard/user/find-user', [UserController::class, 'showForm'])->name('dashboard.user.finduser');
	Route::post('/dashboard/user/find', [UserController::class, 'getConsultationIds'])->name('dashboard.user.finduser.get');
	Route::get('/dashboard/user/categories', [UserCategoryTextController::class, 'index'])->name('dashboard.user.index');
	Route::get('/dashboard/user/categories/add-text', [UserCategoryTextController::class, 'form'])->name('dashboard.user.add-text-category');
	Route::get('/dashboard/user/categories/{id}', [UserCategoryTextController::class, 'show'])->name('dashboard.user.item');
	Route::get('/dashboard/user/categories/text/{id}/edit', [UserCategoryTextController::class, 'edit'])->name('dashboard.user.edit-user-text');
	Route::post('/dashboard/user/text-category', [UserCategoryTextController::class, 'create'])->name('dashboard.user.set-category-text');
	Route::post('/dashboard/user/text-category/{id}', [UserCategoryTextController::class, 'update'])->name('dashboard.user.update-category-text');
	Route::get('/dashboard/user/text-category/delete/{id}', [UserCategoryTextController::class, 'destroy'])->name('dashboard.user.destroy-category-text');
	
	
	Route::post('/user/create', [UserController::class, 'create'])->name('dashboard.user.create-user');
	Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('dashboard.user.destroy');
	Route::post('/dashboard/user/{id}', [UserController::class, 'update'])->name('dashboard.user.update');
	
	// Консультации
	Route::get('/dashboard/discussion', [DiscussionController::class, 'index'])->name('dashboard.consultation.discussion');
	
	Route::get('/dashboard/consultation', [ConsultationController::class, 'dashboard'])->name('dashboard.consultation');
	
	// Категории
	
	Route::get('/dashboard/consultation/categories', [ConsultationCategoryController::class, 'index'])->name('dashboard.consultation.categories');
	Route::get('/dashboard/consultation/subcategories', [SubCategoryController::class, 'index'])->name('dashboard.consultation.subcategories.index');
	Route::get('/dashboard/consultation/subcategory/{slug}', [SubCategoryController::class, 'subcategory'])->name('dashboard.consultation.subcategories.slug');
	Route::post('/dashboard/consultation/subcategory/{id}', [SubCategoryController::class, 'update'])->name('dashboard.consultation.subcategories.update');
	
	Route::get('/dashboard/consultation/categories/showcase/add-doctor', [ConsultationCategoryController::class, 'addDoctor'])->name('dashboard.consultation.categories.showcase.add-doctor');
	Route::post('/dashboard/consultation/categories/showcase', [ConsultationCategoryController::class, 'showcase'])->name('dashboard.consultation.categories.showcase');
	Route::delete('/dashboard/consultation/categories/showcase/destroy/{id}', [CategoryShowcaseController::class, 'destroy'])->name('dashboard.consultation.categories.showcase.destroy');
	
	Route::get('/dashboard/consultation/{id}', [ConsultationController::class, 'show'])->name('dashboard.consultation.item');
	Route::get('/dashboard/consultation/category/{id}', [ConsultationController::class, 'category'])->name('dashboard.consultation.category');
	Route::get('/dashboard/booking/{id}', [BookingController::class, 'show'])->name('dashboard.booking.list');
	Route::get('/dashboard/booking/destroy/{id}', [BookingController::class, 'destroy'])->name('dashboard.booking.destroy');
	Route::get('/dashboard/consultation/delete/{id}', [ConsultationController::class, 'destroy'])->name('dashboard.consultation.destroy');
	Route::get('/dashboard/consultation/edit/{id}', [ConsultationController::class, 'edit'])->name('dashboard.consultation.edit');
	Route::post('/dashboard/consultation/update/consultation/{id}', [ConsultationController::class, 'update'])->name('dashboard.consultation.update.consultation');
	
	Route::post('/dashboard/consultation/answer', [ConsultationAnswerController::class, 'create'])->name('dashboard.consultation.create-answer');
	Route::get('/dashboard/consultation/answer/{id}', [ConsultationAnswerController::class, 'show'])->name('dashboard.consultation.answer');
	Route::get('/dashboard/consultation/delete/answer/{id}', [ConsultationAnswerController::class, 'destroy'])->name('dashboard.consultation.destroy-answer');
	Route::get('/dashboard/consultation/edit/answer/{id}', [ConsultationAnswerController::class, 'edit'])->name('dashboard.consultation.edit-answer');
	Route::post('/dashboard/consultation/update/answer/{id}', [ConsultationAnswerController::class, 'update'])->name('dashboard.consultation.update.answer');
	Route::get('/dashboard/consultation/block/answer/{id}', [ConsultationAnswerController::class, 'block'])->name('dashboard.consultation.answer.block');
	
	// Тарифы 
	Route::get('/dashboard/tariff', [TariffController::class, 'index'])->name('dashboard.tariff.index');
	Route::get('/dashboard/tariff/{id}/edit', [TariffController::class, 'edit'])->name('dashboard.tariff.edit');
	Route::post('/dashboard/tariff/{id}', [TariffController::class, 'update'])->name('dashboard.tariff.update');
	Route::get('/dashboard/tariff/{id}/delete', [TariffController::class, 'destroy'])->name('dashboard.tariff.delete');
	
	// Платежи
	Route::get('/dashboard/payment', [PaymentController::class, 'index'])->name('dashboard.payment.index');
	Route::get('/dashboard/payment/{id}', [PaymentController::class, 'item'])->name('dashboard.payment.item');
	
	// Букинг
	Route::post('/dashboard/fetch/booking/{id}', [BookingController::class, 'makeRequest'])->name('dashboard.consultation.booking');

	// Чат: оператор
	Route::get('/dashboard/chat', [\App\Http\Controllers\Chat\ChatController::class, 'index'])->name('dashboard.chat');
});