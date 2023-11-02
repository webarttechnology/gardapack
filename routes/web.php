<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\UserActivityController;
use App\Http\Controllers\admin\AdminPagesController;
use App\Http\Controllers\admin\SubAdminController;
use App\Http\Controllers\admin\AdminSettingsController;
use App\Http\Controllers\admin\YourProfileController;
use App\Http\Controllers\admin\NotificationController;
use App\Http\Controllers\admin\CatagoriesManageController;
use App\Http\Controllers\admin\AdminProductsController;
use App\Http\Controllers\admin\SettingsOptionController;
use App\Http\Controllers\admin\ServiceManageController;
use App\Http\Controllers\admin\SubCategoryManageController;
use App\Http\Controllers\admin\ReviewsManageController;
use App\Http\Controllers\admin\GalleryManageController;
use App\Http\Controllers\admin\StockManagementController;
use App\Http\Controllers\admin\FaqManageController;
use App\Http\Controllers\admin\CourseManageController;
use App\Http\Controllers\admin\ProductOrderManageController;
use App\Http\Controllers\admin\AdminNewsletterMAnageController;
use App\Http\Controllers\admin\PdfDownloadManageController;
use App\Http\Controllers\admin\VideoBannerManageController;
use App\Http\Controllers\admin\ExtraManageController;


use App\Http\Controllers\user\PageManageController;
use App\Http\Controllers\user\RatingManageController;
use App\Http\Controllers\user\ProductController;
use App\Http\Controllers\user\UserAuthController;
use App\Http\Controllers\user\CartManageController;
use App\Http\Controllers\user\WishListController;
use App\Http\Controllers\user\OrderManageController;
use App\Http\Controllers\user\NewsletterManageController;
use App\Http\Controllers\user\ContactUsManageController;


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

/**
 *  Front End
*/

Route::controller(PageManageController::class)->group(function(){
      Route::get('/', 'index')->name('user.home');
      Route::get('about-us', 'about_us');
      Route::get('contact-us', 'contact_us');
      Route::get('cart', 'cart');
      Route::get('signup', 'signup_signin')->name('user.signup');
      Route::get('gallery', 'gallery');
      Route::get('faq', 'faq');
      Route::get('service-details/{slug}', 'service_details');
      
      // checkout page
      Route::get('checkout', 'checkout');
      
      // forgot pass page
      Route::get('forgot-password', 'forgot_password');
      Route::post('forgot-password-action', 'forgot_pass_action');
      
      // my accounts
      Route::get('my-account', 'my_account');
      Route::get('change-password', 'change_pass');
      Route::get('order-history', 'order_history');
      
      // 
      Route::post('change-password-action', 'change_pass_action');
      Route::post('edit-profile-action', 'edit_profile_action');
      Route::get('cancel-order/{orderId}', 'cancel_order');
});

// User Register & Login
Route::controller(UserAuthController::class)->group(function(){
      Route::post('register/action', 'register_action')->name('user.register.action');
      Route::post('login/action', 'login_action')->name('user.login.action');
      Route::get('logout', 'logout')->name('user.logout');
});

// Products

Route::controller(ProductController::class)->group(function(){
    Route::get('product-details/{slug}', 'product_details');
    Route::get('product-category/{subcategory_id}/{category_slug}', 'product_category');
    Route::post('product-filter/{category_id}', 'product_filter');
    
    //
    Route::get('fetch/gallery/{id}', 'fetch_gallery_img')->name('fetch/gallery');
    // product search..
    Route::any('product-search', 'product_search');
    Route::get('gallery/image/fetch/{prod_id}/{color}', 'galImg_fetch');
    Route::get('product/variation/fetch/{prod_id}', 'prodVar_fetch');
});

/**
 * Product Rating
*/

Route::controller(RatingManageController::class)
->prefix('user/rating')
->group(function(){
    // Route::get('product/{id}', 'rateing_product');
    Route::post('product-review/{product_id}', 'rateing_product')->name('user.product.review');
});


/**
 * wish list 
*/

Route::controller(WishListController::class)
->prefix('user/wishlist/')
->group(function(){
     Route::get('add/{product_id}/{quantity}', 'add');
     Route::get('page', 'page');
     Route::get('delete/{id}', 'delete');
});


// Newslatter

Route::post('add-newsletter', [NewsletterManageController::class, 'add_newsletter']);

/**
 *  Cart Functionality (Add, Delete) 
*/

Route::controller(CartManageController::class)
->prefix('user/cart/')
->group(function(){
    Route::get('page', 'cart');
    Route::get('add/{product_id}/{cart_quantity}', 'cart_add');
    Route::get('delete/{cart_id}', 'cart_delete');
    Route::get('update/{cart_id}/{quantity}', 'cart_update');
});


/**
 * Product Order
*/

Route::controller(OrderManageController::class)
->prefix('user/product/order/')
->group(function(){
     Route::post('add', [OrderManageController::class, 'order_add']);
});



/**
 * contact us
*/

Route::post('contact-us', [ContactUsManageController::class, 'contact_us']);


/*
      Admin Routes
*/

