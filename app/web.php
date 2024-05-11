<?php

//Management
use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\SaveLikeController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\Management\AdminApprovalController;
use App\Http\Controllers\Management\AdminBlogController;
use App\Http\Controllers\Management\AdminController;
use App\Http\Controllers\Management\ApplyNowController;
use App\Http\Controllers\Management\BlogController;
use App\Http\Controllers\Management\CarController;
use App\Http\Controllers\Management\ContactController;
use App\Http\Controllers\Management\ContactDealerController;
use App\Http\Controllers\Management\JobController;
use App\Http\Controllers\Management\LocationController;
use App\Http\Controllers\Management\MakeController;
use App\Http\Controllers\Management\ModelsController;
use App\Http\Controllers\Management\PreQualifiedController;
use App\Http\Controllers\Management\RequestInformationController;
use App\Http\Controllers\Management\ReviewsController;
use App\Http\Controllers\Management\TalentController;
use App\Http\Controllers\Management\TestimonialController;
use Illuminate\Support\Facades\Route;


//Frontend

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

Route::get('/clear-cache', function() {
     $exitCode = Artisan::call('cache:clear');
     $exitCode = Artisan::call('config:cache');
     $exitCode = Artisan::call('route:cache');

     return 'Application cache cleared';
});


Route::fallback(function () {

    return view("404");

});
Route::get('/dealer-request', function () {
    return view('frontend.pages.dealer-request');
});
Route::get('/bythenumber', function () {
    return view('frontend.pages.bythenumber');
});

Route::get('/about-us', function () {
    return view('frontend.pages.about');
});
Route::get('/press-room', function () {
    return view('frontend.pages.pressroom');
});
Route::get('/press-room-detail', function () {
    return view('frontend.pages.pressroomdetail');
});
Route::get('/customer-reviews', function () {
    return view('frontend.pages.customerreviews');
});
Route::get('/find-dealer', function () {
    return view('frontend.pages.findadealer');
});

Route::get('/our-team', function () {
    return view('frontend.pages.our-team');
});
Route::get('/customer-support', function () {
    return view('frontend.pages.customersupport');
});
Route::get('/customer-support-detail', function () {
    return view('frontend.pages.customersupportdetail');
});
Route::get('/delivery', function () {
    return view('frontend.pages.delivery');
});

Route::get('/privacy', function () {
    return view('frontend.pages.privacy');
});
Route::get('/sitemap', function () {
    return view('frontend.pages.sitemap');
});
Route::get('/security', function () {
    return view('frontend.pages.security');
});
Route::get('/vin', function () {
    return view('frontend.pages.vin');
});
Route::get('/bythenumber', function () {
    return view('frontend.pages.bythenumber');
});
Route::get('/inv-rel', function () {
    return view('frontend.pages.inv-rel');
});

Route::get('/terms', function () {
    return view('frontend.pages.terms');
});

Route::get('/ib-ads', function () {
    return view('frontend.pages.ib-ads');
});

Route::get('/personal-info', function () {
    return view('frontend.pages.personal-info');
});


Route::get('/job-search', [App\Http\Controllers\Frontend\FrontHomeController::class, 'JobSearch']);
Route::get('/job-search/{slug}', [App\Http\Controllers\Frontend\FrontHomeController::class, 'JobDetail']);
Route::get('/apply-talent', [App\Http\Controllers\Frontend\FrontHomeController::class, 'ApplyTalent']);
Route::post('/our-talent', [App\Http\Controllers\Frontend\FrontHomeController::class, 'OurTalent']);
Route::get('/apply-now/{id}', [App\Http\Controllers\Frontend\FrontHomeController::class, 'ApplyNow']);
Route::post('apply-job', [App\Http\Controllers\Frontend\FrontHomeController::class, 'ApplyJob']);

Route::get('fetch-car',[App\Http\Controllers\Frontend\FrontHomeController::class, 'FetchHome']);

