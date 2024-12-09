<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\admin\ActTypeController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogSectionSettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactSectionSettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\FeedbackSectionSettingController;
use App\Http\Controllers\Admin\FooterContactInfoController;
use App\Http\Controllers\Admin\FooterHelpLinkController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\FooterSocialLinkController;
use App\Http\Controllers\Admin\FooterUsefulLinkController;
use App\Http\Controllers\Admin\GeneralSettingController;

use App\Http\Controllers\Admin\ListingImageGalleryController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ServiceInfoController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ListingsController;
use App\Http\Controllers\Frontend\CartController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Admin\CityController;

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

/** Frontend Routes */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contect', [HomeController::class, 'Contect'])->name('contect');
Route::post('/contect', [HomeController::class, 'Contectstor'])->name('contect.store');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-cart/{productId}', [CartController::class, 'addCart'])->name('add.cart');
Route::post('add-cart/{productId}', [CartController::class, 'addCartPro'])->name('add.cartproduct');


// Add this route to handle the quantity update via Ajax
Route::post('cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.update.quantity');



Route::get('remove-item/{productId}', [CartController::class, 'removeItem'])->name('remove.item');
Route::get('clear', [CartController::class, 'clearCart'])->name('clear');






// Handle the form submission

Route::get('/about', [HomeController::class, 'About'])->name('about');


Route::get('/shop', [HomeController::class, 'shop'])->name('frontend.shop');


Route::get('/shop/category/{category}', [HomeController::class, 'shop'])->name('shop.category');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::get('blog-details/{id}', [HomeController::class, 'showBlog'])->name('show.blog');
Route::get('blogs', [HomeController::class, 'blog'])->name('blog');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('resume/download', [AboutController::class, 'resumeDownload'])->name('resume.download');
Route::get('productDetail/{id}', [HomeController::class, 'productDetail'])->name('productDetail');

Route::get('listings', [ListingsController::class, 'index']);

/** Admin Routes */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('dashboard',[DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    /** Hero Route */
 
    Route::resource('serviceinfo', ServiceInfoController::class);

    /** Service Route */
    Route::resource('service', ServiceController::class);

    /** About Route */
    Route::resource('about', AboutController::class);

    /** Portfolio Category Route */
    Route::resource('category', CategoryController::class);
   // Route::post('category.toggleStatus',CategoryController::class,'change');
   // Route::resource('subcategory', SubcategoryController::class);
   Route::post('category/toggle-status', [CategoryController::class, 'toggleStatus'])->
   name('category.toggleStatus');
    /** Skill Items Route */
    Route::resource('acttype', ActTypeController::class);
   /**route listtings */
    Route::resource('listings',ListingController::class);
    Route::get('listings-copy/{id}', [ListingController::class, 'copyl'])->name('listings-copy');
    Route::resource('/listing-image-gallery', ListingImageGalleryController::class);
    
    /** Skill Items Route */
    Route::resource('state', StateController::class);

    /** cities Items Route */
    Route::resource('cities', CityController::class)->except(['show']);

    Route::get('cities/getCitiesByState', [ListingController::class, 'getCitiesByState'])
    ->name('cities.getCitiesByState');
    /** Feedback Route */
    Route::resource('feedback', FeedbackController::class);

    /** Feedback Section Setting Route */
    Route::resource('feedback-section-setting', FeedbackSectionSettingController::class);

    /** Blog Category Route */
    Route::resource('blog-category', BlogCategoryController::class);

    /** Blog Route */
    Route::resource('blog', BlogController::class);

    /** Blog Section Setting Route */
    Route::resource('blog-section-setting', BlogSectionSettingController::class);

    /** Contact Section Setting Route */
    Route::resource('contact-section-setting', ContactSectionSettingController::class);

    /** Footer Social Route */
    Route::resource('footer-social', FooterSocialLinkController::class);

    /** Footer Info Route */
    Route::resource('footer-info', FooterInfoController::class);

    /** Footer Contact Info Route */
    Route::resource('footer-contact-info', FooterContactInfoController::class);

    /** Footer Useful Links Route */
    Route::resource('footer-useful-links', FooterUsefulLinkController::class);

    /** Footer Help Links Route */
    Route::resource('footer-help-links', FooterHelpLinkController::class);

    /** Settings Route */
    Route::get('settings', SettingController::class)->name('settings.index');

    /** General setting Route */
    Route::resource('general-setting', GeneralSettingController::class);

    /** Seo setting Route */
    Route::resource('seo-setting', SeoSettingController::class);

});