Route::group(['prefix' => 'admin'], function(){

       // controller grouping
       Route::controller(AdminAuthController::class)->group(function(){
                Route::get('login', 'login_page')->name('login');
                Route::get('register', 'register_page')->name('register');
                Route::get('forgot-password', 'forgot_password_page')->name('forgot-password');
                Route::post('post/forgot/password', 'forgot_password_action')->name('post/forgot/password');
                
                Route::get('logout', 'logout')->name('logout');
                Route::post('post-registration', 'post_registration')->name('post-registration');
                Route::post('post-login', 'post_login')->name('post-login');
       });

        // Admin Auth Middleware..

        Route::middleware(['adminauth'])->group(function(){

                Route::controller(AdminAuthController::class)->group(function(){
                    Route::get('dashboard', 'dashboard_page')->name('dashboard');
                    Route::any('change/password', 'change_password')->name('change/password');
                });

                // User section..
                Route::controller(UserActivityController::class)->group(function(){
                    Route::get('user-lists', 'user_lists')->name('user-lists');
                    Route::get('save/users/{page}/{id}', 'save_users')->name('save/users');
                    Route::post('post/save/user', 'post_save')->name('post/save/user');
                });

                // pages..
                Route::controller(AdminPagesController::class)->group(function(){
                    Route::get('pages-lists', 'pages_lists')->name('pages-lists');
                    Route::get('add/pages', 'admin_add_pages')->name('add/pages');
                    Route::post('save/pages', 'admin_save_pages')->name('save/pages');
                    Route::get('update/pages/{id}', 'update_pages')->name('update/pages');
                });

                // Sub Admin
                Route::controller(SubAdminController::class)->group(function(){
                    Route::get('admin-lists', 'admin_lists')->name('admin-lists');
                    Route::get('sub-admin/save/{page}/{id}', 'admin_save')->name('sub-admin/save');
                    Route::post('sub-admin/post/save', 'admin_post_save')->name('sub-admin/post/save');
                });

                // Settings ..
                Route::controller(AdminSettingsController::class)
                ->prefix('settings')
                ->group(function(){
                    Route::get('page/{key}', 'settings_details')->name('settings/page');
                    Route::get('add/page/{key}', 'add_page')->name('settings/add/page');
                    Route::post('post/add/page/{key}', 'post_add')->name('settings/post/add/page');
                    Route::get('update/page/{id}', 'update_page')->name('settings/update/page');
                    Route::post('post/update/{id}', 'post_update')->name('settings/post/update');
                });

                // Settings Options..
                Route::controller(SettingsOptionController::class)
                ->prefix('settings/options')
                ->group(function(){
                    Route::get('lists', 'lists')->name('settings/options/lists');
                    Route::get('add', 'add_page')->name('section/options/add');
                    Route::post('add/action', 'add_action')->name('section/options/add/action');
                    Route::get('update/{id}', 'update_page')->name('section/options/update');
                    Route::post('update/action/{id}', 'update_action')->name('section/options/update/action');
                    Route::get('delete/{id}', 'delete')->name('section/options/delete');
                }); 

                // Admin's profile
                Route::controller(YourProfileController::class)->group(function(){
                    Route::get('view/your/profile', 'your_profile')->name('view/your/profile');
                    Route::post('save/your/profile/{type}', 'save_profile')->name('save/your/profile');
                    Route::get('select/your/profile/image', 'select_profile_img')->name('select/your/profile/image');
                });

                // categories..
                Route::controller(CatagoriesManageController::class)->group(function(){
                    Route::get('categories/lists/{type}', 'categories_lists')->name('categories/lists');
                    Route::get('add/category/page/{type}', 'add_page')->name('add/category/page');
                    Route::post('add/category/{type}', 'add_action')->name('add/category');
                    Route::get('update/category/page/{id}/{type}', 'update_page')->name('update/category/page');
                    Route::post('update/category/{id}/{type}', 'update')->name('update/category');
                    Route::get('category/delete/{id}', 'delete')->name('category/delete');
                });

                // Products..
                Route::controller(AdminProductsController::class)
                ->prefix('product')
                ->group(function(){
                    Route::get('lists', 'lists')->name('product/lists');
                    Route::get('add', 'add')->name('product/add');
                    Route::post('add', 'add')->name('product/add/post');
                    Route::post('gallery/{id}', 'gallery')->name('product/gallery');
                    Route::get('delete/{id}', 'delete')->name('product/delete');
                    Route::get('update/{id}', 'update')->name('product/update');
                    Route::post('update/{id}', 'update')->name('product/update/action');
                    Route::get('variation/delete/{id}', 'variation_delete')->name('product/variation/delete');


                    // gallery
                    Route::get('gallery/lists/{id}', 'gallery_lists')->name('product/gallery/lists');
                    Route::get('gallery/add/{id}', 'gallery_add')->name('product/gallery/add');
                    Route::get('gallery/delete/{id}', 'gallery_delete')->name('product/gallery/delete');
                    Route::get('gallery/update/{id}', 'gallery_update')->name('product/gallery/update');
                    Route::post('gallery/update/{id}', 'gallery_update')->name('product/gallery/update/action');

                });


                // Services
                Route::controller(ServiceManageController::class)
                ->prefix('services')
                ->group(function(){
                     Route::get('all', 'index')->name('service/all');
                     Route::get('add/page', 'add_page')->name('service/add/page');
                     Route::post('add/action', 'add_action')->name('service/add/action');
                     Route::get('delete/{id}', 'delete')->name('service/delete');
                     Route::get('update/{id}', 'update_page')->name('service/update');
                     Route::post('update/action/{id}', 'update_action')->name('service/update/action');
                     Route::get('gallery/manage/{id}', 'gallery_manage')->name('service/gallery/manage');
                });


                // Sub Categories
                Route::controller(SubCategoryManageController::class)
                ->prefix('sub-categories')
                ->group(function(){
                    Route::get('page/{id}', 'page')->name('page');
                    Route::get('add/page/{category_id}', 'add_page')->name('sub-category/add/page');
                    Route::post('add/page/action/{category_id}', 'add_page_action')->name('sub-category/add/page/action');
                    Route::get('update/page/{id}', 'update_page')->name('sub-category/update/page');
                    Route::post('update/page/action/{id}', 'update_page_action')->name('sub-category/update/page/action');
                    Route::get('delete/{id}', 'delete')->name('sub-category/delete');
                    Route::get('fetch/{category_id}', 'subcategory_fetch')->name('sub-category/fetch');
                });
                
                
                // Review
                Route::controller(ReviewsManageController::class)
                ->prefix('reviews')
                ->group(function(){
                     Route::get('product-reviews/{product_id}', 'reviews')->name('product/reviews');
                     Route::get('product-reviews-delete/{review_id}', 'reviews_delete')->name('product/reviews/delete');
                });
                
                
                // Gallery 
                Route::controller(GalleryManageController::class)
                ->prefix('gallery')
                ->group(function(){
                      Route::get('page', 'page');
                      Route::get('list', 'list');
                      Route::post('add/action', 'add');
                      Route::get('delete/{id}', 'delete');
                      Route::get('update/page/{id}', 'update_page');
                      Route::post('update/page/action/{id}', 'update_page_action');
                });


                // stock management
                Route::controller(StockManagementController::class)
                ->prefix('stock')
                ->group(function(){
                     Route::get('page/{type}', 'page');
                });
                
                
                // FAQ

                Route::controller(FaqManageController::class)
                ->prefix('faq')
                ->group(function(){
                     Route::get('list', 'list');
                     Route::get('add/page', 'add_page');
                     Route::post('add/action', 'add_action');
                     Route::get('delete/{id}', 'delete');
                     Route::get('update/page/{id}', 'update');
                     Route::post('update/action/{id}', 'update_action');
                });
                
                
                // course

                Route::controller(CourseManageController::class)
                ->prefix('course')
                ->group(function(){
                      Route::get('add', 'add');
                      Route::post('add/action', 'add_action');
                      Route::get('list', 'list');
                      Route::get('delete/{id}', 'delete');
                      Route::get('update/{id}', 'update');
                      Route::post('update/action/{id}', 'update_action');
                });
                
                // order
                Route::controller(ProductOrderManageController::class)
                ->prefix('order')
                ->group(function(){
                      Route::get('list', 'list');
                      Route::get('view/details/{id}', 'view_details');
                });
                
                
                // Newsletter
 
                Route::get('newsletter', [AdminNewsletterMAnageController::class, 'newsletter_lists']);

                // user's msg
                Route::get('user-msg', [ContactUsManageController::class, 'user_msg']);
                
                // pdf
                Route::controller(PdfDownloadManageController::class)
                ->prefix('pdf')
                ->group(function(){
                      Route::get('list', 'list');
                      Route::get('add', 'add');
                      Route::post('add/action', 'add_action');
                      
                      Route::get('update/{id}', 'update');
                      Route::post('update/action/{id}', 'update_action');
                      Route::get('delete/{id}', 'delete');
                });
                
                
                // video banner
                Route::controller(VideoBannerManageController::class)
                ->prefix('video/banner')
                ->group(function(){
                      Route::get('page', 'list');
                      Route::post('update/{id}', 'update');
                });
                
                
                // why choose us section 

                Route::controller(ExtraManageController::class)
                ->prefix('others')
                ->group(function(){
                      Route::get('choose-page', 'choose_page');
                      Route::post('choose-page/action/{id}', 'choose_page_action');
                });
                
                // delete routes are only accessable for admin not for sub-admins

                Route::middleware(['is_admin'])->group(function(){
                    // user delete
                    Route::get('user/delete/{id}', [UserActivityController::class, 'user_delete'])->name('user/delete');

                    // page delete
                    Route::get('delete/pages/{id}', [AdminPagesController::class, 'delete_pages'])->name('delete/pages');

                    // sub-admin delete
                    Route::get('sub-admin/delete/{id}', [SubAdminController::class, 'delete'])->name('sub-admin/delete');

                    // Notifications mark as read
                    Route::get('mark/all/notifications', [NotificationController::class, 'mark_all'])->name('mark/all/notifications');
                });

});

});