Route::resource('/', App\Http\Controllers\Frontend\FrontHomeController::class);
Route::get('used-car', [App\Http\Controllers\Frontend\PagesController::class, 'UsedCar']);
Route::get('new-car', [App\Http\Controllers\Frontend\PagesController::class, 'NewCar']);
Route::get('financing', [App\Http\Controllers\Frontend\PagesController::class, 'Financing']);
Route::get('research', [App\Http\Controllers\Frontend\PagesController::class, 'Research']);
Route::get('sell-car', [App\Http\Controllers\Frontend\PagesController::class, 'SellCar']);
Route::get('retrieve', [App\Http\Controllers\Frontend\PagesController::class, 'Retrieve']);
Route::get('sell-more-car', [App\Http\Controllers\Frontend\PagesController::class, 'SellMoreCar']);
Route::get('certified-car', [App\Http\Controllers\Frontend\PagesController::class, 'CertifiedCar']);
Route::get('detail/{id}', [App\Http\Controllers\Frontend\PagesController::class, 'Detail']);
Route::get('listing', [App\Http\Controllers\Frontend\PagesController::class, 'Listing']);
Route::get('contact', [App\Http\Controllers\Frontend\FrontHomeController::class, 'Contact']);
Route::post('/post-contact', [App\Http\Controllers\Frontend\FrontHomeController::class, 'ContactPost']);
Route::post('/contact-dealer', [App\Http\Controllers\Frontend\FrontHomeController::class, 'ContactDealer']);
Route::post('/request-info', [App\Http\Controllers\Frontend\FrontHomeController::class, 'RequestInfo']);
Route::get('career', [App\Http\Controllers\Frontend\FrontHomeController::class, 'Career']);
Route::post('/post-career', [App\Http\Controllers\Frontend\FrontHomeController::class, 'CareerPost']);
Route::resource('blogs', App\Http\Controllers\Frontend\BlogsController::class);
Route::post('post-review', [App\Http\Controllers\Frontend\PagesController::class, 'PostReview']);
Route::get('dealer', [App\Http\Controllers\Frontend\FrontHomeController::class, 'dealer']);
Route::post('/post-dealer', [App\Http\Controllers\Frontend\FrontHomeController::class, 'PostDealer']);
Route::post('sendEmail', [App\Http\Controllers\Frontend\FrontHomeController::class, 'sendEmail']);
Route::post('makedependentmodel', [FrontHomeController::class, 'fetchModal'])->name('fetchModal');
Route::get('get-modal', [CarController::class, 'getModals']);
Route::get('m-admin', [App\Http\Controllers\HomeController::class, 'motorveroAdmin']);
Route::post('/save-like', [App\Http\Controllers\Frontend\SaveLikeController::class, 'SaveLike']);
Route::post('user-data', [App\Http\Controllers\Frontend\FrontHomeController::class, 'UserData']);


Route::get('wishlist', [App\Http\Controllers\Frontend\UserDashboardController::class, 'wishList']);
Route::get('searches', [App\Http\Controllers\Frontend\UserDashboardController::class, 'searches']);
Route::get('recommended', [App\Http\Controllers\Frontend\UserDashboardController::class, 'Recommended']);
//my profile
Route::get('my-profile', [App\Http\Controllers\Frontend\UserDashboardController::class, 'myProfile']);
Route::put('update_profile/{id}', [App\Http\Controllers\Frontend\UserDashboardController::class, 'updateprofile']);
//change password
Route::get('change-password', [App\Http\Controllers\Frontend\UserDashboardController::class, 'password']);
Route::put('update-password/{id}', [App\Http\Controllers\Frontend\UserDashboardController::class, 'updatePassword']);
Route::post('finance', [App\Http\Controllers\Frontend\UserDashboardController::class, 'Finance']);

Route::middleware(['auth'])
    ->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'chatIndex'])->name('chathome');
        Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
        Route::get('/inbox/{id}', [InboxController::class, 'show'])->name('inbox.show');
