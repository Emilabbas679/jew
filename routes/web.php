<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TranslateController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\OccasionController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DesignerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TestimonialController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::post('/favorite-product', [HomeController::class, 'productFavorite'])->name('productFavorite');
Route::get('/product/{product_id}', [HomeController::class, 'product'])->name('product');
Route::get('/lang/{locale}', [HomeController::class, 'locale'])->name('locale');

// Demo
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-view/{blog}', [HomeController::class, 'blogView'])->name('blog_detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/orders', [HomeController::class, 'orders']);
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/reviews', [HomeController::class, 'reviews']);
Route::get('/reviews-approved', [HomeController::class, 'reviewsApproved']);
Route::get('/product-reviews', [HomeController::class, 'productReviews']);
Route::get('/how-it-works', [HomeController::class, 'howItWorks']);
Route::get('/become-a-vendor', [HomeController::class, 'becomeVendor']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile/favorites', [ProfileController::class, 'favorites'])->name('profile.favorites');
    Route::post('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::match(['get', 'post'],'/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/add-to-cart', [ProfileController::class, 'addToCart'])->name('profile.addToCart');
    Route::get('/profile/cart', [ProfileController::class, 'cart'])->name('profile.cart');
    Route::post('/profile/cart/delete', [ProfileController::class, 'cartDelete'])->name('profile.cartDelete');


});



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['dashboard']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::prefix('admin')->group(function () {



        Route::get('/permissions', [PermissionController::class, 'index'])->middleware('can:permission_view')->name('permissions.index');
        Route::get('/permissions/create', [PermissionController::class, 'create'])->middleware('can:permission_create')->name('permissions.create');
        Route::post('/permissions/create', [PermissionController::class, 'store'])->middleware('can:permission_create')->name('permissions.store');
        Route::get('/permissions/{permission}/edit', [PermissionController::class, 'edit'])->middleware('can:permission_edit')->name('permissions.edit');
        Route::post('/permissions/{permission}/edit', [PermissionController::class, 'update'])->middleware('can:permission_edit')->name('permissions.update');


        Route::get('/roles', [RoleController::class, 'index'])->middleware('can:role_view')->name('roles.index');
        Route::get('/roles/create', [RoleController::class, 'create'])->middleware('can:role_create')->name('roles.create');
        Route::post('/roles/create', [RoleController::class, 'store'])->middleware('can:role_create')->name('roles.store');
        Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->middleware('can:role_edit')->name('roles.edit');
        Route::post('/roles/{role}/edit', [RoleController::class, 'update'])->middleware('can:role_edit')->name('roles.update');

        Route::get('/translate', [TranslateController::class, 'index'])->name('translate.index')->middleware('can:translate_view');
        Route::post('/translate',  [TranslateController::class, 'update'])->name('translate.update')->middleware('can:translate_update');
        Route::post('/translate/create',  [TranslateController::class, 'create_files'])->name('translate.create')->middleware('can:translate_create');



        Route::get('/categories', [CategoryController::class, 'index'])->middleware('can:category_view')->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->middleware('can:category_create')->name('categories.create');
        Route::post('/categories/create', [CategoryController::class, 'store'])->middleware('can:category_create')->name('categories.store');
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->middleware('can:category_edit')->name('categories.edit');
        Route::post('/categories/{category}/edit', [CategoryController::class, 'update'])->middleware('can:category_edit')->name('categories.update');
        Route::post('/categories/{category}/delete', [CategoryController::class, 'destroy'])->middleware('can:category_destroy')->name('categories.destroy');


        Route::get('/occasions', [OccasionController::class, 'index'])->middleware('can:occasion_view')->name('occasions.index');
        Route::get('/occasions/create', [OccasionController::class, 'create'])->middleware('can:occasion_create')->name('occasions.create');
        Route::post('/occasions/create', [OccasionController::class, 'store'])->middleware('can:occasion_create')->name('occasions.store');
        Route::get('/occasions/{occasion}/edit', [OccasionController::class, 'edit'])->middleware('can:occasion_edit')->name('occasions.edit');
        Route::post('/occasions/{occasion}/edit', [OccasionController::class, 'update'])->middleware('can:occasion_edit')->name('occasions.update');
        Route::post('/occasions/{occasion}/delete', [OccasionController::class, 'destroy'])->middleware('can:occasion_destroy')->name('occasions.destroy');

        Route::get('/materials', [MaterialController::class, 'index'])->middleware('can:material_view')->name('materials.index');
        Route::get('/materials/create', [MaterialController::class, 'create'])->middleware('can:material_create')->name('materials.create');
        Route::post('/materials/create', [MaterialController::class, 'store'])->middleware('can:material_create')->name('materials.store');
        Route::get('/materials/{material}/edit', [MaterialController::class, 'edit'])->middleware('can:material_edit')->name('materials.edit');
        Route::post('/materials/{material}/edit', [MaterialController::class, 'update'])->middleware('can:material_edit')->name('materials.update');
        Route::post('/materials/{material}/delete', [MaterialController::class, 'destroy'])->middleware('can:material_destroy')->name('materials.destroy');


        Route::get('/colors', [ColorController::class, 'index'])->middleware('can:color_view')->name('colors.index');
        Route::get('/colors/create', [ColorController::class, 'create'])->middleware('can:color_create')->name('colors.create');
        Route::post('/colors/create', [ColorController::class, 'store'])->middleware('can:color_create')->name('colors.store');
        Route::get('/colors/{color}/edit', [ColorController::class, 'edit'])->middleware('can:color_edit')->name('colors.edit');
        Route::post('/colors/{color}/edit', [ColorController::class, 'update'])->middleware('can:color_edit')->name('colors.update');
        Route::post('/colors/{color}/delete', [ColorController::class, 'destroy'])->middleware('can:color_destroy')->name('colors.destroy');



        Route::get('/designers', [DesignerController::class, 'index'])->middleware('can:designer_view')->name('designers.index');
        Route::get('/designers/create', [DesignerController::class, 'create'])->middleware('can:designer_create')->name('designers.create');
        Route::post('/designers/create', [DesignerController::class, 'store'])->middleware('can:designer_create')->name('designers.store');
        Route::get('/designers/{designer}/edit', [DesignerController::class, 'edit'])->middleware('can:designer_edit')->name('designers.edit');
        Route::post('/designers/{designer}/edit', [DesignerController::class, 'update'])->middleware('can:designer_edit')->name('designers.update');
        Route::post('/designers/{designer}/delete', [DesignerController::class, 'destroy'])->middleware('can:designer_destroy')->name('designers.destroy');


        Route::get('/users', [UserController::class, 'index'])->middleware('can:users_view')->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->middleware('can:users_create')->name('users.create');
        Route::post('/users/create', [UserController::class, 'store'])->middleware('can:users_create')->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware('can:users_edit')->name('users.edit');
        Route::post('/users/{user}/edit', [UserController::class, 'update'])->middleware('can:users_edit')->name('users.update');

        Route::get('/products', [ProductController::class, 'index'])->middleware('can:product_view')->name('products.index');
        Route::get('/products/create', [ProductController::class, 'create'])->middleware('can:product_create')->name('products.create');
        Route::post('/products/create', [ProductController::class, 'store'])->middleware('can:product_create')->name('products.store');
        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('can:product_edit')->name('products.edit');
        Route::post('/products/{product}/edit', [ProductController::class, 'update'])->middleware('can:product_edit')->name('products.update');

        Route::post('/products/upload-image', [ProductController::class, 'upload'])->name('products.image');



        Route::get('/blogs', [BlogController::class, 'index'])->middleware('can:blog_view')->name('blogs.index');
        Route::get('/blogs/create', [BlogController::class, 'create'])->middleware('can:blog_create')->name('blogs.create');
        Route::post('/blogs/create', [BlogController::class, 'store'])->middleware('can:blog_create')->name('blogs.store');
        Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->middleware('can:blog_edit')->name('blogs.edit');
        Route::post('/blogs/{blog}/edit', [BlogController::class, 'update'])->middleware('can:blog_edit')->name('blogs.update');
        Route::post('/blogs/{blog}/delete', [BlogController::class, 'destroy'])->middleware('can:blog_destroy')->name('blogs.destroy');



        Route::get('/faqs', [FaqController::class, 'index'])->middleware('can:faq_view')->name('faqs.index');
        Route::get('/faqs/create', [FaqController::class, 'create'])->middleware('can:faq_create')->name('faqs.create');
        Route::post('/faqs/create', [FaqController::class, 'store'])->middleware('can:faq_create')->name('faqs.store');
        Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit'])->middleware('can:faq_edit')->name('faqs.edit');
        Route::post('/faqs/{faq}/edit', [FaqController::class, 'update'])->middleware('can:faq_edit')->name('faqs.update');
        Route::post('/faqs/{faq}/delete', [MaterialController::class, 'destroy'])->middleware('can:faq_destroy')->name('faqs.destroy');


        Route::get('/testimonials', [TestimonialController::class, 'index'])->middleware('can:testimonial_view')->name('testimonials.index');
        Route::get('/testimonials/create', [TestimonialController::class, 'create'])->middleware('can:testimonial_create')->name('testimonials.create');
        Route::post('/testimonials/create', [TestimonialController::class, 'store'])->middleware('can:testimonial_create')->name('testimonials.store');
        Route::get('/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->middleware('can:testimonial_edit')->name('testimonials.edit');
        Route::post('/testimonials/{testimonial}/edit', [TestimonialController::class, 'update'])->middleware('can:testimonial_edit')->name('testimonials.update');
        Route::post('/testimonials/{testimonial}/delete', [TestimonialController::class, 'destroy'])->middleware('can:testimonial_destroy')->name('testimonials.destroy');


    });
});