//Route::group(['middleware' => ['auth']], function() {
        Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('admin/roles', App\Http\Controllers\RoleController::class);
        Route::resource('admin/permissions', App\Http\Controllers\PermissionsController::class);
        Route::resource('admin/users', App\Http\Controllers\UserController::class);
        Route::resource('admin/products', App\Http\Controllers\ProductController::class);
        Route::resource('admin/dashboard', App\Http\Controllers\HomeController::class);
        Route::resource('admin/countries', CountryController::class);
        //Aliyan Route
        Route::resource('admin/location', App\Http\Controllers\Management\LocationController::class);

        Route::get('admin/subscriber', [App\Http\Controllers\Management\ContactController::class, 'subscriber']);
        Route::delete('subscriber-delete/{id}', [App\Http\Controllers\Management\ContactController::class, 'subscriberDelete']);
        //Make
        Route::resource('admin/make', MakeController::class);
        //Model
        Route::resource('admin/model', ModelsController::class);
        //Car
        Route::resource('admin/car', CarController::class);
        //Blog
        Route::resource('admin/blog', BlogController::class);
        //blog-approval
        Route::resource('admin/blog-approval', AdminBlogController::class);
        Route::put('blog_update/{id}', [AdminBlogController::class, 'approvalBlogUpdate']);
        //admin approval
        Route::resource('admin/approval', AdminApprovalController::class);
        Route::put('approval_update/{id}', [AdminApprovalController::class, 'approvalUpdate']);
        Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
        //admin fetch-modal
        Route::post('fetch-model', [CarController::class, 'fetchModel']);
        Route::get('get-model', [CarController::class, 'getModels']);
        //Categories Route
        Route::resource('admin/categories', CategoriesController::class);
        //keyword
        Route::resource('admin/keyword', App\Http\Controllers\Management\KeywordController::class);
        //Store
        Route::resource('admin/store', StoreController::class);
        //video
        Route::resource('admin/videos', VideoshowController::class);
        //slider
        Route::resource('admin/slider', SliderController::class);
        //testimonial
        Route::resource('admin/testimonial', TestimonialController::class);
        //pre_qualified
        Route::resource('admin/pre-qualified', PreQualifiedController::class);
        //pre_qualified
        Route::resource('admin/request-info', RequestInformationController::class);
        //contact-dealer
        Route::resource('admin/contact-dealer', ContactDealerController::class);
        //userinfo
        Route::resource('admin/user-info', UserinfoController::class);
        //pages
        Route::resource('admin/pages', App\Http\Controllers\Frontend\PagesController::class);
        //contact
        Route::resource('admin/contacts', App\Http\Controllers\Management\ContactController::class);
        //career
        Route::resource('admin/career', App\Http\Controllers\Management\CareerController::class);
        //talent
        Route::resource('admin/talent', TalentController::class);
        //apply
        Route::resource('admin/apply', ApplyNowController::class);
        //reviews
        Route::resource('admin/reviews', App\Http\Controllers\Management\ReviewsController::class);
        //coupon
        Route::resource('admin/coupon', CouponController::class);
        Route::resource('admin/theme-setting', App\Http\Controllers\Management\ThemeSettingsController::class);
        Route::post('admin/theme-setting-fields', [App\Http\Controllers\Management\ThemeSettingsController::class, 'theme_setting_fields']);
        Route::resource('admin/job', App\Http\Controllers\Management\JobController::class);
        //testimonials
        Route::resource('admin/testimonial', TestimonialController::class);
        Route::post('post-like', [App\Http\Controllers\Frontend\SaveLikeController::class, 'LikePost']);
        Route::post('post-dislike', [App\Http\Controllers\Frontend\SaveLikeController::class, 'DislikePost']);
        Route::get('admin/myprofile', [App\Http\Controllers\UserController::class, 'Myprofile']);
        Route::post('admin/myprofile', [App\Http\Controllers\UserController::class, 'MyprofilePost']);

    });
Route::post('/validation-plate',[App\Http\Controllers\Frontend\PagesController::class, 'validationOfPlate']);
Auth::routes();

